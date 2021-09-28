@if (session('status'))
    <div class="alert alert-{{session('status')}}" role="alert">
        {{ session('Msg') }}
    </div>
@endif
