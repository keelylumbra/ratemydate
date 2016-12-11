@extends('layouts.master')

@section('headline')
    <div class="main-box ScrollStyle" id="black-font">
        <div class="row">
            @foreach($dates as $date)
                <h3>{{ $date->user_name }}</h3>
                <p>{{ $date->site_name}}</p>
                <p>
                    <a href="{{ route('dates.show', $date->id) }}" class="btn btn-info">View Date</a>

                </p>
                <hr>
            @endforeach
            </div>
        </div>
    </div>
@endsection
