@extends('layouts.master')

@section('headline')
    <div class="main-box ScrollStyle" id="black-font">
        <div class="row">
    <p>
        {{ $posts->count() }} {{ str_plural('post', $posts->count()) }} matched your query
    </p>

    @foreach($posts as $post)
        <!--- Loop through posts and display... -->
        <h3>{{ $post->user_name }}</h3>
        <p>{{ $post->site_name}}</p>
        <p>
            <a href="{{ route('dates.show', $post->id) }}" class="btn btn-info">View Date</a>

        </p>
        <hr>
    @endforeach

    <!-- Pagination links... -->
    {!! $posts->render() !!}

    </div>
    </div>
@endsection