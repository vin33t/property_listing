@extends('backend.layout.root')
@section('content')

    <style>
        .placeholder-pg-primary-400 {
            padding-left: 30px !important;
            border: 1px solid whitesmoke !important;
        }

    </style>

    <!-- partial -->
    <div class="page-wrapper mdc-toolbar-fixed-adjust">
        <main class="content-wrapper">
            <div class="mdc-layout-grid">
                <div class="mdc-layout-grid__inner">

                    <div class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                        <div class="mdc-card p-0">
                            <div class="flex w-full justify-between align-items-center px-4">
                                <span class="card-title card-padding">Landlords</span>
                                <a href="{{route('landlords.form')}}" class="mdc-button mdc-button--outlined outlined-button--success">
                                    Add
                                </a>
                            </div>

                          <div class="w-full overflow-x-auto overflow-y-hidden px-16">


                              <livewire:landlord-table/>
                          </div>
                            {{--                            list of landlords here--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table table-hoverable">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th class="text-left">S No.</th>--}}
{{--                                        <th class="text-left">Name</th>--}}
{{--                                        <th class="text-left">Email</th>--}}
{{--                                        <th class="text-left">Mobile</th>--}}
{{--                                        <th class="text-left">Address</th>--}}
{{--                                        <th class="text-left">Notes</th>--}}
{{--                                        <th class="text-left">Action</th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    @foreach($landlords as $landlord)--}}
{{--                                        <tr>--}}
{{--                                            <td class="text-left">{{$loop->iteration}}</td>--}}
{{--                                            <td class="text-left">{{$landlord->name}}</td>--}}
{{--                                            <td class="text-left">{{$landlord->email}}</td>--}}
{{--                                            <td class="text-left">{{$landlord->mobile}}</td>--}}
{{--                                            <td class="text-left">{{$landlord->address}}</td>--}}
{{--                                            <td class="text-left">{{$landlord->notes}}</td>--}}
{{--                                            <td class="text-left">--}}
{{--                                                <a href="{{route('landlords.form',$landlord)}}" class="mdc-button mdc-button--raised filled-button--info">--}}
{{--                                                    Edit--}}
{{--                                                </a>--}}
{{--                                                <form action="{{route('landlords.destroy',$landlord)}}" method="post" class="inline">--}}
{{--                                                    @csrf--}}
{{--                                                    @method('delete')--}}
{{--                                                    <button type="submit" class="mdc-button mdc-button--raised filled-button--danger">--}}
{{--                                                        Delete--}}
{{--                                                    </button>--}}
{{--                                                </form>--}}
{{--                                            </td>--}}

{{--                                    @endforeach--}}
{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
                            {{--                             list of landlords ends here--}}


                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
    </div>


@endsection
