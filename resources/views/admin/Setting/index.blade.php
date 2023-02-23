@extends('admin.inc.layout');
@section('main')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Edit Website</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}"> <i data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Setting</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="edit-profile">
                <div class="row">
                    <div class="col-xl-12">
                        @extends('admin.inc.message')
                        <form class="card" method="post" action="{{ url("/dashboard/setting/update/1") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="card-header pb-0">
                                <h4 class="card-title mb-0">Website Setting</h4>
                                <div class="card-options">
                                    <a class="card-options-collapse" href="#" data-bs-toggle="card-collapse">
                                        <i class="fe fe-chevron-up"></i>
                                    </a>
                                    <a class="card-options-remove" href="#" data-bs-toggle="card-remove">
                                        <i class="fe fe-x"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="mb-3">
                                            <label class="form-label">Website name</label>
                                            <input class="form-control" type="text" name="name" value="{{ $setting->name }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Phone</label>
                                            <input class="form-control" type="text" name="phone" value="{{ $setting->phone }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Email address</label>
                                            <input class="form-control" type="email" name="email" value="{{ $setting->email }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Logo</label>
                                            <input class="form-control" type="file" name="logo">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label class="form-label">Address</label>
                                            <input class="form-control" type="text" name="address" value="{{ $setting->address }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4">
                                        <div class="mb-3">
                                            <label class="form-label">Keywords</label>
                                            <input class="form-control" type="text" name="keywords" value="{{ $setting->keywords }}">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div>
                                            <label class="form-label">Website Description</label>
                                            <input class="form-control" type="text"
                                                   value="{{ $setting->description }}" name="description">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Facebook</label>
                                            <input class="form-control" type="text" name="facebook" value="{{ $setting->facebook }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Instagram</label>
                                            <input class="form-control" type="text" name="instagram" value="{{ $setting->instagram }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Linkedin</label>
                                            <input class="form-control" type="text" name="linkedin" value="{{ $setting->linkedin }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-3">
                                        <div class="mb-3">
                                            <label class="form-label">Twitter</label>
                                            <input class="form-control" type="text" name="twitter" value="{{ $setting->twitter }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary" type="submit">Update Profile</button>
                            </div>
                        </form>
                        <!-- Container-fluid Ends-->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
