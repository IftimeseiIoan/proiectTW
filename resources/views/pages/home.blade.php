@extends('main')

@section('title','| Acasa')

@section('header')
  <div class="blurred-container">
       <img src="images/bg.jpg" style="position:relative;background-repeat:no-repeat;background-size:cover;background-position: top center;height:100vh;width:100%;">
   </div>
@endsection

@section('content')
  <div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<div class="home" style="border: 4px solid #47260F;background-color:white;margin-top:10%;padding:12px;">
					<h4>Drag prieten, fii binevenit!</h4>
					<p style="text-align: justify;">
					&nbsp;&nbsp;Atmosfera relaxanta si prietenoasa , aroma inconfundabila a preparatelor pe baza de cafea&nbsp; precum si meniul rafinat,&nbsp; fac din Roland Café 1811 locul ideal fie pentru a savura,incepand chiar de la prima ora a diminetii, o ceasca de cafea aburinda sau o ciocolata traditionala, citind presa, fie de a te bucura de un mic dejun frantuzesc sau international, pregatit cu maxima atentie, precum si locul ideal al intalnirilor de afaceri de la pranz sau de dupa-amiaza, dar si locul unde poti petrece seri relaxante si pline de romantism alaturi de cei dragi care cu siguranta vor aprecia&nbsp; savoarea gustarilor frantuzesti alaturi o sticla de vin, un cocktail sau o tigara de foi…<br>
					<br>
					&nbsp;&nbsp;Cu un decor intim, in stil parizian clasic, si o capacitate de 30 de locuri, Roland Café 1811 ,&nbsp; organizeaza zile de nastere, petreceri private precum si&nbsp; seri de chansonette, blues sau jazz, piese de teatru, lansari de carte si proiectii cinematografice.<br>
					<br>
					&nbsp;&nbsp;In speranta ca v-am convins ... va asteptam cu drag!</p>
				</div>
			</div>
		</div>

		<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-6">
						  <div id="myCarousel" class="carousel slide" data-ride="carousel">
						    <ol class="carousel-indicators">
						      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						      <li data-target="#myCarousel" data-slide-to="1"></li>
						      <li data-target="#myCarousel" data-slide-to="2"></li>
						      <li data-target="#myCarousel" data-slide-to="3"></li>
						    </ol>
						    <!-- Wrapper for slides -->
						    <div class="carousel-inner" role="listbox">
						      <div class="item active">
						        <img src="images/slideshow/1.jpg" alt="Chania" style="width:636px;height:400px;">
						        <div class="carousel-caption">
						          <h3>Chania</h3>
						          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						        </div>
						      </div>
						      <div class="item">
						        <img src="images/slideshow/2.jpg" alt="Chania" style="width:636px;height:400px;">
						        <div class="carousel-caption">
						          <h3>Chania</h3>
						          <p>The atmosphere in Chania has a touch of Florence and Venice.</p>
						        </div>
						      </div>
						      <div class="item">
						        <img src="images/slideshow/3.jpg" alt="Flower" style="width:636px;height:400px;">
						        <div class="carousel-caption">
						          <h3>Flowers</h3>
						          <p>Beautiful flowers in Kolymbari, Crete.</p>
						        </div>
						      </div>
						      <div class="item">
						        <img src="images/slideshow/4.jpg" alt="Flower" style="width:636px;height:400px">
						        <div class="carousel-caption">
						          <h3>Flowers</h3>
						          <p>Beautiful flowers in Kolymbari, Crete.</p>
						        </div>
						      </div>
						    </div>
						    <!-- Left and right controls -->
						    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
						      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						      <span class="sr-only">Previous</span>
						    </a>
						    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
						      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						      <span class="sr-only">Next</span>
						    </a>
						  </div>
					</div><!--end col-->

					<div class="col-md-1"></div>
					<div class="col-md-3" style="margin-top:5%;">
						<div class="social" style="border: 4px solid #47260F;background-color:white;">
							<h3>Social</h3>
							<br/>
							<table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 99%">
							<tbody>
							 <tr>
								 <td style="text-align: right">
									 <a href="https://www.facebook.com/" target="_blank"> <img id="facebook_png" alt="" src="images/social/facebook.png"></a></td>
								 <td>
									 <a href="https://plus.google.com/" target="_blank"><img id="google_png" alt="" src="images/social/gplus-32.png"></a></td>
							 </tr>
							 <tr>
								 <td style="text-align: right">
									 <a href="https://twitter.com/" target="_blank"><img id="twitter_png" alt="" src="images/social/twitter.png"></a></td>
								 <td>
									 <a href="https://youtube.com" target="_blank"><img id="youtube_png" alt="" src="images/social/youtube.png"></a></td>
							 </tr>
							</tbody>
							</table>
							<br/>
						</div>

						<div class="date" style="border: 4px solid #47260F;background-color:white;margin-top:10%;padding:0px 10px">
							<h3>Date contact</h3>
							<p>Adresa:Bulevardul Carol I, Nr.11, 700506, Iaşi, România</p>
							<p>Telefon: 0232 20 1000</p>
							<p>E-mail: cafenea@uaic.ro</p>
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
