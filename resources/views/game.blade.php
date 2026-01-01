<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice</title>

    <style>
        :root {
            --primary: #58cc02;
            --danger: #ff4b4b;
            --bg: #f5f5f5;
            --white: #ffffff;
        }

        body {
            background: var(--bg);
            font-family: sans-serif;
        }

        .container {
            max-width: 700px;
            margin: 40px auto;
            padding: 20px;
        }

        .card {
            background: var(--white);
            border-radius: 14px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,.08);
        }

        .question {
            font-size: 22px;
            text-align: center;
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 14px;
            border-radius: 10px;
            border: 1px solid #ddd;
            font-size: 16px;
        }

        button {
            margin-top: 20px;
            width: 100%;
            padding: 14px;
            background: var(--primary);
            border: none;
            border-radius: 12px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }

        .alert-success {
            color: var(--primary);
            text-align: center;
            margin-top: 15px;
        }

        .alert-error {
            color: var(--danger);
            text-align: center;
            margin-top: 15px;
        }

        .stats {
            display: flex;
            justify-content: space-between;
            margin-top: 25px;
            text-align: center;
        }

        .stat strong {
            display: block;
            font-size: 20px;
            color: var(--primary);
        }

        footer {
            margin-top: 40px;
            text-align: center;
        }

        footer a {
            color: var(--primary);
            text-decoration: none;
            font-weight: bold;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="container">

    <div class="card">
        <div class="question">
            Guess the {{ ucfirst($type) }}<br>
            <strong>{{ $question }}</strong>
        </div>

        <form method="POST" action="{{ route('game.check') }}">
            @csrf
            <input type="hidden" name="correct_answer" value="{{ $answer }}">
            <input type="text" name="user_guess" autocomplete="off" required>
            <button type="submit">Check</button>
        </form>

        @if(session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert-error">
                {{ session('error') }}
            </div>
        @endif
    </div>

    <div class="stats">
        <div class="stat">
            <strong>{{ session('stats.correct', 0) }}</strong>
            Correct
        </div>
        <div class="stat">
            <strong>{{ session('stats.wrong', 0) }}</strong>
            Wrong
        </div>
        <div class="stat">
            <strong>{{ session('stats.total', 0) }}</strong>
            Total
        </div>
    </div>

    <footer>
        <a href="{{ url('/') }}">← Back to Homepage</a>
    </footer>

</div>

</body>
</html>
