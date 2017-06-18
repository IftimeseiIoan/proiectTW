@extends('main')

@section('title','| Meniu')

@section('content')
  <div class="row" style="margin-top:15%;height:62.8vh;">
    <div class="col-md-10 col-md-offset-1" style="background:white;border-collapse:collapse;">
      <div class="row">
        <div class="col-md-2" style="border: 4px solid #47260F;border-collapse: collapse;">
          <div class="funkyradio">

            <div class="row" style="margin:0% 5%">
              <div class="funkyradio-warning">
                  <input type="checkbox" name="checkbox" id="checkbox1"/>
                  <label for="checkbox1">Cafea</label>
              </div>
            </div>

            <div class="row" style="margin:0% 5%">
              <div class="funkyradio-warning">
                  <input type="checkbox" name="checkbox2" id="checkbox2"/>
                  <label for="checkbox2">Suc</label>
              </div>
            </div>

            <div class="row" style="margin:0% 5%">
              <div class="funkyradio-warning">
                  <input type="checkbox" name="checkbox3" id="checkbox3"/>
                  <label for="checkbox3">Ceai</label>
              </div>
            </div>

            <div class="row" style="margin:0% 5%">
              <div class="funkyradio-warning">
                  <input type="checkbox" name="checkbox4" id="checkbox4"/>
                  <label for="checkbox4">Bere</label>
              </div>
            </div>

            <div class="row" style="margin:0% 5%">
              <div class="funkyradio-warning">
                  <input type="checkbox" name="checkbox4" id="checkbox5"/>
                  <label for="checkbox5">Vin</label>
              </div>
            </div>

            <div class="row" style="margin:0% 5%">
              <div class="funkyradio-warning">
                  <input type="checkbox" name="checkbox4" id="checkbox6"/>
                  <label for="checkbox6">Desert</label>
              </div>
            </div>

          </div>
        </div>

        <div class="col-md-10" style="border: 4px solid #47260F;border-collapse: collapse;">
          <p>asd</p>
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
@endsection
