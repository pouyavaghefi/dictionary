@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-lg border-0">
                    <div class="card-body p-5 text-center">

                        @if($isCorrect)
                            <div class="alert alert-success fs-5 fw-semibold">
                                ✔ Correct Answer
                            </div>
                        @else
                            <div class="alert alert-danger fs-5 fw-semibold">
                                ✘ Incorrect Answer
                            </div>
                        @endif

                        <div class="my-4">
                            <h5 class="text-muted mb-2">Word</h5>
                            <h2 class="fw-bold">{{ $word->word }}</h2>
                        </div>

                        <div class="my-4">
                            <h5 class="text-muted mb-2">Correct Meaning</h5>
                            <h3 class="fw-semibold">{{ $correctMeaning }}</h3>
                        </div>

                        <a href="{{ route('tests.show', $test) }}" class="btn btn-primary btn-lg px-5 mt-4">
                            Next Word
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
