@extends('layouts.master')

@section('headline')
  <div class="main-box ScrollStyle" id="black-font">
      <div class="row">
          <form class="col s12">
              <div class="row">
                  {!! Form::open([
    'route' => 'browse'
]) !!}
                  <div class="input-field col s6">

                      <input id="user_name" type="text" class="validate"><label for="user_name">screenname</label>
                  </div>
                  <div class="row">
                  <div class="input-field col s12">
                      <select multiple>
                          <option value="" disabled selected>select site(s)</option>
                          <option value="1">plenty of fish</option>
                          <option value="2">tinder</option>
                          <option value="3">grindr</option>
                          <option value="4">okcupid</option>
                          <option value="5">match</option>
                          <option value="6">eharmony</option>
                      </select>

                  </div>
                      </div>
              </div>
              <div class="row">
                  <h4>give us the dirt: on a scale of 1-5...</h4>
              </div>
              <div class="row">

                  <p class="range-field">
                      <input type="range" id="picture_rate" min="0" max="5" />
                      <label>how close was their picture to reality? (1- not at all, 5-accurate)</label>
                  </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="cool_rate" min="0" max="5" />
                          <label>were they really cool or a total weirdo? (1-weirdo alert, 5-awesome)</label>
                      </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="repeat_rate" min="0" max="5" />
                          <label>likely to see them again? (1-never again, 5-the sooner, the better)</label>
                      </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="nice_rate" min="0" max="5" />
                          <label>nice guy(or gal) or total jerk(tw@t)?(1-major douche, 5-total sweetheart)</label>
                      </p>
              </div>

              <div class="row">
                      <div class="row">
                          <div class="input-field col s6">
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
                          <input type="file" multiple>
                      </div>
                      <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                      </div>
                  </div>

              </div>
              <div class="row"><a href="{{ URL::to('/browse') }}">
              <button class="btn waves-effect waves-light submit" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
              </button></a>
              </div>

              </form>
      </div>


  </div>
@endsection

