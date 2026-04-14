@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5 text-center">

                        <h2 class="fw-bold mb-4">Official Dutch Vocabulary Examination</h2>

                        <div class="alert alert-warning text-start">
                            <strong>Important:</strong> Once the test begins, it cannot be paused or undone.
                            Please ensure you are ready before proceeding.
                        </div>

                        <div class="bg-light rounded p-4 mb-4 text-start">
                            <h5 class="fw-semibold mb-3">Test Instructions</h5>
                            <ul class="mb-0">
                                <li>Each Dutch word will appear randomly.</li>
                                <li>You must write the correct Persian meaning.</li>
                                <li>If correct, you will be required to write a sentence.</li>
                                <li>All answers are recorded permanently.</li>
                                <li>The test continues until all words are completed.</li>
                            </ul>
                        </div>

                        <form method="POST" action="{{ route('tests.start') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                Begin Test
                            </button>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
