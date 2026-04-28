{{-- resources/views/words/index.blade.php --}}

<div class="container py-4" style="max-width: 1000px; margin: auto;">

    {{-- Top Bar --}}
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h1 style="margin:0;">📚 Word List</h1>

        <div style="display:flex; gap:10px;">
            <a href="{{ route('words.create') }}" 
               style="padding:8px 14px; background:#58cc02; border-radius:8px; text-decoration:none; color:#fff; font-weight:bold;">
                ➕ Add New Word
            </a>
            <a href="{{ url()->previous() }}"
               style="padding:8px 14px; background:#f1f1f1; border-radius:8px; text-decoration:none; color:#111; font-weight:500;">
                ← Back
            </a>
        </div>
    </div>

    @if(session('success'))
        <div style="padding:15px; background:#d4edda; color:#155724; border-radius:8px; margin-bottom:15px; border:1px solid #c3e6cb;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Search --}}
    <form method="GET" action="{{ route('words.index') }}" class="mb-4">
        <div style="display:flex; gap:10px;">
            <input
                type="text"
                name="search"
                value="{{ $search }}"
                placeholder="Search word, Farsi or English..."
                style="flex:1; padding:12px; border-radius:8px; border:1px solid #ddd; font-size:16px;"
            >
            <button
                type="submit"
                style="padding:10px 22px; border:none; border-radius:8px; background:#111; color:#fff; cursor:pointer; font-weight:bold;"
            >
                Search
            </button>
        </div>
    </form>

    {{-- Table --}}
    <div style="overflow-x:auto;">
        <table style="width:100%; border-collapse:collapse; background:#fff; border-radius:10px; overflow:hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
            <thead style="background:#111; color:#fff;">
            <tr>
                <th style="padding:15px; text-align:left;">Word</th>
                <th style="padding:15px; text-align:left;">Farsi</th>
                <th style="padding:15px; text-align:left;">English</th>
                <th style="padding:15px; text-align:left;">Source</th>
            </tr>
            </thead>
            <tbody>
            @forelse($words as $word)
                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:15px;"><strong>{{ $word->word }}</strong></td>
                    <td style="padding:15px;">{{ $word->meaning ?? '-' }}</td>
                    <td style="padding:15px;">{{ $word->meaning_en ?? '-' }}</td>
                    <td style="padding:15px;">
                        @if($word->creator_type == \App\Models\Word::CREATOR_USER)
                            <span style="padding:4px 10px; background:#e3f2fd; color:#1e88e5; border-radius:20px; font-size:12px; font-weight:bold; border:1px solid #bbdefb;">
                                👤 User Added
                            </span>
                        @else
                            <span style="padding:4px 10px; background:#f5f5f5; color:#757575; border-radius:20px; font-size:12px; font-weight:bold; border:1px solid #e0e0e0;">
                                💻 System
                            </span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="padding:30px; text-align:center; color:#999;">
                        No words found.
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    <div style="margin-top:20px;">
        {{ $words->links('pagination::simple-default') }}
    </div>


</div>
