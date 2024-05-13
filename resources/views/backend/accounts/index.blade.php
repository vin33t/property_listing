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
                                <span class="card-title card-padding pb-0">Accounts</span>
                                <a href="{{route('accounts.form')}}" class="mdc-button mdc-button--outlined outlined-button--success">
                                    Add
                                </a>
                            </div>



                            {{--                            list of landlords here--}}
                            <div class="table-responsive">
                                <table class="table table-hoverable">
                                    <thead>
                                    <tr>
                                        <th class="text-left">S No.</th>
                                        <th class="text-left">Property Name</th>
                                        <th class="text-left">Client Name</th>
                                        <th class="text-left">Type</th>
                                        <th class="text-left">Price</th>
                                        <th class="text-left">Commission</th>
                                        <th class="text-left">Transaction Date</th>
                                        {{--                                        <th class="text-left">Image</th>--}}
                                        <th class="text-left">Action</th>
                                        <th class="text-left">Mail</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @forelse($accounts as $account)
                                        <tr>
                                            <td class="text-left">{{$loop->index + 1}}</td>
                                            <td class="text-left">{{$account->property->title}}</td>
                                            <td class="text-left">{{$account->tenant->name}}</td>
                                            <td class="text-left">{{ ucfirst($account->type) }}</td>
                                            <td class="text-left">{{$account->price}}</td>
                                            <td class="text-left">{{$account->commission}}</td>
                                            <td class="text-left">{{ $account->transaction_date->format('D d F, Y') }}</td>
                                            <td class="text-left">
                                                <a href="{{ route('accounts.form',$account) }}" class="mdc-button mdc-button--raised filled-button--info">
                                                    Edit
                                                </a>



                                                <form action="{{route('accounts.destroy', $account)}}"
                                                      method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit"
                                                            class="mdc-button mdc-button--raised filled-button--danger">
                                                        Delete
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="text-left">
                                                <a href=""  class="mdc-button text-button--secondary">
                                                    Rent Reminder
                                                </a>
                                                <a href="" class="mdc-button text-button--info">
                                                    Rent Receipt
                                                </a>
                                            </td>

                                    @empty
                                        <tr>
                                            <td colspan="9" class="text-center">No Accounts Found</td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
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
