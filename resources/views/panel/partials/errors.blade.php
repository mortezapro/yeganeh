@if ($errors->any())
    <div class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <p  class="error">{{ $error }}</p>
        @endforeach
    </div>
@endif
