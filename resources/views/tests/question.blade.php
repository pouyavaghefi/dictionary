@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card border-0 shadow">
                    <div class="card-body p-5">

                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-semibold mb-0">Dutch to Persian Translation</h5>
                            <span class="badge bg-dark">
                            {{ $test->words()->count() }} / {{ $test->total_words }}
                        </span>
                        </div>

                        <div class="text-center my-5">
                            <h1 class="display-5 fw-bold">{{ $word->word }}</h1>
                        </div>

                        <form method="POST" action="{{ route('tests.answer', $test) }}">
                            @csrf
                            <input type="hidden" name="word_id" value="{{ $word->id }}">

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Persian Meaning</label>
                                <input type="text"
                                       name="meaning"
                                       class="form-control form-control-lg"
                                       placeholder="Enter the Persian meaning">
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Write a Sentence (if correct)</label>
                                <textarea name="sentence"
                                          class="form-control"
                                          rows="3"
                                          placeholder="Write a full sentence using the word"></textarea>
                            </div>

                            <div class="text-end">
                                <button type="submit" class="btn btn-success px-4">
                                    Submit Answer
                                </button>
                            </div>
                        </form>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
