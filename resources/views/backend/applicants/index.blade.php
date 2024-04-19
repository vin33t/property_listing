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
                                <span class="card-title card-padding pb-0">Applicants</span>
                                <a href="{{route('applicants.form')}}" class="mdc-button mdc-button--outlined outlined-button--success">
                                    Add
                                </a>
                            </div>



                            {{--                            list of landlords here--}}
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                    <tr>
                                        <th class="text-left">S No.</th>
                                        <th class="text-left">Name</th>
                                        <th class="text-left">Looking For</th>
                                        <th class="text-left">Budget</th>
                                        <th class="text-left">Area</th>
                                        <th class="text-left">Notes</th>
                                        <th class="text-left">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($applications as $key => $applicant)
                                        <tr>
                                            <td class="text-left">{{++$key}}</td>
                                            <td class="text-left">{{$applicant->name}}</td>
                                            <td class="text-left">{{$applicant->looking_for}}</td>
                                            <td class="text-left">{{$applicant->budget}}</td>
                                            <td class="text-left">{{$applicant->area}}</td>
                                            <td class="text-left">{{$applicant->notes}}</td>
                                            <td class="text-left">
                                                <a href="{{route('applicants.form', $applicant)}}" class="mdc-button mdc-button--raised filled-button--info">
                                                    Edit
                                                </a>
                                                <form action="{{route('applicants.destroy', $applicant)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="mdc-button mdc-button--raised filled-button--danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>


@endsection
