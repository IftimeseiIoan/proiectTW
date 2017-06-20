@extends('main')

@section('title','| Cos')

@section('content')
        <div class="col-md-8 col-md-offset-2" style="margin-top:11.9%;margin-bottom:3.4%;">
          <div class="panel panel-default">
              <div class="panel-heading">Cos</div>
              <div class="panel-body" style="height:53.5vh;overflow-y:scroll;overflow-x:hidden;border-bottom: 1px solid #47260F;">
              <div class="container-fluid">
                @if(Session::has('succes'))
                  <div class="alert alert-warning" role="alert">
                    <strong>{{Session::get('succes')}}
                  </div>
                @endif
                <?php $index=0; ?>
                @foreach ($products as $product)
                          <div class="row">
                            <div class="menu-item" style="border: 2px solid #47260F;height:72px;min-height:100%;">
                              <div class="col-md-1">
                                <img class="menu-image" src="/images/produse/{{$product->id_produs}}.png" alt="image" height="52" width="45" style="margin-left:-12px;">
                              </div>
                              <div class="col-md-9">
                                <h6>{{$product->nume}}</h6>
                                <p style="margin-top:-5px;">{{$product->descriere}}</p>
                              </div>

                              <div class="col-md-1">
                                <span class="pe-7s-cash" style="font-size:1.8em;margin:auto;margin-top:30%;margin-left:15%;color:#47260F;"/>
                                <p style="margin-left:15%;color:#47260F;margin-top:-8%;">{{$product->pret}}</p>
                              </div>
                              <div class="col-md-1">
                                  <a href='/deleteFromCart/{{$index}}' style="color:#47260F;"><span class='glyphicon glyphicon-remove' style="font-size:1.4em;margin:auto;margin-top:40%;margin-left:30%;"></span><p style="font-size:1em;margin-left:-5px;">Sterge</p></a>
                              </div>
                            </div>
                          </div>
                    <?php $index=$index+1; ?>
                @endforeach
                </div>
              </div>
              <div class="row">
                <div class="col-md-2 col-md-offset-8" style="padding-right:0;">
                  <p style="margin-left:50%;margin-top:5%;">{{$pret}} Lei</p>
                </div>
                <div class="col-md-1" style="padding-left:0;padding-top:0.25%;">
                    <a href="/finalizare"><button class="btn btn-primary" style="background-color:#47260F;border-color:#47260F;">Comanda</button></a>
                </div>

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
