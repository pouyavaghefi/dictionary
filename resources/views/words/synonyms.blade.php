<div class="container">
    <h1>{{ $languageName }} Synonyms</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <ul class="list-group">
        @foreach($words as $word)
            <li class="list-group-item">
                <strong>{{ $word->word }}</strong>
                <div>
                    Synonyms:
                    @foreach($word->synonyms as $syn)
                        <span class="badge bg-secondary">{{ $syn->word }}</span>
                    @endforeach
                </div>
                <form action="{{ route('words.addSynonym', $word->id) }}" method="POST" class="mt-2">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="synonym" class="form-control" placeholder="Add a synonym...">
                        <button class="btn btn-primary" type="submit">Add</button>
                    </div>
                </form>
            </li>
        @endforeach
    </ul>
</div>
