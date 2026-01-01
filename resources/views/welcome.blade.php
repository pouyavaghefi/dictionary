<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>German & English Dictionary</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Roboto+Slab:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --accent-color: #4cc9f0;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4caf50;
            --warning-color: #ff9800;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark-color);
            line-height: 1.6;
        }

        h1, h2, h3, h4, h5 {
            font-family: 'Roboto Slab', serif;
            font-weight: 600;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
            color: var(--primary-color) !important;
        }

        .navbar-brand span {
            color: var(--secondary-color);
        }

        .nav-link {
            font-weight: 500;
            margin: 0 5px;
            border-radius: 5px;
            transition: all 0.3s ease;
        }

        .nav-link:hover {
            background-color: rgba(67, 97, 238, 0.1);
            transform: translateY(-2px);
        }

        .hero-section {
            background: linear-gradient(135deg, #4361ee 0%, #3a0ca3 100%);
            color: white;
            padding: 100px 0;
            margin-bottom: 60px;
            border-radius: 0 0 30px 30px;
        }

        .hero-title {
            font-size: 3.5rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
            max-width: 700px;
        }

        .feature-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
            margin-bottom: 30px;
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
            color: var(--secondary-color);
            position: relative;
        }

        .section-title:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: var(--accent-color);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .language-card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            height: 100%;
        }

        .language-card:hover {
            transform: scale(1.03);
        }

        .language-card.german {
            border-top: 5px solid #000;
        }

        .language-card.english {
            border-top: 5px solid #c8102e;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(58, 12, 163, 0.2);
        }

        .btn-outline-primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .search-container {
            max-width: 600px;
            margin: 0 auto 30px;
        }

        .search-box {
            border-radius: 50px;
            padding: 15px 25px;
            border: 2px solid #e0e0e0;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .search-box:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }

        .footer {
            background-color: var(--dark-color);
            color: white;
            padding: 60px 0 20px;
            margin-top: 80px;
        }

        .footer a {
            color: var(--accent-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer a:hover {
            color: white;
            text-decoration: underline;
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            display: block;
        }

        .stat-label {
            font-size: 1rem;
            color: #666;
        }

        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-section {
                padding: 70px 0;
            }
        }
    </style>
</head>
<body>
<!-- Navigation Bar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="#">
            <i class="fas fa-book me-2"></i>Lexi<span>Bridge</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/game"><i class="fas fa-gamepad me-1"></i> Game</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/words/2"><i class="fas fa-language me-1"></i> Most Common Words</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/words"><i class="fas fa-list me-1"></i> All Words</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/words/searched"><i class="fas fa-search me-1"></i> Searched Words</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/words/create"><i class="fas fa-plus-circle me-1"></i> Add New Word</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="hero-title">Bridge Languages, Expand Horizons</h1>
                <p class="hero-subtitle">
                    Explore our comprehensive German & English dictionaries with thousands of words, phrases, and examples.
                    Perfect for learners, translators, and language enthusiasts.
                </p>

                <div class="search-container">
                    <form action="{{ route('words.search') }}" method="GET">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control search-box" placeholder="Search for a word in English or German..." required>
                            <button class="btn btn-primary" type="submit">
                                <i class="fas fa-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>

                <a href="/game" class="btn btn-outline-light me-2">
                    <i class="fas fa-play-circle me-1"></i> Try Learning Game
                </a>
                <a href="/words/create" class="btn btn-light">
                    <i class="fas fa-plus-circle me-1"></i> Add New Word
                </a>
            </div>

            <div class="col-lg-5 d-none d-lg-block">
                <div class="text-center">
                    <img src="https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=600&q=80"
                         class="img-fluid rounded-circle shadow"
                         alt="Dictionary"
                         style="max-height: 400px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5">
    <div class="container">
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-md-3 col-sm-6 mb-4">
                        <span class="stat-number" data-target="{{ $germanCount }}">0+</span>
                        <span class="stat-label d-block">German Words</span>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <span class="stat-number" data-target="{{ $englishCount }}">0+</span>
                        <span class="stat-label d-block">English Words</span>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-4">
                        <span class="stat-number" data-target="{{ $totalCount }}">0+</span>
                        <span class="stat-label d-block">Total Words</span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title">Explore Our Dictionary Features</h2>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="card feature-card">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-gamepad"></i>
                        </div>
                        <h4 class="card-title">Learning Game</h4>
                        <p class="card-text">Make language learning fun with our interactive games. Test your vocabulary, practice spelling, and improve recall through engaging challenges.</p>
                        <a href="#" class="btn btn-outline-primary mt-2">Play Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card feature-card">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-search"></i>
                        </div>
                        <h4 class="card-title">Search Word</h4>
                        <p class="card-text">Quickly find words, definitions, pronunciations, and example sentences in both languages with our powerful search tool.</p>
                        <a href="#" class="btn btn-outline-primary mt-2">Search Now</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card feature-card">
                    <div class="card-body text-center p-4">
                        <div class="feature-icon">
                            <i class="fas fa-plus-circle"></i>
                        </div>
                        <h4 class="card-title">Add New Word</h4>
                        <p class="card-text">Contribute to our growing dictionary by adding new words, definitions, and examples. Help us build the most comprehensive language resource.</p>
                        <a href="#" class="btn btn-outline-primary mt-2">Add Word</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Languages Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title">Browse By Language</h2>

        <div class="row">
            <!-- German Words -->
            <div class="col-lg-6 mb-4">
                <div class="language-card german">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-dark text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-flag fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">German Words</h3>
                                <p class="text-muted mb-0">Deutsche Wörter</p>
                            </div>
                        </div>
                        <p class="card-text">Explore our collection of German words with English translations, pronunciation guides, and usage examples. Perfect for German learners and speakers.</p>
                        <div class="mt-4">
                            <a href="/words/2" class="btn btn-dark me-2">Browse German Words</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- English Words -->
            <div class="col-lg-6 mb-4">
                <div class="language-card english">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-danger text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-flag-usa fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">English Words</h3>
                                <p class="text-muted mb-0">Englische Wörter</p>
                            </div>
                        </div>
                        <p class="card-text">Browse English words with German translations. Each entry includes definitions, pronunciation, and contextual examples to help with language learning.</p>
                        <div class="mt-4">
                            <a href="/words/1" class="btn btn-danger me-2">Browse English Words</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Abbreviations -->
            <div class="col-lg-6 mb-4">
                <div class="language-card abbreviations">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-book fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">Abbreviations</h3>
                                <p class="text-muted mb-0">e.g., FOMO, YOLO</p>
                            </div>
                        </div>
                        <p class="card-text">Find popular abbreviations and acronyms with their full forms and meanings. Perfect for understanding modern English expressions.</p>
                        <div class="mt-4">
                            <a href="/abbreviations" class="btn btn-primary me-2">Browse Abbreviations</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Catch Phrases -->
            <div class="col-lg-6 mb-4">
                <div class="language-card catch-phrases">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-comment fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">Catch Phrases</h3>
                                <p class="text-muted mb-0">Popular expressions</p>
                            </div>
                        </div>
                        <p class="card-text">Explore common catch phrases used in everyday English. Learn their meanings, origins, and how to use them in conversation.</p>
                        <div class="mt-4">
                            <a href="/catch_phrases" class="btn btn-warning me-2">Browse Catch Phrases</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Idioms -->
            <div class="col-lg-6 mb-4">
                <div class="language-card idioms">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-success text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-lightbulb fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">Idioms</h3>
                                <p class="text-muted mb-0">e.g., Break the ice, All in all</p>
                            </div>
                        </div>
                        <p class="card-text">Understand the meaning and usage of English idioms with examples. Useful for learners to sound more natural and fluent.</p>
                        <div class="mt-4">
                            <a href="/idioms" class="btn btn-success me-2">Browse Idioms</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paraphrases -->
            <div class="col-lg-6 mb-4">
                <div class="language-card paraphrases">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-info text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-exchange-alt fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">Paraphrases</h3>
                                <p class="text-muted mb-0">Rewritten sentences</p>
                            </div>
                        </div>
                        <p class="card-text">View examples of paraphrased sentences for clearer and concise expression. Ideal for academic writing or summarizing content.</p>
                        <div class="mt-4">
                            <a href="/paraphrases" class="btn btn-info me-2">Browse Paraphrases</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Phrases -->
            <div class="col-lg-6 mb-4">
                <div class="language-card phrases">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-secondary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-quote-left fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">Phrases</h3>
                                <p class="text-muted mb-0">Full expressions</p>
                            </div>
                        </div>
                        <p class="card-text">Learn complete phrases with alternative wording to improve fluency and clarity in writing and speaking.</p>
                        <div class="mt-4">
                            <a href="/phrases" class="btn btn-secondary me-2">Browse Phrases</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Phrase MNG -->
            <div class="col-lg-6 mb-4">
                <div class="language-card phrase-mng">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-warning text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-pencil-alt fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">Phrase MNG</h3>
                                <p class="text-muted mb-0">Fill-in-the-blank exercises</p>
                            </div>
                        </div>
                        <p class="card-text">Practice phrases with missing words to improve vocabulary and context understanding. Example: “... more than the other categories” → “considerably more than the other categories.”</p>
                        <div class="mt-4">
                            <a href="/phrase_mng" class="btn btn-warning me-2">Browse Phrase MNG</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sentences -->
            <div class="col-lg-6 mb-4">
                <div class="language-card sentences">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 60px; height: 60px;">
                                <i class="fas fa-align-left fs-4"></i>
                            </div>
                            <div>
                                <h3 class="mb-0">Sentences</h3>
                                <p class="text-muted mb-0">Example sentences</p>
                            </div>
                        </div>
                        <p class="card-text">Read nice example sentences that demonstrate grammar, vocabulary, and context. Perfect for learning through examples: “They will outlive us” or “Invisible to the naked eye, they are ubiquitous.”</p>
                        <div class="mt-4">
                            <a href="/sentences" class="btn btn-primary me-2">Browse Sentences</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="/words" class="btn btn-primary btn-lg"><i class="fas fa-list me-2"></i> Browse All Words</a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <hr class="mt-0 mb-4" style="border-color: #555;">

        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2026 Dict.PouyaIT.Com. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p><a href="#">Report a bug</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
    const counters = document.querySelectorAll('.stat-number');
    const speed = 200;

    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace('+', '').replace(',', '') || 0;

            if (count < target) {
                counter.innerText = Math.ceil(count + target / speed).toLocaleString() + '+';
                setTimeout(animateCounters, 1);
            } else {
                counter.innerText = target.toLocaleString() + '+';
            }
        });
    };

    window.addEventListener('load', () => {
        setTimeout(animateCounters, 500);
    });
</script>
</body>
</html>
