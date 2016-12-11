@extends('layouts.master')

@section('headline')
    <div class="main-box ScrollStyle" id="black-font">
        <div class="row">

    <h1>{{ $date->user_name }}</h1>
    <p class="lead">{{ $date->site_name }}</p>
    <hr>

    <a href="{{ route('dates.index') }}" class="btn btn-info">Back to all dates</a>


</div>
    </div>
@stop