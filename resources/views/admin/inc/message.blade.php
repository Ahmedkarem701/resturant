@if(session('success'))
    <div class="col-sm-12 col-xl-6">
        <div class="">
            <div class="card-body">
                <div style="z-index: 100000" class="alert alert-success dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                    <p> {{ session('success') }}</p>
                    <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div>
@endif
@if($errors->any())
    <div class="col-sm-12 col-xl-6">
        <div class="card height-equal">
            <div class="card-body">
                <div style="z-index: 100000" class="alert alert-danger dark alert-dismissible fade show" role="alert"><i data-feather="thumbs-up"></i>
                    @foreach($errors->all() as $err)
                        <div class="mb-0">
                            {{ $err }}
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
