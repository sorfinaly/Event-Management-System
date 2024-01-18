<!-- resources/views/search-results.blade.php -->
@extends('master.layout')


@section('content')
    <div class="box">
        <h2>Search Results for "{{ $query }}"</h2>

        <div style="margin-left: 120px;">
        @if ($results->isEmpty())
            <p>No results found.</p>
        @else
            <ul >
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
    </div>
@endsection
