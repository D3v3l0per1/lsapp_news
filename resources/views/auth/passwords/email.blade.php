@extends('layouts.app')

@section('content')

  @if (session('status'))
    <div class="alert alert-success">
      {{ session('status') }}
    </div>
  @endif

  <div class="container">
    <div class="columns">
      <div class="column is-one-third is-offset-one-third">

        <div class="card m-t-25">
          <div class="card-content">
            <h1 class="title is-primary">Log In</h1>
            <hr>

            <form action="{{route('password.email')}}" method="POST" role="form">
              {{ csrf_field() }}
              <div class="field">
                <label for="email" class="label">Email Address</label>
                <p class="control has-icons-left">
                  <input class="input {{$errors->has('email') ? 'is-danger' : ''}}" type="email" name="email" id="email" placeholder="name@example.com" value="{{old('email')}}">
                  <span class="icon is-small is-left">
                    <i class="fa fa-envelope"></i>
                  </span>
                </p>

                @if ($errors->has('email'))
                  <p class="help is-danger">{{$errors->first('email')}}</p>
                @endif

              </div>
  
              <button class="button is-primary is-outlined is-fullwidth m-t-30">Get Reset Link</button>
            </form>
          </div><!-- end of .card-content -->
        </div><!-- end of .card -->
        <h5 class="has-text-centered m-t-20"><a href="{{route('login')}}" class="is-muted"> <i class="fa fa-caret-left m-r-10"></i> Back to Login</a></h5>
      </div>
    </div>
  </div>

@endsection