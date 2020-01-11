<!DOCTYPE html>
<html lang="en">
<head>
	@include('heads.heads')
	<title>Education Supporting System</title>
</head>
<body>
		@include('heads.outernavibar')
	
		<main>
			
			<section class="bannerSliderBlock bannerSlider w-100 slickSlider text-center text-white">
				<div class="bannerSliderSlide">
					<div class="container bannerSlideHolder position-relative">
						<div class="align">
							<header class="bannerSlideHeader">
								<h1 class="text-uppercase fwSemiBold fontBase">“Your attitude, not your aptitude, will determine your altitude.”</h1>
							</header>
							{{-- <footer class="btnHolder d-flex flex-wrap justify-content-center">
								<a href="javascript:void(0);" class="btn btnThemeOutine text-uppercase" data-hover="Sign-in">
									<span class="d-block btnText">Here</span>
								</a>							
							</footer> --}}
						</div>
					</div>
					<span class="bgCover bannerBlockSlideBg d-block position-absolute" style="background-image: url(images/1.jpg);">
						<img class="sr-only" src="images/1.jpg" alt="image description">
					</span>
				</div>
				<div class="bannerSliderSlide">
					<div class="container bannerSlideHolder position-relative">
						<div class="align">
							<header class="bannerSlideHeader">
								<h1 class="text-uppercase fwSemiBold fontBase">“Start where you are. Use what you have. Do what you can.”</h1>
							</header>					
						</div>
					</div>
					<span class="bgCover bannerBlockSlideBg d-block position-absolute" style="background-image: url(images/2.jpg);">
						<img class="sr-only" src="http://placehold.it/1920x870" alt="image description">
					</span>
				</div>
				<div class="bannerSliderSlide">
					<div class="container bannerSlideHolder position-relative">
						<div class="align">
							<header class="bannerSlideHeader">
								<h1 class="text-uppercase fwSemiBold fontBase">“Anyone who has never made a mistake has never tried anything new.”</h1>
							</header>
						</div>
					</div>
					<span class="bgCover bannerBlockSlideBg d-block position-absolute" style="background-image: url(images/3.jpg);">
						<img class="sr-only" src="http://placehold.it/1920x870" alt="image description">
					</span>
				</div>
			</section>
			<section class="aboutIntroBlock pb-0 text-center text-lg-left position-relative">
				<div class="container">
					<div class="row">
						<div class="col-12 col-lg-8">
							<div class="pr-xl-5">
								<header class="headingHead wow fadeInUp" data-wow-delay="0.1s">
									<h2 class="text-uppercase blockH font-weight-bold">
										<strong class="font-weight-normal hTitle d-block fontBase">About</strong>
										<span class="d-block">Who We Are?</span>
									</h2>
									<p>we are support teachers and student</p>
									<p></p>
								</header>
							</div>
						</div>
						
					</div>
				</div>
			<a class="btn btnTheme quoteFormOpener ti-angle-left d-lg-none" data-toggle="collapse" href="#collapseQuoteForm" role="button" aria-expanded="false" aria-controls="collapseQuoteForm"><span class="sr-only">open</span></a>
			</section>	
			<section class="bg-light stepsDescrBlock text-center contentBlock">
				<div class="container">
					<div class="row">
						<div class="col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 offset-xl-3 col-xl-6">
							<header class="headingHead wow fadeInUp" data-wow-delay="0.1s">
								<h2 class="text-uppercase blockH font-weight-bold">																		
									<span class="d-block">How We Work</span>
								</h2>
								<p>thaksalwa education center</p>
							</header>
						</div>
					</div>~				
					<ul class="list-unstyled position-relative stepsGuideList d-md-flex justify-content-md-center wow fadeInUp" data-wow-delay="0.1s">
						<li class="hasOver">
							<i class="icn rounded-circle mx-auto text-dark bg-white ti-search d-flex align-items-center justify-content-center"><span class="sr-only">icon</span></i>
							<h3>Meetup partners</h3>
							<p>Teachers and student meetup</p>
						</li>
						<li class="hasOver">
							<i class="icn rounded-circle mx-auto text-dark bg-white ti-calendar d-flex align-items-center justify-content-center"><span class="sr-only">icon</span></i>
							<h3>Contact Teachers</h3>
							<p>anyone can find</p>
						</li>
						<li class="hasOver">
							<i class="icn rounded-circle mx-auto text-dark bg-white ti-pencil-alt d-flex align-items-center justify-content-center"><span class="sr-only">icon</span></i>
							<h3>Online Tution</h3>
							<p>Online classes</p>
						</li>
					</ul>
				</div>
			</section>
			{{-- <section class="bg-light clientsTestimonialBlock text-center text-md-left position-relative contentBlock">
				<div class="container">
					<div class="row no-gutters wow fadeInUp" data-wow-delay="0.1s">
						<div class="col-12 offset-md-6 col-md-6">
							<div class="clientsTestimonialBlockHolder">
								<header class="headingHead">
									<h2 class="text-uppercase blockH font-weight-bold mb-0">							
										<span class="d-block">Thaksalwa</span>
									</h2>
								</header>								
								<div class="testimonialSingleSlider slickSlider">																
									<div>									
										<blockquote class="clientQuote mb-0">
											<q class="d-block">												
												<span class="d-block">you can find us</span>
											</q>									
										</blockquote>
									</div>
								</div>												
							</div>
						</div>
						<a data-fancybox="true" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="videoBlockWrap hasOver lightbox hasOverlay d-none d-md-block">
							<span class="btnPlay position-absolute rounded-circle d-flex align-items-center justify-content-center">
								<span class="sr-only" >play</span>
							</span>
							<span class="bgCover videoBlockBgCover d-block position-absolute" style="background-image: url(images/4.jpg);">
								<img class="sr-only" alt="image description">
							</span>
						</a>
					</div>
				</div>
			</section> --}}
			{{-- <section class="contentBlock ltPostsBlock">
				<div class="container">
					<div class="row">
						<div class="col-12 offset-md-1 col-md-10 offset-lg-2 col-lg-8 text-center">
							<header class="headingHead wow fadeInUp" data-wow-delay="0.1s">
								<h2 class="text-uppercase blockH font-weight-bold">								
									<span class="d-block">Latest Post</span>
								</h2>
								<p>upcoming</p>
							</header>
						</div>
					</div>
					<div class="row wow fadeInUp" data-wow-delay="0.1s">
						<div class="col-12 col-md-6 col-lg-4">
							<article class="ltPostColumn hasOver">
								<div class="aligncenter position-relative">
									<img src="http://placehold.it/370x240" alt="image description">
								</div>
								<div class="descriptionWrap d-md-flex align-items-md-start">
									<time datetime="2011-01-12" class="d-inline-block d-md-block time flex-shrink-0 rounded text-white text-center">
										<strong class="fwSemiBold d-md-block textLarge">1</strong>
										<span class="d-md-block">December</span>
									</time>
									<div class="wrap">
										<h3><a href="blog-detail.html">MR.Wasantha yapa</a></h3>
										<p>B.com Special</p>
										<a href="blog-detail.html" class="btnMore d-inline-block">Details <i class="icn ei_arrow_right"><span class="sr-only">icon</span></i></a>
									</div>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="ltPostColumn hasOver">
								<div class="aligncenter position-relative">
									<img src="http://placehold.it/370x240" alt="image description">
								</div>
								<div class="descriptionWrap d-md-flex align-items-md-start">
									<time datetime="2011-01-12" class="d-inline-block d-md-block time flex-shrink-0 rounded text-white text-center">
										<strong class="fwSemiBold d-md-block textLarge">2</strong>
										<span class="d-md-block">DEC</span>
									</time>
									<div class="wrap">
										<h3><a href="blog-detail.html">Thissa wijesiri</a></h3>
										<p>Chemistry </p>
										<a href="blog-detail.html" class="btnMore d-inline-block">Details <i class="icn ei_arrow_right"><span class="sr-only">icon</span></i></a>
									</div>
								</div>
							</article>
						</div>
						<div class="col-12 col-md-6 col-lg-4">
							<article class="ltPostColumn hasOver">
								<div class="aligncenter position-relative">
									<img src="http://placehold.it/370x240" alt="image description">
								</div>
								<div class="descriptionWrap d-md-flex align-items-md-start">
									<time datetime="2011-01-12" class="d-inline-block d-md-block time flex-shrink-0 rounded text-white text-center">
										<strong class="fwSemiBold d-md-block textLarge">5</strong>
										<span class="d-md-block">DEC</span>
									</time>
									<div class="wrap">
										<h3><a href="blog-detail.html">thissa</a></h3>
										<p>awssddg rhrh er</p>
										<a href="blog-detail.html" class="btnMore d-inline-block">Details <i class="icn ei_arrow_right"><span class="sr-only">icon</span></i></a>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section> --}}
		</main>
		<div class="foter" >
			@include('heads.footer')
		  </div>
		 <span id="back-top" class="text-center rounded-circle fa fa-angle-up"></span> 
	</div>
	<script src="js/bootstrap.js"></script>
</body>
</html>