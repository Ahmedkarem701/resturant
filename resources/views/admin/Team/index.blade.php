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
                            <li class="breadcrumb-item"> Team</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        @extends('admin.inc.message')
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dash">
            <div class="row">
                <div class="col-md-12 project-list">
                    <div class="card">
                        <div class="row">
                            <div class="col-md-6 p-0"></div>
                            <div class="col-md-6 p-0">
                                <div class="form-group mb-0 me-0"></div>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                        data-bs-target=".bd-example-modal-xl">Create New
                                </button>
                                <div class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog"
                                     aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Create New</h4>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <div style="padding: 0" class="modal-body">
                                                <div class="card">
                                                    <form class="form theme-form" method="post"
                                                          action="{{ url('dashboard/team/store') }}"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">Image</label>
                                                                        <input class="form-control" type="file"
                                                                               name="img">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">Arabic Name</label>
                                                                        <input class="form-control" type="text"
                                                                               placeholder="name" name="name_ar">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">English Name</label>
                                                                        <input class="form-control" type="text"
                                                                               placeholder="name" name="name_en">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">Arabic
                                                                            Job</label>
                                                                        <input class="form-control" type="text"
                                                                               placeholder="Description"
                                                                               name="job_ar">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">English
                                                                            Job</label>
                                                                        <input class="form-control" type="text"
                                                                               placeholder="Description"
                                                                               name="job_en">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card-footer text-end">
                                                            <button class="btn btn-primary" type="submit">Submit
                                                            </button>
                                                            <input class="btn btn-light" type="reset" value="Cancel">
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Team</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name(en)</th>
                                    <th scope="col">Name(ar)</th>
                                    <th scope="col">Job(ar)</th>
                                    <th scope="col">Job(en)</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($teams as $index=>$team)
                                    <tr>
                                        <th scope="row">{{ $index+1 }}</th>
                                        <td><img
                                                style="width: 100px;height: 100px;border: 1px solid black;border-radius: 50%;"
                                                src="{{ url("uploads/$team->img") }}"></td>
                                        <td>{{ $team->name('en') }}</td>
                                        <td>{{ $team->name('ar') }}</td>
                                        <td>{{ $team->job('en') }}</td>
                                        <td>{{ $team->job('ar') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($team->created_at)->format('d M, Y') }}</td>
                                        <td>
                                            <a href="{{ url("dashboard/team/delete/$team->id") }}"
                                               class="btn btn-danger btn-xs" type="button"
                                               data-original-title="btn btn-danger btn-xs" title="">Delete</a>
                                            <button class="btn btn-primary btn-xs" type="button" data-bs-toggle="modal"
                                                    data-bs-target=".bd-example-modal-xxl{{$team->id}}">Edit
                                            </button>
                                            <div class="modal fade bd-example-modal-xxl{{$team->id}}" tabindex="-1" role="dialog"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit</h4>
                                                            <button class="btn-close" type="button"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div style="padding: 0" class="modal-body">
                                                            <div class="card">
                                                                <form class="form theme-form" method="post"
                                                                      action="{{ url("dashboard/team/update/$team->id") }}"
                                                                      enctype="multipart/form-data" id="edit-form">
                                                                    @csrf
                                                                    <input type="hidden" name="id"
                                                                           value="{{ $team->id }}">
                                                                    <div class="card-body">
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label
                                                                                        class="form-label">Image</label>
                                                                                    <input class="form-control"
                                                                                           type="file" name="img">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label class="form-label">Arabic
                                                                                        Name</label>
                                                                                    <input class="form-control"
                                                                                           type="text"
                                                                                           placeholder="name"
                                                                                           name="name_ar"
                                                                                           value="{{ $team->name('ar') }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label class="form-label">English
                                                                                        Name</label>
                                                                                    <input class="form-control"
                                                                                           type="text" name="name_en"
                                                                                           value="{{ $team->name('en') }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label class="form-label">Arabic
                                                                                        Description</label>
                                                                                    <input class="form-control"
                                                                                           type="text"
                                                                                           value="{{ $team->job('ar') }}"
                                                                                           name="job_ar">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label class="form-label">English
                                                                                        Description</label>
                                                                                    <input class="form-control"
                                                                                           type="text"
                                                                                           value="{{ $team->job('en') }}"
                                                                                           name="job_en">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-end">
                                                                        <button class="btn btn-primary" type="submit">
                                                                            Submit
                                                                        </button>
                                                                        <input class="btn btn-light" type="reset"
                                                                               value="Cancel">
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
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
