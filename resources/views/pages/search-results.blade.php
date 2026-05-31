@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="container-fluid bg-dark text-white-50 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <h1 class="display-3 text-white animated slideInDown mb-4">Search Results for "{{ $query }}"</h1>
                    <p class="mb-4">Your search for "{{ $query }}" yielded the following results:</p>
                    
                    <!-- Search results will be displayed here -->
                    <div id="searchResults">
                        @if (count($results) > 0)
                            <ul class="list-group">
                                @foreach ($results as $result)
                                    <li class="list-group-item bg-dark text-white-50 text-start">
                                        <h5><a href="{{ route('home') }}" class="text-primary">{{ $result['title'] }}</a></h5>
                                        <p>{{ $result['description'] }}</p>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No results found for "{{ $query }}" on the home page.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
