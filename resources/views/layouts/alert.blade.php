@if (session()->has('message'))
    <div class="container">
        <div class="alert alert-{{ session('message_subject') }}">
            {{ session('message') }}
        </div>
    </div>
@endif
