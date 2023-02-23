<div>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
</div>
@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $err)
            <div class="mb-0">
                {{ $err }}
            </div>
        @endforeach
    </div>
@endif

@if (session('status'))
    <div class="alert alert-danger">
        {{ session('status') }}
    </div>
@endif
