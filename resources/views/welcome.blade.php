@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>📘 Dictionary Dashboard</h1>

        <div class="card mt-4">
            <div class="card-header">
                📅 Word of the Day
            </div>
            <div class="card-body">
                @if($wordOfTheDay)
                    <h3>{{ $wordOfTheDay->word }}</h3>
                    <p>{{ $wordOfTheDay->definition }}</p>
                @else
                    <p>No words available.</p>
                @endif
            </div>
        </div>

        {{-- Add more dashboard widgets here --}}
        {{-- e.g., recent words, top searched words, most upvoted, etc. --}}
    </div>
@endsection
