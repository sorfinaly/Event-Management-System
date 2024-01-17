<!-- resources/views/search-results.blade.php -->
@extends('master.layout')


@section('content')
    <div class="container">
        <h2>Search Results for "{{ $query }}"</h2>

        @if ($results->isEmpty())
            <p>No results found.</p>
        @else
            <ul>
                @foreach ($results as $event)
                    <li>
                        <a href="{{ route('eventdetail', ['id' => $event->id]) }}">
                            {{ $event->event_name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
