@if ($errors->any())
    <div>
        <div class="alert alert-danger" role="alert">
            <b>Please fix above issues and try again</b>
            @foreach ($errors->all() as $error)
            <li class="my-2">
                {{ $error }}
            </li>
            @endforeach
        </div>
        
    </div>
@endif
