<div id="navbar-full">
    <div id="navbar">
        <nav class="navbar navbar-ct-brown navbar-fixed-top {{isActiveURL('/', 'navbar-transparent') }}" role="navigation">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand navbar-brand-logo">
                    <div class="logo">
                    	<img src="images/logo.jpg">
                    </div>
                    <div class="brand"> HTTPcafé </div>
              </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
										<li>
											<a href="/">
												<i class="pe-7s-home"></i>
												<p>Home</p>
											</a>
										</li>
										<li class="dropdown">
													<a class="dropdown-toggle" data-toggle="dropdown">
																<i class="pe-7s-news-paper"></i>
																<p>Meniu <b class="caret"></b></p>
														</a>
													<ul class="dropdown-menu">
														<li><a href="#">Cafea</a></li>
														<li><a href="#">Suc</a></li>
														<li><a href="#">Ceai</a></li>
														<li><a href="#">Bere</a></li>
														<li><a href="#">Vin</a></li>
														<li class="divider"></li>
														<li><a href="#">Desert</a></li>
													</ul>
										</li>
                    @if (!Auth::guest())
  										<li>
  											<a href="#">
  												<i class="pe-7s-shopbag"></i>
  												<p>Cos</p>
  											</a>
  										</li>
                    @endif
										<li>
											<a href="#">
												<i class="pe-7s-graph"></i>
												<p>Locuri</p>
											</a>
										</li>
                    <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="pe-7s-user"></i>
                                <p>Account <b class="caret"></b></p>
                            </a>
                          <ul class="dropdown-menu">
														<li><a href="/register">Inregistrare</a></li>
                            <li><a href="/login">Login</a></li>
                            @if (!Auth::guest())
                                      <li>
                                          <a href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                                       document.getElementById('logout-form').submit();">
                                              Logout
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              {{ csrf_field() }}
                                          </form>
                                      </li>
                            @endif
                          </ul>
                    </li>
               </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        @yield('header')
    </div><!--  end navbar -->
</div> <!-- end menu-dropdown -->
