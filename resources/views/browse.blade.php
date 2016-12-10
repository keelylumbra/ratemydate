@extends('layouts.master')

@section('headline')
    <div class="main-box ScrollStyle" id="black-font">
        <div class="row">
            @foreach($dates as $date)
                <h3>{{ $date->user_name }}</h3>
                <p>{{ $date->site_name}}</p>
                <p>
                    <a href="{{ route('dates.show', $date->id) }}" class="btn btn-info">View Task</a>
                    <a href="{{ route('dates.edit', $date->id) }}" class="btn btn-primary">Edit Task</a>
                </p>
                <hr>
            @endforeach
            </div>
        </div>
    </div>
@endsection
