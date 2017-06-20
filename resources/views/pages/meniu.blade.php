@extends('main')

@section('title','| Meniu')

@section('content')
  <div class="row" style="margin-top:12%;height:62.8vh;margin-bottom:3%;">
    <div class="col-md-10 col-md-offset-1" style="background:white;height:62.8vh;min-height:62.8vh;max-height:62.8vh;">
      <div class="row">
        <div class="col-md-2" style="border: 4px solid #47260F;;height:62.8vh;min-height:62.8vh;max-height:62.8vh;">
          <div class="funkyradio">
            <?php $categorii = Input::has('categorii') ? Input::get('categorii'): [] ?>
              <form name="AutoForm" id="autoForm" action="/meniu" method="get">
                <div class="row" style="margin:0% 5%;padding-top:20%;">
                  <div class="funkyradio-warning">
                      <input type="checkbox" onclick='autoSubmit()' name="categorii[]" id="checkbox1" value="1" {{in_array(1, $categorii ) ? 'checked' :'' }}/>
                      <label for="checkbox1">Cafea</label>
                  </div>
                </div>

                <div class="row" style="margin:0% 5%">
                  <div class="funkyradio-warning">
                      <input type="checkbox" onclick='autoSubmit()' name="categorii[]" id="checkbox2" value="2" {{in_array(2, $categorii ) ? 'checked' :'' }}/>
                      <label for="checkbox2">Suc</label>
                  </div>
                </div>

                <div class="row" style="margin:0% 5%">
                  <div class="funkyradio-warning">
                      <input type="checkbox" onclick='autoSubmit()' name="categorii[]" id="checkbox3" value="3" {{in_array(3, $categorii ) ? 'checked' :'' }}/>
                      <label for="checkbox3">Ceai</label>
                  </div>
                </div>

                <div class="row" style="margin:0% 5%">
                  <div class="funkyradio-warning">
                      <input type="checkbox" onclick='autoSubmit()' name="categorii[]" id="checkbox4" value="4" {{in_array(4, $categorii ) ? 'checked' :'' }}/>
                      <label for="checkbox4">Bere</label>
                  </div>
                </div>

                <div class="row" style="margin:0% 5%">
                  <div class="funkyradio-warning">
                      <input type="checkbox" onclick='autoSubmit()' name="categorii[]" id="checkbox5" value="5" {{in_array(5, $categorii ) ? 'checked' :'' }}/>
                      <label for="checkbox5">Vin</label>
                  </div>
                </div>

                <div class="row" style="margin:0% 5%;padding-bottom:30%;">
                  <div class="funkyradio-warning">
                      <input type="checkbox" onclick='autoSubmit()' name="categorii[]" id="checkbox6" value="6" {{in_array(6, $categorii ) ? 'checked' :'' }}/>
                      <label for="checkbox6">Desert</label>
                  </div>
                </div>
            </form>
          </div>
        </div>

        <div class="col-md-10" style="border: 4px solid #47260F;border-left-width:0px;height:62.8vh;min-height:62.8vh;max-height:62.8vh;overflow-y:scroll;overflow-x:hidden;">
        <div class="container-fluid">
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
                        <a href='/cumpara/{{$product->id_produs}}' style="color:#47260F;"><span class='glyphicon glyphicon-shopping-cart' style="font-size:1.4em;margin:auto;margin-top:40%;margin-left:30%;"></span><p style="font-size:1em;margin-left:-5px;">Adauga</p></a>
                    </div>
                  </div>
                </div>
      @endforeach
        <br/>
        </div>
        </div>

      </div>
    </div>
	</div><!--row-->
  <br/>
  <br/>
@endsection

@section('scripts')
  <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/ct-navbar.js"></script>
  <script>function autoSubmit(){document.AutoForm.submit();}
  </script>
@endsection
