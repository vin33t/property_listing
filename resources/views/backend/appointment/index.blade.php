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
                                <a href="{{route('appointment.form')}}" class="mdc-button mdc-button--outlined outlined-button--success">
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
                                        <th class="text-left">Property</th>
                                        <th class="text-left">Appointment Date</th>
                                        <th class="text-left">Description</th>
                                        {{--                                        <th class="text-left">Image</th>--}}
                                        <th class="text-left">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($appointments as $appointment)
                                       <tr>
                                             <td class="text-left">{{$loop->iteration}}</td>
                                             <td class="text-left">{{$appointment->client_name}}</td>
                                             <td class="text-left">{{$appointment->property->title}}</td>
                                             <td class="text-left">{{ \Carbon\Carbon::parse($appointment->appointment_date)->format('D d M, Y') }}</td>
                                             <td class="text-left">{{$appointment->remark}}</td>
                                             <td class="text-left">
                                                  <a href="{{route('appointment.form',$appointment->id)}}" class="mdc-button mdc-button--raised filled-button--info">
                                                      Edit
                                                    </a>
                                                    <form action="{{route('appointment.destroy',$appointment->id)}}" method="post" class="inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="mdc-button mdc-button--raised filled-button--danger">
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
