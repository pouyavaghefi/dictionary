@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow-lg border-0">
                    <div class="card-body p-5 text-center">

                        <h2 class="fw-bold mb-4">Test Completed</h2>

                        <div class="display-6 mb-3">
                            Score: {{ $test->correct_answers }} / {{ $test->total_words }}
                        </div>

                        <div class="progress mb-4" style="height: 30px;">
                            <div class="progress-bar bg-success" role="progressbar"
                                 style="width: {{ ($test->correct_answers / $test->total_words) * 100 }}%">
                                {{ round(($test->correct_answers / $test->total_words) * 100) }}%
                            </div>
                        </div>

                        <div class="mb-4">
                            <p class="lead">Congratulations! You have completed the Dutch Vocabulary Test.</p>
                        </div>

                        <a href="{{ route('tests.confirm') }}" class="btn btn-outline-primary btn-lg px-5">
                            Start New Test
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
