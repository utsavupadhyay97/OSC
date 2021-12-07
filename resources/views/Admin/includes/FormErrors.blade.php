@if(!$errors->isEmpty())
    <div>
        <div>
            <strong>Oops !! something went wrong</strong>
        </div>

        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    </div>
@endif