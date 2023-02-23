@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Dashboard</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="home-item" href="{{ url('/dashboard') }}"><i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item"> Contacts</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @extends('admin.inc.message')
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Contacts</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Message</th>
                                    <th scope="col">Created at</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $index=>$contact)
                                    <tr>
                                        <th scope="row">{{ $index+1 }}</th>
                                        <td>{{ $contact->firstname }}</td>
                                        <td>{{ $contact->lastname }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->message }}</td>
                                        <td>{{ \Carbon\Carbon::parse($contact->created_at)->format('d M, Y') }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
