<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dutch Vocabulary Test</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Optional: Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 1rem;
        }
        input.form-control, textarea.form-control {
            border-radius: 0.5rem;
            border: 1px solid #ced4da;
            padding: 1rem;
            font-size: 1rem;
        }
        input.form-control:focus, textarea.form-control:focus {
            border-color: #0d6efd;
            box-shadow: 0 0 0 0.2rem rgba(13,110,253,.25);
        }
        h1, h2, h3, h4, h5 {
            font-weight: 700;
        }
        .btn-primary, .btn-success {
            border-radius: 0.5rem;
            padding: 0.6rem 2rem;
            font-size: 1.1rem;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('tests.confirm') }}">Dutch Vocabulary Test</a>
    </div>
</nav>

<main class="py-5">
    <div class="container">
        @yield('content')
    </div>
</main>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
