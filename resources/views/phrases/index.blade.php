<div class="container py-4" style="max-width: 1000px; margin:auto;">

    {{-- Top Bar --}}
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <h1 style="margin:0;">🔄 Phrases List</h1>
        <a href="{{ url()->previous() }}"
           style="padding:8px 14px; background:#f1f1f1; border-radius:8px; text-decoration:none; color:#111; font-weight:500;">
            ← Back
        </a>
    </div>

    {{-- Search --}}
    <form method="GET" action="{{ route('phrases.index') }}" class="mb-4">
        <div style="display:flex; gap:10px;">
            <input
                type="text"
                name="search"
                value="{{ $search ?? '' }}"
                placeholder="Search original, replacement or reason..."
                style="flex:1; padding:10px; border-radius:8px; border:1px solid #ccc;"
            >
            <button
                type="submit"
                style="padding:10px 18px; border:none; border-radius:8px; background:#111; color:#fff; cursor:pointer;"
            >
                Search
            </button>
        </div>
    </form>

    {{-- Table --}}
    <div style="overflow-x:auto;">
        <table style="width:100%; border-collapse:collapse; background:#fff; border-radius:10px; overflow:hidden;">
            <thead style="background:#111; color:#fff;">
            <tr>
                <th style="padding:12px; text-align:left;">Original</th>
                <th style="padding:12px; text-align:left;">Replacement</th>
                <th style="padding:12px; text-align:left;">Reason</th>
            </tr>
            </thead>
            <tbody>
            @forelse($phrases as $phrase)
                <tr style="border-bottom:1px solid #eee;">
                    <td style="padding:12px;"><strong>{{ $phrase->original }}</strong></td>
                    <td style="padding:12px;">{{ $phrase->replacement }}</td>
                    <td style="padding:12px;">{{ $phrase->reason }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="padding:20px; text-align:center;">No phrases found.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div style="margin-top:20px;">
        {{ $phrases->links('pagination::simple-default') }}
    </div>

    <
