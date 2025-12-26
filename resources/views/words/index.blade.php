<div class="container">
    <h1>All Words</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <ul class="list-group">
        @foreach($words as $word)
            <li class="list-group-item">
                <strong>{{ $word->word }}</strong>

            </li>
        @endforeach
    </ul>
</div>
