@if (session('status'))
    <div class = "aler aler-info">
        {{ session('status') }}
    </div>
@endif