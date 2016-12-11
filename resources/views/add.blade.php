@extends('layouts.master')

@section('headline')
  <div class="main-box ScrollStyle" id="black-font">
      <div class="row">
          @if($errors->any())
              <div class="alert alert-danger">
                  @foreach($errors->all() as $error)
                      <p class="error">{{ $error }}</p>
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
                  <h5>give us the dirt, and don't leave out any juicy details! this is the time for you to help your fellow  daters out, so there's no need to be shy.<Br></h5>
                      <h4> we fully approve of kissing and telling.</h4>

              </div>
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
                  <h3>on a scale of 1-10...</h3>
              </div>
              <div class="row">

                  <p class="range-field">
                      <input type="range" id="picture_rate" name="picture_rate" min="1" max="10" />
                      <label><a class="btn" onclick="Materialize.toast('1- not at all, 5-they put on some weight, 10-accurate', 4000)">how close was their picture to reality?</a></label>
                  </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="cool_rate" name="cool_rate" min="1" max="10" />
                          <label><a class="btn" onclick="Materialize.toast('1-weirdo alert, 5-there was only one awkward situation, 10-awesome', 4000)">were they really cool or a total weirdo?</a></label>
                      </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="repeat_rate" name="repeat_rate" min="1" max="10" />
                          <label><a class="btn" onclick="Materialize.toast('1-never again, 5-indifferent, 10-the sooner, the better', 4000)">likely to see them again? </a></label>
                      </p>

              </div>
              <div class="row">

                      <p class="range-field">
                          <input type="range" id="nice_rate" name="nice_rate" min="1" max="10" />
                          <label><a class="btn" onclick="Materialize.toast('1-major douche, 5-cant bring home to mom, 10-total sweetheart', 4000)">nice guy(or gal) or total jerk(tw@t)?</a></label>
                      </p>
              </div>

              <div class="row">
                      <div class="row">
                          <div class="input-field col s6">
                              <i class="material-icons prefix">mode_edit</i>
                              <textarea id="icon_prefix2" name="review" class="materialize-textarea"></textarea>
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
                          <input class="file-path validate" name="picture_path" type="text">
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

