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
                            <li class="breadcrumb-item">
                                <a class="home-item" href="{{ url('/dashboard') }}">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"> FeedBack</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
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
                                                          action="{{ url('dashboard/feedback/store') }}"
                                                          enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">Name</label>
                                                                        <input class="form-control" type="text"
                                                                               placeholder="name" name="name">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">Job</label>
                                                                        <input class="form-control" type="text"
                                                                               placeholder="Job" name="job">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">English
                                                                            Feedback</label>
                                                                        <input class="form-control" type="text"
                                                                               placeholder="Description"
                                                                               name="feedback_en">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div style="margin: 20px 0 !important;" class="row">
                                                                <div class="col">
                                                                    <div>
                                                                        <label class="form-label">Arabic
                                                                            Feedback</label>
                                                                        <input class="form-control" type="text"
                                                                               placeholder="Description"
                                                                               name="feedback_ar">
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
                            <h5>Feedback</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Job</th>
                                    <th scope="col">Feedback(en)</th>
                                    <th scope="col">Feedback(ar)</th>
                                    <th scope="col">Created at</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($feedbacks as $index=>$feedback)
                                    <tr>
                                        <th scope="row">{{ $index+1 }}</th>
                                        <td>{{ $feedback->name}}</td>
                                        <td>{{ $feedback->job}}</td>
                                        <td>{{ $feedback->feedback('en')}}</td>
                                        <td>{{ $feedback->feedback('ar')}}</td>
                                        <td>{{ \Carbon\Carbon::parse($feedback->created_at)->format('d M, Y') }}</td>
                                        <td>
                                            <a href="{{ url("dashboard/feedback/delete/$feedback->id") }}"
                                               class="btn btn-danger btn-xs" type="button"
                                               data-original-title="btn btn-danger btn-xs" title="">Delete</a>
                                            <button class="btn btn-primary btn-xs" type="button" data-bs-toggle="modal"
                                                    data-id="{{ $feedback->id }}" data-name="{{ $feedback->name }}"
                                                    data-job="{{ $feedback->job }}"
                                                    data-feedback-en="{{ $feedback->feedback('en') }}"
                                                    data-feedback-ar="{{ $feedback->feedback('ar') }}"
                                                    data-bs-target=".bd-example-modal-xxl{{$feedback->id}}">Edit
                                            </button>
                                            <div class="modal fade bd-example-modal-xxl{{$feedback->id}}" tabindex="-1" role="dialog"
                                                 aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Edit</h4>
                                                            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div style="padding: 0" class="modal-body">
                                                            <div class="card">
                                                                <form class="form theme-form" method="post" action="{{ url("dashboard/feedback/update/$feedback->id") }}">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $feedback->id }}">
                                                                    <div class="card-body">
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label class="form-label">Name</label>
                                                                                    <input class="form-control" type="text" name="name" value="{{ $feedback->name }}">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label class="form-label">Job</label>
                                                                                    <input class="form-control" type="text" value="{{ $feedback->job }}" name="job">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label class="form-label">English
                                                                                        Feedback</label>
                                                                                    <input class="form-control"
                                                                                           type="text"
                                                                                           value="{{ $feedback->feedback('en') }}"
                                                                                           name="feedback_en">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div style="margin: 20px 0 !important;"
                                                                             class="row">
                                                                            <div class="col">
                                                                                <div>
                                                                                    <label class="form-label">Arabic
                                                                                        Feedback</label>
                                                                                    <input class="form-control"
                                                                                           type="text"
                                                                                           value="{{ $feedback->feedback('ar') }}"
                                                                                           name="feedback_ar">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-footer text-end">
                                                                        <button class="btn btn-primary" type="submit">
                                                                            Submit
                                                                        </button>
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

