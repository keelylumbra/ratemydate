@extends('layouts.master')

@section('headline')
    <div class="main-box ScrollStyle" id="black-font">
        <div class="row">

    <h1>{{ $date->user_name }}</h1>
    <p class="lead">{{ $date->site_name }}</p>
            <p class="lead">
            <div class="progress">
                <div class="determinate" style="width:"></div>
            </div></p>
            <h2> this is what reviewers had to say:</h2><br><Br>
        </div>

<div class="row">
        <div class="col s4">
            <img class="materialboxed" width="200"  src="{{ $date->picture_path1 }}"></div>
        <div class="col s4">
            <img class="materialboxed" width="200"  src="{{ $date->picture_path3 }}"></div>
        <div class="col s4">
            <img class="materialboxed" width="200"  src="{{ $date->picture_path2 }}"></div><!-- random image -->


</div><Br><Br><Br>
        <div class="row">

            <div class="clearfix col s6"><p class="lead"><h4>how close was their picture to reality?</h4></p><br><Br>
            <p class="lead"><h4>were they really cool or a total weirdo?</h4></p><br><Br>
            <p class="lead"><h4>likely to see them again?</h4></p><br><br>
            <p class="lead"><h4>nice guy(or gal) or total jerk(tw@t)?</h4></p><Br><Br><br><Br>
                </div>
           <div class="col s6 right-align">
               <a class="btn" onclick="Materialize.toast('1- not at all, 5-they put on some weight, 10-accurate', 4000)">{{ $date->picture_rate }}</a><br><br><br><br>
               <a class="btn" onclick="Materialize.toast('1-weirdo alert, 5-there was only one awkward situation, 10-awesome', 4000)">{{ $date->cool_rate }}</a><Br><Br><Br><br>
               <a class="btn" onclick="Materialize.toast('1-never again, 5-indifferent, 10-the sooner, the better', 4000)">{{ $date->repeat_rate}}</a><br><Br><Br><br>
               <a class="btn" onclick="Materialize.toast('1-major douche, 5-cant bring home to mom, 10-total sweetheart', 4000)">{{ $date->nice_rate}}</a><br><Br><Br><br><Br><br>








               </div>


</div>




            <div class="col s12">


                <p class="lead" id="reviews">{{ $date->review }}</p>



    <hr>

    <a href="{{ route('dates.index') }}" class="btn btn-info">Back to all dates</a>

            </div>
</div>
    </div>
@stop