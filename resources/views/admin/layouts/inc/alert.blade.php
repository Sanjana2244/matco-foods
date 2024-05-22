@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Error</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@elseif(session('error'))
    <div class="alert alert-danger">
        <strong>Message</strong>
        <p>{{ session('error') }}</p>
    </div>
@elseif(session('success'))
    <div class="alert alert-success">
        <strong>Message</strong>
        <p>{{ session('success') }}</p>
    </div>
@endif
