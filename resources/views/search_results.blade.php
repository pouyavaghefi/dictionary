<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results | LexiBridge Dictionary</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        .custom-max-width { max-width: 900px; }
        .search-header { border-bottom: 1px solid #e9ecef; padding-bottom: 1.5rem; }
        .word-pronunciation { font-family: 'Courier New', monospace; color: #6c757d; }
        .section-divider { height: 1px; background: linear-gradient(90deg, transparent, #dee2e6, transparent); margin: 2rem 0; }
        .synonym-badge, .antonym-badge { cursor: pointer; transition: all 0.2s ease; }
        .synonym-badge:hover, .antonym-badge:hover { transform: translateY(-2px); box-shadow: 0 4px 8px rgba(0,0,0,0.15); }
        .example-sentence { border-left: 4px solid #0d6efd; background-color: #f8f9fa; padding: 1rem; }
        .back-btn { transition: all 0.2s ease; }
        .back-btn:hover { transform: translateX(-3px); }
        .search-highlight { background-color: rgba(255, 193, 7, 0.2); padding: 0 2px; border-radius: 3px; }
    </style>
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 custom-max-width">

            @if(!$word)
                <div class="alert alert-warning">
                    No results found for "<strong>{{ $query }}</strong>".
                </div>
                <a href="{{ url()->previous() }}" class="btn btn-primary"><i class="bi bi-arrow-left me-2"></i>Back to Search</a>
            @else

                @php
                    $isEnglish = $word->language_id == 1;
                    $languageLabel = $isEnglish ? 'English' : 'German';
                @endphp

                    <!-- Header -->
                <div class="search-header mb-5">
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                            <h1 class="display-4 fw-bold mb-2">{{ $word->word }}</h1>
                            <div class="d-flex align-items-center mb-3">
                                <span class="badge bg-primary me-2 fs-6 px-3 py-2">{{ $word->type ?? 'Word' }}</span>
                                @if($word->pronunciation)
                                    <span class="badge bg-info me-2 fs-6 px-3 py-2">{{ $word->pronunciation }}</span>
                                @endif
                            </div>
                        </div>
                        <a href="{{ url()->previous() }}" class="btn btn-outline-primary back-btn d-flex align-items-center">
                            <i class="bi bi-arrow-left me-2"></i>Back to Search
                        </a>
                    </div>

                    <div class="alert alert-info d-flex align-items-center mb-0" role="alert">
                        <i class="bi bi-info-circle-fill me-2 fs-5"></i>
                        <div>
                            Showing results for "<span class="fw-bold">{{ $word->word }}</span>".
                        </div>
                    </div>
                </div>

                <!-- Primary definition -->
                <div class="card border-0 shadow-sm mb-5">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                <i class="bi bi-journal-text fs-4 text-primary"></i>
                            </div>
                            <div>
                                <h3 class="card-title h4 mb-1">Primary Definition</h3>
                                <p class="text-muted mb-0">Most common meaning</p>
                            </div>
                        </div>

                        <p class="card-text fs-5 mb-4">{{ $word->meaning }}</p>

                        @if($word->example)
                            <div class="example-sentence rounded mb-4">
                                <p class="mb-2 fw-semibold">Example Sentence:</p>
                                <p class="mb-0 fs-5 fst-italic">{{ $word->example }}</p>
                            </div>
                        @endif

                        <div class="row mt-4">
                            @if($word->origin)
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <p class="mb-2 fw-semibold">Origin:</p>
                                    <p class="mb-0 text-muted">{{ $word->origin }}</p>
                                </div>
                            @endif
                            <div class="col-md-6">
                                <p class="mb-2 fw-semibold">Language:</p>
                                <span class="badge bg-dark">{{ $languageLabel }}</span>

                                @if(!$isEnglish && !empty($englishEquivalent))
                                    <span class="badge bg-success ms-2">English: {{ is_array($englishEquivalent) ? $englishEquivalent['word'] : $englishEquivalent->word }}</span>
                                @elseif($isEnglish && $word->meaning_en)
                                    <span class="badge bg-secondary ms-2">English Meaning: {{ $word->meaning_en }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Only show API or extra data for English -->
                @if($isEnglish && !empty($externalData))
                    <h3 class="h4 mb-4">Additional Definitions & Meanings</h3>
                    <div class="row g-4 mb-5">
                        @foreach($externalData as $entry)
                            @foreach($entry['meanings'] ?? [] as $meaning)
                                <div class="col-md-6">
                                    <div class="card h-100 border">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center mb-3">
                                                <span class="badge bg-secondary me-2">{{ $meaning['partOfSpeech'] ?? '' }}</span>
                                            </div>
                                            @foreach($meaning['definitions'] ?? [] as $def)
                                                <p class="card-text">{{ $def['definition'] }}</p>
                                                @if(!empty($def['example']))
                                                    <p class="mb-0 text-muted fst-italic">Example: {{ $def['example'] }}</p>
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                @endif

            @endif

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
