@extends('backend.layout.root')
@section('content')
    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div class="flex w-full justify-between p-4">
                                <span class="card-title card-padding pb-0">Appointments</span>
                                <a href="{{route('appointment.form')}}"
                                   class="mdc-button mdc-button--outlined outlined-button--success">
                                    Add
                                </a>
                            </div>


                            {{--                            list of appointments here--}}
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                    <tr>
                                        <th class="text-left">S No.</th>
                                        <th class="text-left">Client Name</th>
                                        <th class="text-left">Email</th>
                                        <th class="text-left">Upcoming Meeting</th>
                                        <th class="text-left">Completed Meetings</th>
                                        <th class="text-left">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($appointments as $appointment)
                                        <tr>
                                            <td class="text-left">{{$loop->iteration}}</td>
                                            <td class="text-left">{{$appointment->client_name}}</td>
                                            <td class="text-left">{{$appointment->client_email}}</td>
                                            <td class="text-left">
                                                @foreach($appointment->upcomingMeetings() as $meeting)

                                                <div class="flex flex-col bg-gray-200 p-2 rounded-sm mb-2">
                                                    <span><i class="font-weight-bold">Property: </i>{{$meeting->property->title}}</span>
                                                    <span><i class="font-weight-bold">Time: </i>{{ \Carbon\Carbon::parse($meeting->date)->format('D d M, Y H:i A') }}</span>
                                                    <span><i class="font-weight-bold">Description: </i>{{$meeting->description}}</span>
                                                    <span><i class="font-weight-bold">With Whom: </i>{{$meeting->with_whom}}</span>
                                                    <div>
                                                        <a href="{{route('appointment.form',[$appointment->id,'editMeeting',$meeting->id])}}"
                                                                class="mdc-button mdc-button--raised filled-button--warning">
                                                            Edit
                                                        </a>
                                                        @if($appointment->client_email)
                                                            <form
                                                                action="{{ route('notification.notify',['appointment','meeting_alert',$appointment->id]) }}"
                                                                method="POST">
                                                                @csrf
                                                                <input type="hidden" name="meeting_id" value="{{$meeting->id}}">
                                                                <button type="submit"
                                                                        class="mdc-button mdc-button--raised filled-button--success">
                                                                    Send Alert
                                                                </button>
                                                            </form>
                                                        @endif

                                                        <form
                                                            action="{{ route('notification.notify',['appointment','feedback_alert',$appointment->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            <input type="hidden" name="meeting_id" value="{{$meeting->id}}">
                                                            <button type="submit"
                                                                    class="mdc-button mdc-button--raised filled-button--info">
                                                                Feedback
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                                @endforeach

                                            </td>   <td class="text-left">
                                                @foreach($appointment->pastMeetings() as $meeting)

                                                <div class="flex flex-col bg-gray-200 p-2 rounded-sm mb-2">
                                                    <span><i class="font-weight-bold">Property: </i>{{$meeting->property->title}}</span>
                                                    <span><i class="font-weight-bold">Time: </i>{{ $meeting->date->format('D d M, Y H:i A') }}</span>
                                                    <span><i class="font-weight-bold">Description: </i>{{$meeting->description}}</span>
                                                    <span><i class="font-weight-bold">With Whom: </i>{{$meeting->with_whom}}</span>
                                                    <span><i class="font-weight-bold">Feedback: </i>{{$meeting->feedback}}</span>
                                                    <span><i class="font-weight-bold">Updated on: </i>{{$meeting->updated_at->format('D d M, Y H:i A')}}</span>
                                                </div>
                                                @endforeach

                                            </td>
                                            <td class="text-left" style="display: flex; gap: 5px">
                                                <a href="{{route('appointment.form',[$appointment->id,'newMeeting'])}}"
                                                   class="mdc-button mdc-button--raised filled-button--info">
                                                    Add meeting
                                                </a>
                                                <form action="{{route('appointment.destroy',$appointment->id)}}"
                                                      method="post" class="inline">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                            class="mdc-button mdc-button--raised filled-button--danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>


                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{--                             list of appointments ends here--}}


                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>

@endsection
