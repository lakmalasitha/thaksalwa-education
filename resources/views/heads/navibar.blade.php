<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Navibar</title>
</head>
<body>

	@if ((Auth::user()->role)=='teacher')
	<div id="pageWrapper">
			<header id="pageHeader">
				<div class="pageHeaderTopBar bg-light">
					<div class="container clearfix position-relative">
						<div class="row">
							<div class="col-3 col-lg-6">
								
								<ul class="list-unstyled topBarContactList align-items-center mb-0 d-none d-md-flex">
									<li>
										<a href="tel:&#049;&#050;&#051;&#052;&#053;&#054;&#055;&#056;&#057;&#049;&#048;">
											<i class="fas fa-phone fa-flip-horizontal icn"><span class="sr-only">icon</span></i>
											<span class="d-none d-lg-inline">+94715611859</span>
											
										</a>
									</li>
									<li>
										<a href="mailto:&#073;&#110;&#102;&#111;&#046;&#100;&#101;&#101;&#114;&#099;&#114;&#101;&#097;&#116;&#105;&#118;&#101;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">
											<i class="fas fa-envelope icn"><span class="sr-only">icon</span></i>
											<span class="d-none d-lg-inline">Info.thaksalawa@gmail.com</span>
										</a>
									</li>
								</ul>
							</div>
	
							<div class="col-9 col-lg-6 d-flex justify-content-end position-static">
								<form action="#" class="topBarSearchForm">
									<div class="form-group collapse mb-0" id="searhFormCollpase">
										<input type="text" class="form-control d-block" placeholder="Search&hellip;">
										<button type="button" class="ei_icon_search buttonReset"><span class="sr-only">search</span></button>
									</div>
								</form>	
								<ul class="list-unstyled loginLinksList text-uppercase d-flex mb-0">
										@guest
											<li class="nav-item">
												<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
											</li>
											
											<li class="nav-item">
												<a class="nav-link" href="/reprofile">{{ __('Register') }}</a>
											</li>
										
										@else
											<li class="nav-item dropdown">
												<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
													{{ Auth::user()->name }} <span class="caret"></span>
												</a>
				
												<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
													{{-- <a class="dropdown-item" href="{{ route('logout') }}"
													   onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
													</a>
				
													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
													</form> --}}
												</div>
												<a class="dropdown-item" href="{{ route('logout') }}"
													   onclick="event.preventDefault();
																	 document.getElementById('logout-form').submit();">
														{{ __('Logout') }}
												</a>
				
													<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
														@csrf
													</form>
											</li>
										@endguest
									</ul>
								</ul>												
							</div>
						</div>
					</div>
				</div>
				<div class="headerFixer">
					<div class="bg-white">
					
						<div class="container clearfix pageHeaderHolder">
							<div class="logo alignleft">
								<a href="home.html">
									<img src="images/logos.png" alt="opps):">
								</a>
							</div>
						
							<div class="pageNavHolder alignright d-flex justify-content-end align-items-md-start">
								<a class="topBarSearchFormOpener d-flex d-md-none align-items-center justify-content-center flex-shrink-0" data-toggle="collapse" href="#searhFormCollpase" role="button" aria-expanded="false" aria-controls="searhFormCollpase">
									<i class="fas fa-search"><span class="sr-only">icon</span></i>
								</a>
								
								<nav id="pageNav" class="navbar navbar-expand-lg order-lg-1">
									<button class="navbar-toggler pageMainNavOpener" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse mainNavCollapse" id="pageMainNavCollapse">
										<ul class="navbar-nav pageMainNavigation justify-content-md-end">
											<li class="nav-item dropdown">
												<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <span class="sr-only">(current)</span></a>
												<div class="dropdown-menu mainNavDropdown text-uppercase">
													
													{{-- <ul class="list-unstyled navDropdownList">
														<li>
															<a class="dropdown-item" href="home.html">Homepage 1</a>
														</li>
														<li>
															<a class="dropdown-item" href="home2.html">Homepage 2</a>
														</li>
													</ul> --}}
												</div>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/addads"  " aria-haspopup="true" aria-expanded="false">Add Advertisement</a>
												<div class="dropdown-menu mainNavDropdown text-uppercase">
													
													<ul class="list-unstyled navDropdownList">
															<ul class="list-unstyled navDropdownList">													
														</li>
													</ul>
												</div>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/findstudent" >Student Request</a>
												<div class="dropdown-menu mainNavDropdown text-uppercase">						
													<ul class="list-unstyled navDropdownList">
													</ul>
												</div>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/payment">Payments</a>
												<div class="dropdown-menu mainNavDropdown text-uppercase">
												</div>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/contactus">Contact us</a>
												<div class="dropdown-menu mainNavDropdown text-uppercase">
												</div>
											</li>
											<li class="nav-item dropdown">
												<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/profilehome">Profile</a>
												<div class="dropdown-menu mainNavDropdown text-uppercase">
													{{-- <ul class="list-unstyled navDropdownList">
														<li>
															<a class="dropdown-item" href="contact.html">Contact 01</a>
														</li>
													</ul> --}}
												</div>
											</li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</header>
	@else

	<div id="pageWrapper">
		<header id="pageHeader">
			<div class="pageHeaderTopBar bg-light">
				<div class="container clearfix position-relative">
					<div class="row">
						<div class="col-3 col-lg-6">
							
							<ul class="list-unstyled topBarContactList align-items-center mb-0 d-none d-md-flex">
								<li>
									<a href="tel:&#049;&#050;&#051;&#052;&#053;&#054;&#055;&#056;&#057;&#049;&#048;">
										<i class="fas fa-phone fa-flip-horizontal icn"><span class="sr-only">icon</span></i>
										<span class="d-none d-lg-inline">+94715611859</span>
										
									</a>
								</li>
								<li>
									<a href="mailto:&#073;&#110;&#102;&#111;&#046;&#100;&#101;&#101;&#114;&#099;&#114;&#101;&#097;&#116;&#105;&#118;&#101;&#064;&#103;&#109;&#097;&#105;&#108;&#046;&#099;&#111;&#109;">
										<i class="fas fa-envelope icn"><span class="sr-only">icon</span></i>
										<span class="d-none d-lg-inline">Info.thaksalawa@gmail.com</span>
									</a>
								</li>
							</ul>
						</div>

						<div class="col-9 col-lg-6 d-flex justify-content-end position-static">
							<form action="#" class="topBarSearchForm">
								<div class="form-group collapse mb-0" id="searhFormCollpase">
									<input type="text" class="form-control d-block" placeholder="Search&hellip;">
									<button type="button" class="ei_icon_search buttonReset"><span class="sr-only">search</span></button>
								</div>
							</form>	
							<ul class="list-unstyled loginLinksList text-uppercase d-flex mb-0">
									@guest
										<li class="nav-item">
											<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
										</li>
										
										<li class="nav-item">
											<a class="nav-link" href="/reprofile">{{ __('Register') }}</a>
										</li>
									
									@else
										<li class="nav-item dropdown">
											<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
												{{ Auth::user()->name }} <span class="caret"></span>
											</a>
			
											<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
												{{-- <a class="dropdown-item" href="{{ route('logout') }}"
												   onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
												</a>
			
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form> --}}
											</div>
											<a class="dropdown-item" href="{{ route('logout') }}"
												   onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
													{{ __('Logout') }}
												</a>
			
												<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
													@csrf
												</form>
										</li>
									@endguest
								</ul>
							</ul>												
						</div>
					</div>
				</div>
			</div>
			<div class="headerFixer">
				<div class="bg-white">
				
					<div class="container clearfix pageHeaderHolder">
						<div class="logo alignleft">
							<a href="home.html">
								<img src="images/logos.png" alt="opps):">
							</a>
						</div>
					
						<div class="pageNavHolder alignright d-flex justify-content-end align-items-md-start">
							<a class="topBarSearchFormOpener d-flex d-md-none align-items-center justify-content-center flex-shrink-0" data-toggle="collapse" href="#searhFormCollpase" role="button" aria-expanded="false" aria-controls="searhFormCollpase">
								<i class="fas fa-search"><span class="sr-only">icon</span></i>
							</a>
							
							<nav id="pageNav" class="navbar navbar-expand-lg order-lg-1">
								<button class="navbar-toggler pageMainNavOpener" type="button" data-toggle="collapse" data-target="#pageMainNavCollapse" aria-controls="pageMainNavCollapse" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse mainNavCollapse" id="pageMainNavCollapse">
									<ul class="navbar-nav pageMainNavigation justify-content-md-end">
										<li class="nav-item  dropdown">
											<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home <span class="sr-only">(current)</span></a>
											<div class="dropdown-menu mainNavDropdown text-uppercase">
												
												{{-- <ul class="list-unstyled navDropdownList">
													<li>
														<a class="dropdown-item" href="home.html">Homepage 1</a>
													</li>
													<li>
														<a class="dropdown-item" href="home2.html">Homepage 2</a>
													</li>
												</ul> --}}
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/request"  " aria-haspopup="true" aria-expanded="false">Add Requset</a>
											<div class="dropdown-menu mainNavDropdown text-uppercase">
												
												<ul class="list-unstyled navDropdownList">
														<ul class="list-unstyled navDropdownList">													
													</li>
												</ul>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/findteacher">View Teachers</a>
											<div class="dropdown-menu mainNavDropdown text-uppercase">						
												<ul class="list-unstyled navDropdownList">
												</ul>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/payment">Live</a>
											<div class="dropdown-menu mainNavDropdown text-uppercase">
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link fwMedium text-uppercase  dropdown-toggle" href="/contactus">Contact us</a>
											<div class="dropdown-menu mainNavDropdown text-uppercase">
											</div>
										</li>
										<li class="nav-item dropdown">
											<a class="nav-link fwMedium text-uppercase dropdown-toggle" href="/studentprofile" >Profile</a>
											<div class="dropdown-menu mainNavDropdown text-uppercase">
												{{-- <ul class="list-unstyled navDropdownList">
													<li>
														<a class="dropdown-item" href="contact.html">Contact 01</a>
													</li>
												</ul> --}}
											</div>
										</li>
									</ul>
								</div>
							</nav>
						</div>
					</div>
				</div>
            </div>
        </header>	
	@endif
    
</body>
</html>