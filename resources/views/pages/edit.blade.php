@extends('main')

@section('title','| Editare')

@section('content')
        <div class="col-md-8 col-md-offset-2" style="margin-top:15%;margin-bottom:13.6%">
          <div class="panel panel-default">
              <div class="panel-heading">Editare</div>
              <div class="panel-body">
                  <form class="form-horizontal" role="form" method="POST" action="/edit/{{Auth::user()->id}}">
                      {{ csrf_field() }}

                      @if(Session::has('succes'))
                        <div class="alert alert-warning" role="alert">
                          <strong>{{Session::get('succes')}}
                        </div>

                      @endif

                      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                          <label for="name" class="col-md-4 control-label">Name</label>

                          <div class="col-md-6">
                              <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->nume}}" required autofocus>

                              @if ($errors->has('name'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('name') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                          <div class="col-md-6">
                              <input id="email" readonly type="email" class="form-control" name="email" value="{{Auth::user()->email}}" required>

                              @if ($errors->has('email'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('email') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>

                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">Password</label>

                          <div class="col-md-6">
                              <input id="password" type="password" class="form-control" name="password" required>

                              @if ($errors->has('password'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('password') }}</strong>
                                  </span>
                              @endif
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-6 col-md-offset-5">
                              <button type="submit" class="btn btn-primary" style="background-color:#47260F;border-color:#47260F;">
                                  Update
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
        </div>
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/ct-navbar.js"></script>
  <script>function autoSubmit(){document.AutoForm.submit();}</script>
@endsection
