<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start Dutch Words Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { max-width: 600px; margin: 50px auto; border-radius: 15px; box-shadow: 0 8px 20px rgba(0,0,0,0.1); }
        .correct { background-color: #d4edda; }
        .incorrect { background-color: #f8d7da; }
        .answer-feedback { font-weight: bold; font-size: 1.1rem; }
    </style>
</head>
<body>
<div class="container">
    <div class="card p-4">
        <h2 class="text-center mb-4">Dutch Words Test</h2>

        @if(session('feedback'))
            <div class="p-3 mb-3 text-center answer-feedback {{ session('feedback_class') }}">
                @if(session('feedback') === 'correct')
                    ✅ Correct! Well done.
                @else
                    ❌ Incorrect! Correct answer: <strong>{{ session('correct_answer') }}</strong>
                @endif
            </div>
        @endif

        <div class="mb-4">
            <p class="fw-semibold">Translate this Dutch word to Persian:</p>
            <h3 class="text-center">{{ $word->word }}</h3>
        </div>

        <form method="POST" action="{{ route('tests.answer', $test->id) }}">
            @csrf
            <input type="hidden" name="word_id" value="{{ $word->id }}">
            <div class="mb-3">
                <label for="meaning" class="form-label">Your Answer (Persian)</label>
                <input type="text" class="form-control" id="meaning" name="meaning" placeholder="Write your answer..." required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit Answer</button>
        </form>

        <div class="mt-3 text-center">
            <small class="text-muted">This test cannot be undone. Please answer honestly.</small>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
