@extends('layouts.master')

@section('headline')
  <div class="main-box ScrollStyle" id="black-font">
      <div class="row">
          @if($errors->any())
              <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                      <p>{{ $error }}</p>
                  @endforeach
              </div>
          @endif
              @if(Session::has('flash_message'))
                  <div class="alert alert-success">
                      {{ Session::get('flash_message') }}
                  </div>
              @endif
          <form class="col s12" method="post" action="{{route('dates.store')}}">
              <div class="row">

                  <div class="input-field col s6">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <input id="user_name" name="user_name" type="text" class="validate"><label for="user_name">screenname</label>
                  </div>
                  <div class="row">
                  <div class="input-field col s12">
                      <select id="site_name" name="site_name">
                          <option value="" disabled selected>select site(s)</option>
                          <option value="plenty of fish">plenty of fish</option>
                          <option value="tinder">tinder</option>
                          <option value="grindr">grindr</option>
                          <option value="okcupid">okcupid</option>
                          <option value="match">match</option>
                          <option value="eharmony">eharmony</option>
                      </select>

                  </div>
                      </div>
              </div>
              <div class="row">
                  <h4>give us the dirt: on a scale of 1-5...</h4>
              </div>
              <div class="row">

                  <p class="range-field">
                      <input type="range" id="picture_rate" name="picture_rate" min="0" max="5" />
                      <label>how close was their picture to reality? (1- not at all, 5-accurate)</label>
                  </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="cool_rate" name="cool_rate" min="0" max="5" />
                          <label>were they really cool or a total weirdo? (1-weirdo alert, 5-awesome)</label>
                      </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="repeat_rate" name="repeat_rate" min="0" max="5" />
                          <label>likely to see them again? (1-never again, 5-the sooner, the better)</label>
                      </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="nice_rate" name="nice_rate" min="0" max="5" />
                          <label>nice guy(or gal) or total jerk(tw@t)?(1-major douche, 5-total sweetheart)</label>
                      </p>
              </div>

              <div class="row">
                      <div class="row">
                          <div class="input-field col s6">
                              <input id="review" name="review">
                              <i class="material-icons prefix">mode_edit</i>
                              <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                              <label for="icon_prefix2">lets get some specifics</label>
                          </div>
                      </div>

              </div>
              <div class="row">
                  <div class="file-field input-field">
                      <div class="btn">
                          <span>upload some screenshots</span>
                          <input type="file" multiple id="picture_path" name="picture_path">
                      </div>
                      <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                      </div>
                  </div>

              </div>
              <div class="row">
              <button class="btn waves-effect waves-light submit" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
              </button></a>
              </div>
              </form>
      </div>


  </div>
@endsection

