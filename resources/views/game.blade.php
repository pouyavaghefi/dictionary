<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Game — {{ $language->name ?? 'Practice' }}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary:    #58cc02;
            --primary-dk: #3d8f00;
            --danger:     #ff4b4b;
            --warning:    #ffc800;
            --bg:         #111827;
            --card:       #1f2937;
            --border:     #374151;
            --text:       #f9fafb;
            --muted:      #9ca3af;
            --pill-bg:    #374151;
            --pill-active:#58cc02;
            --radius:     14px;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            background: var(--bg);
            font-family: 'Inter', sans-serif;
            color: var(--text);
            min-height: 100vh;
        }

        /* ── Header ── */
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 32px;
            border-bottom: 1px solid var(--border);
        }
        header .logo {
            font-size: 20px;
            font-weight: 800;
            color: var(--primary);
            text-decoration: none;
        }
        header nav a {
            color: var(--muted);
            text-decoration: none;
            font-size: 14px;
            margin-left: 20px;
            transition: color .2s;
        }
        header nav a:hover { color: var(--text); }

        /* ── Page layout ── */
        .page {
            max-width: 680px;
            margin: 0 auto;
            padding: 36px 20px 60px;
        }

        /* ── Stats bar ── */
        .stats-bar {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
            margin-bottom: 28px;
        }
        .stat-card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: var(--radius);
            padding: 14px 12px;
            text-align: center;
        }
        .stat-card .num {
            font-size: 28px;
            font-weight: 800;
            line-height: 1;
        }
        .stat-card .label {
            font-size: 12px;
            color: var(--muted);
            margin-top: 4px;
            text-transform: uppercase;
            letter-spacing: .05em;
        }
        .stat-card.correct .num { color: var(--primary); }
        .stat-card.wrong   .num { color: var(--danger);  }
        .stat-card.total   .num { color: var(--warning); }

        /* ── Language pills ── */
        .lang-section { margin-bottom: 24px; }
        .lang-section h3 {
            font-size: 13px;
            color: var(--muted);
            text-transform: uppercase;
            letter-spacing: .06em;
            margin-bottom: 10px;
        }
        .lang-pills {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }
        .lang-pills a {
            display: inline-block;
            padding: 7px 16px;
            border-radius: 999px;
            background: var(--pill-bg);
            color: var(--text);
            text-decoration: none;
            font-size: 13px;
            font-weight: 600;
            border: 1px solid var(--border);
            transition: background .18s, border-color .18s, transform .12s;
        }
        .lang-pills a:hover {
            background: #4b5563;
            transform: translateY(-1px);
        }
        .lang-pills a.active {
            background: var(--pill-active);
            border-color: var(--pill-active);
            color: #fff;
        }

        /* ── Game card ── */
        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 20px;
            padding: 36px 32px 28px;
            position: relative;
            overflow: hidden;
        }
        .card::before {
            content: '';
            position: absolute;
            top: -40px; right: -40px;
            width: 180px; height: 180px;
            background: radial-gradient(circle, rgba(88,204,2,.12) 0%, transparent 70%);
            pointer-events: none;
        }

        .prompt {
            font-size: 13px;
            color: var(--muted);
            text-align: center;
            text-transform: uppercase;
            letter-spacing: .07em;
            margin-bottom: 12px;
        }
        .prompt span {
            color: var(--primary);
            font-weight: 700;
        }

        .word-display {
            font-size: 44px;
            font-weight: 800;
            text-align: center;
            letter-spacing: -.5px;
            margin-bottom: 28px;
            line-height: 1.1;
        }

        /* ── Input ── */
        .input-wrap {
            position: relative;
        }
        .input-wrap input {
            width: 100%;
            padding: 16px 18px;
            border-radius: 12px;
            border: 2px solid var(--border);
            background: var(--bg);
            color: var(--text);
            font-size: 17px;
            font-family: inherit;
            transition: border-color .2s;
            outline: none;
        }
        .input-wrap input:focus {
            border-color: var(--primary);
        }
        .input-wrap input::placeholder { color: var(--muted); }

        /* ── Submit button ── */
        .btn-check {
            margin-top: 14px;
            width: 100%;
            padding: 16px;
            background: var(--primary);
            border: none;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
            transition: background .2s, transform .12s;
            letter-spacing: .02em;
        }
        .btn-check:hover {
            background: var(--primary-dk);
            transform: translateY(-1px);
        }
        .btn-check:active { transform: translateY(0); }

        /* ── Feedback alerts ── */
        .alert {
            display: flex;
            align-items: flex-start;
            gap: 10px;
            border-radius: 12px;
            padding: 14px 16px;
            margin-top: 18px;
            font-size: 14px;
            line-height: 1.5;
            animation: slideIn .25s ease;
        }
        .alert-success {
            background: rgba(88, 204, 2, .12);
            border: 1px solid rgba(88, 204, 2, .35);
            color: #a3e635;
        }
        .alert-error {
            background: rgba(255, 75, 75, .12);
            border: 1px solid rgba(255, 75, 75, .35);
            color: #fca5a5;
        }
        .alert .icon { font-size: 18px; flex-shrink: 0; margin-top: 1px; }

        @keyframes slideIn {
            from { opacity: 0; transform: translateY(-6px); }
            to   { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<header>
    <a href="{{ url('/') }}" class="logo">📖 Dictionary</a>
    <nav>
        <a href="{{ url('/words') }}">Words</a>
        <a href="{{ url('/tests/start') }}">Tests</a>
        <a href="{{ url('/game') }}">Game</a>
    </nav>
</header>

<div class="page">

    {{-- ── Stats Bar ── --}}
    <div class="stats-bar">
        <div class="stat-card correct">
            <div class="num">{{ session('stats.correct', 0) }}</div>
            <div class="label">✅ Correct</div>
        </div>
        <div class="stat-card wrong">
            <div class="num">{{ session('stats.wrong', 0) }}</div>
            <div class="label">❌ Wrong</div>
        </div>
        <div class="stat-card total">
            <div class="num">{{ session('stats.total', 0) }}</div>
            <div class="label">🔢 Total</div>
        </div>
    </div>

    {{-- ── Language Selector ── --}}
    @if(isset($languages) && $languages->count() > 1)
    <div class="lang-section">
        <h3>Choose Language</h3>
        <div class="lang-pills">
            @foreach($languages as $lang)
                <a href="{{ route('game.language', ['language' => $lang->code]) }}"
                   class="{{ isset($language) && $language->id === $lang->id ? 'active' : '' }}">
                    {{ $lang->name }}
                </a>
            @endforeach
        </div>
    </div>
    @endif

    {{-- ── Game Card ── --}}
    <div class="card">
        <p class="prompt">
            Translate this
            <span>{{ $language->name ?? 'word' }}</span>
            word to
            <span>{{ $sentence === 'en' ? 'English' : ($sentence === 'fa' ? 'Persian' : '—') }}</span>
        </p>

        <div class="word-display">{{ $question }}</div>

        <form method="POST" action="{{ route('game.check') }}">
            @csrf
            <div class="input-wrap">
                <input
                    type="text"
                    id="user_guess"
                    name="user_guess"
                    autocomplete="off"
                    autofocus
                    placeholder="Type your answer…"
                    required>
            </div>
            <button type="submit" class="btn-check">Check Answer →</button>
        </form>

        @if(session('success'))
            <div class="alert alert-success">
                <span class="icon">✅</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-error">
                <span class="icon">❌</span>
                <span>{{ session('error') }}</span>
            </div>
        @endif
    </div>

</div>

</body>
</html>
