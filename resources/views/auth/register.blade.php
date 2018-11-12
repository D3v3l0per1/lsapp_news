@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third">

        <div class="card m-t-25">
          <div class="card-content">
            <h1 class="title is-primary">Sign Up</h1>
            <hr>

            <form action="{{route('register')}}" method="POST" role="form">
              {{ csrf_field() }}

              <div class="field">
                <label for="name" class="label">Name</label>
                <p class="control has-icons-left">
                  <input class="input {{$errors->has('name') ? 'is-danger' : ''}}" type="name" name="name" id="name" placeholder="Username" value="{{old('name')}}" required>
                  <span class="icon is-small is-left">
                    <i class="fa fa-user"></i>
                  </span>
                </p>

                @if ($errors->has('name'))
                  <p class="help is-danger">{{$errors->first('name')}}</p>
                @endif

              </div>

              <div class="field">
                <label for="email" class="label">Email Address</label>
                <p class="control has-icons-left">
                  <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}" required>
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
                </p>

                @if ($errors->has('email'))
                  <p class="help is-danger">{{$errors->first('email')}}</p>
                @endif

              </div>
  
              <div class="columns">
               
                <div class="column">
                  <div class="field">
                    <label for="password" class="label">Password</label>
                    <p class="control has-icons-left">
                      <input class="input {{$errors->has('password') ? 'is-danger' : ''}}" type="password" name="password" id="password" placeholder="Password" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                      </span>
                    </p>
    
                    @if ($errors->has('password'))
                      <p class="help is-danger">{{$errors->first('password')}}</p>
                    @endif
    
                  </div>
                </div>
                
                <div class="column">
                  <div class="field">
                    <label for="password_confirmation" class="label">Confirm Password</label>
                    <p class="control has-icons-left">
                      <input class="input {{$errors->has('password_confirmation') ? 'is-danger' : ''}}" type="password" name="password_confirmation" id="password_confirmation" placeholder="Password Confirmation" required>
                      <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                      </span>
                    </p>
    
                    @if ($errors->has('password_confirmation'))
                      <p class="help is-danger">{{$errors->first('password_confirmation')}}</p>
                    @endif
    
                  </div>
                </div>
                
              </div>
  
              <button class="button is-primary is-outlined is-fullwidth m-t-30">Sign Up</button>
            </form>
          </div><!-- end of .card-content -->
        </div><!-- end of .card -->
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted">Already got an Account?</a></h5>
      </div>
    </div>
  </div>

@endsection