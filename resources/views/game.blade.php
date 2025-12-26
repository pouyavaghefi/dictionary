<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Word</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h1 class="text-center">Guess the {{ ucfirst($type) }}</h1>

    <div class="card p-4">
        <p class="lead text-center">"{{ $question }}"</p>
        <form action="{{ route('game.check') }}" method="POST">
            @csrf
            <input type="hidden" name="correct_answer" value="{{ $answer ?? '' }}">
            <div class="mb-3">
                <input type="text" class="form-control" name="user_guess" placeholder="Your answer...">
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>

    @if(session('success'))
        <div class="alert alert-success mt-3 text-center">
            {{ session('success') }}
        </div>
    @elseif(session('error'))
        <div class="alert alert-danger mt-3 text-center">
            {{ session('error') }}
        </div>
    @endif

</div>
</body>
</html>
