@extends('zegen.layouts.layout01')
@section('content')
@component('zegen.components.header01', [
	'variables' => $variables
])
@endcomponent
<!-- header -->
<!-- Revolution Slider Section -->
<p class="rs-p-wp-fix"></p>
<rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="zegen-home-1" data-source="gallery"
	style="visibility:hidden;background:#000000;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
	<rs-module id="rev_slider_1_1" style="" data-version="6.5.31">
		<rs-slides>
			<rs-slide style="position: absolute;" data-key="rs-1" data-title="Web Show"
				data-thumb="{{ asset('/hm/old/1536x864x0.avif') }}"
				data-anim="adpr:false;e:slidingoverlay;ms:2000;" data-in="o:1;x:(100%);" data-out="a:false;">
				<img src="{{ asset('/hm/old/1536x864x0.avif') }}" alt="Non Profit Wordpress Theme" title="zmain-slider-1.jpg"
					width="1536" height="864" class="rev-slidebg tp-rs-img rs-lazyload"
					data-lazyload="{{ asset('/hm/old/1536x864x0.avif') }}" data-parallax="5" data-no-retina>
				<h1 id="slider-1-slide-1-layer-2" class="rs-layer Concept-Title" data-type="text"
					data-color="#ffffff||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)||rgba(255, 255, 255, 1)"
					data-rsp_ch="on" data-xy="x:c;y:m;yo:10px,-26px,-10px,-33px;"
					data-text="w:normal,nowrap,nowrap,normal;s:54,50,45,30;l:52,55,50,40;ls:3px;fw:700;a:center;"
					data-dim="w:754px,699px,auto,400px;" data-padding="b:10;" data-frame_0="sX:2;sY:2;"
					data-frame_0_mask="u:t;" data-frame_1="e:power2.out;st:2110;sp:1270;sR:2110;"
					data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:5620;"
					data-frame_999_reverse="x:true;" style="z-index:10;font-family:'Poppins';text-transform:uppercase;">
					Serve one another
				</h1>
				<rs-layer id="slider-1-slide-1-layer-4" class="Concept-SubTitle" data-type="text"
					data-color="#bf0a30||#e9204f||#e9204f||#e9204f" data-rsp_ch="on"
					data-xy="x:c;y:m;yo:-42px,-83px,-64px,-71px;"
					data-text="w:normal,nowrap,nowrap,nowrap;s:21,20,20,15;l:21,25,20,20;fw:700;a:center,left,left,left;"
					data-dim="w:408px,auto,auto,auto;" data-padding="b:10;" data-frame_0="o:1;"
					data-frame_0_chars="d:5;y:100%;o:0;rZ:-35deg;" data-frame_0_mask="u:t;"
					data-frame_1="st:640;sp:1200;sR:640;" data-frame_1_chars="e:power4.inOut;d:10;rZ:0deg;"
					data-frame_1_mask="u:t;" data-frame_999="x:left;e:power3.in;st:w;sp:1000;sR:4960;"
					data-frame_999_reverse="x:true;"
					style="z-index:11;font-family:'Open Sans';text-transform:uppercase;">
					{{-- we help you get things done --}}
				</rs-layer>
				<rs-layer id="slider-1-slide-1-layer-14" data-type="text" data-rsp_ch="on"
					data-xy="x:c;y:m,t,t,t;yo:78px,286px,271px,233px;"
					data-text="w:normal;s:18,18,16,15;l:31,30,30,27;a:center;"
					data-dim="w:806px,805px,689px,388px;h:auto,auto,auto,89px;" data-frame_0="y:100%;"
					data-frame_0_mask="u:t;" data-frame_1="st:2680;sp:1360;sR:2680;" data-frame_1_mask="u:t;"
					data-frame_999="o:0;st:w;sR:4960;" style="z-index:9;font-family:'Open Sans';">
					{{-- Jesus is holy, loving, and worthy of all our worship and devotion. You will feel heaven in our Church. Join us and Praise the Lord Jesus. --}}
				</rs-layer>
				<rs-layer id="slider-1-slide-1-layer-16" class="res-slide-btn pop rev-btn" data-type="button"
					data-color="rgba(255,255,255,1)" data-xy="x:c;y:m;yo:162px,130px,128px,117px;"
					data-text="s:16,16,14,14;l:17;fw:500;a:center;" data-rsp_bd="off"
					data-padding="t:15,15,10,10;r:35,35,25,25;b:15,15,10,10;l:35,35,25,25;"
					data-border="bor:3px,3px,3px,3px;" data-frame_0="rX:-70deg;oZ:-50;"
					data-frame_1="oZ:-50;e:power4.inOut;st:3160;sp:1750;" data-frame_999="o:0;st:w;sR:4640;"
					data-frame_hover="bgc:#000;boc:#000;bor:3px,3px,3px,3px;bos:solid;oX:50;oY:50;sp:0;"
					style="z-index:8;background-color:#bf0a30;font-family:'Poppins';cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;">
					Contact Us
				</rs-layer>
				<rs-layer id="slider-1-slide-1-layer-21" data-type="image" data-rsp_ch="on"
					data-xy="x:c;yo:228px,95px,91px,90px;" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;"
					data-dim="w:67px,60px,56px,45px;h:67px,60px,56px,45px;" data-frame_0="x:100%;"
					data-frame_0_mask="u:t;" data-frame_1="st:210;sp:1000;sR:210;" data-frame_1_mask="u:t;"
					data-frame_999="o:0;st:w;sR:7790;" style="z-index:12;"><img src="{{ asset('rs-plugin/assets/dummy.png') }}""
					alt="Non Profit Wordpress Theme" class="tp-rs-img rs-lazyload" width="80" height="80"
					data-lazyload="{{ asset('rs-plugin/assets/dove.png') }}" data-no-retina>
				</rs-layer>
			</rs-slide>
		</rs-slides>
		<rs-static-layers>
		</rs-static-layers>
	</rs-module>
	<script>
		if (typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				console.log("You have some jquery.js library include that comes after the Slider Revolution files js inclusion.");
				console.log("To fix this, you can:");
				console.log("1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on");
				console.log("2. Find the double jQuery.js inclusion and remove it");
				return "Double Included jQuery Library";
			}
		}
	</script>
</rs-module-wrap>
<!-- Revolution Slider Section End -->
<!-- Page Content -->
<div class="content-wrapper pad-none">
	<div class="content-inner">
		<!-- Events Section -->
		<section class="events-section pad-tb-0 broken-top-50 pt-sm-5 pt-xl-0 pad-bottom-md-none">
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!--Events Main Slider-->
					<div class="owl-carousel events-main-wrapper events-style-1" data-loop="1" data-nav="0"
						data-dots="1" data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000"
						data-smartspeed="1000" data-margin="30" data-items="2" data-items-tab="1" data-items-mob="1">
						<!--Item-->
						<div class="item">
							<!--Events Inner-->
							<div class="events-inner">
								<div class="events-item">
									<div class="media">
										<div class="event-date me-4">April 17<span class="event-time">8.00 am</span>
										</div>
										<div class="media-body">
											<!-- Ministries Content -->
											<div class="event-content">
												<div class="event-title">
													<h5><a href="#">Vacation Bible School (VBS)</a></h5>
												</div>
												<div class="read-more"><a href="#">Event Details</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Events Inner Ends-->
						</div>
						<!--Item Ends-->
						<!--Item-->
						<div class="item">
							<!--Events Inner-->
							<div class="events-inner">
								<div class="events-item">
									<div class="media">
										<div class="event-date me-4">July 30<span class="event-time">10.00 am</span>
										</div>
										<div class="media-body">
											<!-- Ministries Content -->
											<div class="event-content">
												<div class="event-title">
													<h5><a href="event-details.html">Confirmation classes</a></h5>
												</div>
												<div class="read-more"><a href="event-details.html">Event Details</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Events Inner Ends-->
						</div>
						<!--Item Ends-->
						<!--Item-->
						<div class="item">
							<!--Events Inner-->
							<div class="events-inner">
								<div class="events-item">
									<div class="media">
										<div class="event-date me-4">Mar 3<span class="event-time">6.00
												am</span>
										</div>
										<div class="media-body">
											<!-- Ministries Content -->
											<div class="event-content">
												<div class="event-title">
													<h5><a href="event-details.html">New Families During
															National Adoption Month</a></h5>
												</div>
												<div class="read-more"><a href="event-details.html">Event
														Details</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Events Inner Ends-->
						</div>
						<!--Item Ends-->
						<!--Item-->
						<div class="item">
							<!--Events Inner-->
							<div class="events-inner">
								<div class="events-item">
									<div class="media">
										<div class="event-date me-4">Apr 18<span class="event-time">12.00
												pm</span>
										</div>
										<div class="media-body">
											<!-- Ministries Content -->
											<div class="event-content">
												<div class="event-title">
													<h5><a href="event-details.html">Event: Lord is
															Sufficient for all of our needs</a></h5>
												</div>
												<div class="read-more"><a href="event-details.html">Event
														Details</a></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!--Events Inner Ends-->
						</div>
						<!--Item Ends-->
					</div>
					<!--Events Owl Slider-->
				</div>
				<!-- Row -->
			</div>
			<!-- Container -->
		</section>
		<!-- Events Section End -->
		<!-- About Section -->
		<section id="section-about" class="section-about pad-top-90">
			<div class="container">
				<!-- Row -->
				<div class="row">
					<!-- Col -->
					<div class="col-xl-6 align-self-center">
						<!-- about wrap -->
						<div class="about-wrap relative">
							<div class="about-wrap-inner">
								<!-- about details -->
								<div class="about-wrap-details">
									<!-- about button -->
									<div class="text-center">
										<div class="about-img bf-pattern mb-5 mb-xl-0">
											{{-- <img src="{{ asset('hm/d2e07f34-906e-42e8-9efa-05dd3ae64727/483x497.avif') }}" class="" alt="about-img"> --}}
											<img src="https://imagedelivery.net/roFwfALiJNh8cGMyjn0Wng/11a4d5cc-4722-42da-549e-d61eedd31700/w=483,fit=cover,h=497" class="" alt="about-img">
											
										</div>
										<!-- .col -->
									</div>
								</div>
								<!-- about details End-->
							</div>
						</div>
						<!-- about wrap end -->
					</div>
					<!-- .col -->
					<!-- Col -->
					<div class="col-xl-6 px-3 ps-xl-0">
						<div class="title-wrap margin-bottom-30">
							<div class="section-title">
								<span class="sub-title theme-color text-uppercase">About Us</span>
								<h2 class="section-title margin-top-5">We are taking small steps to serve others</h2>
								<span class="border-bottom"></span>
							</div>
							<div class="pad-top-15">
								<p class="margin-bottom-20">We welcome you with great joy to Church.
									We are here to share the great news of Jesus Christ to all that will
									listen.</p>
								<p class="styled-text">The name of the Lord is a strong tower; the righteous
									run into it and are safe.</p>
							</div>
						</div>
						<div class="row">
							<!-- Feature Box -->
							<div class="col-md-6">
								<div class="feature-box-wrap f-box-style-1 mb-md-0 mb-sm-4 relative">
									<div class="feature-box-details">
										<div class="feature-icon margin-bottom-25">
											<span class="ti-heart b-radius-50 d-block"></span>
										</div>
										<div class="feature-content">
											<div class="feature-title relative margin-bottom-15">
												<h4>Place Of Fellowship</h4>
											</div>
											<p class="mb-0">Here, you will feel divinity, piety,
												goodness, faith or right beliefs.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Feature Box End -->
							<!-- Feature Box -->
							<div class="col-md-6">
								<div class="feature-box-wrap f-box-style-1 relative">
									<div class="feature-box-details">
										<div class="feature-icon margin-bottom-25">
											<span class="ti-book b-radius-50 d-block"></span>
										</div>
										<div class="feature-content">
											<div class="feature-title relative margin-bottom-15">
												<h4>Study Bible</h4>
											</div>
											<p class="mb-0">Learn the Bible enhance your wisdom, give you
												boldness about your faith.</p>
										</div>
									</div>
								</div>
							</div>
							<!-- Feature Box End -->
						</div>
						<div class="button-section margin-top-35">
							<a class="btn btn-default" href="about-us.html" title="Learn More">Learn
								More</a>
						</div>
					</div>
					<!-- Col -->
				</div>
				<!-- Row -->
			</div>
			<!-- Container -->
		</section>
		<!-- About Section End -->
		<!-- Get a Quote Section -->
		<section id="get-quote-section" class="get-quote-section section-bg-img" data-bg="{{ asset('hm/85e9e64b-3775-450d-970a-716f57ed50a9/1600x800.avif') }}">
			<div class="container">
				<!-- Row -->
				<div class="row text-center">
					<!-- Col -->
					<div class="col-md-12">
						<div class="get-quote-1">
							<!-- video wrap -->
							<div class="video-wrap wrap-stretch relative margin-bottom-50">
								<!-- video details -->
								<div class="video-wrap-details">
									<!-- video button -->
									<div class="video-play-btn text-center">
										<div class="video-icon">
											<a class="popup-youtube box-shadow1" href="https://www.youtube.com/watch?v=YQFVDCCXpoI">
												<i class="ti-heart"></i>
											</a>
										</div>
									</div>
								</div>
								<!-- video details End-->
							</div>
							<!-- video wrap end -->
							<div class="title-wrap mb-0">
								<div class="section-title typo-white margin-bottom-40">
									<h2 class="title mb-3">Restoration and Refurbishment of St. John’s Church, Bangalore – February 2022</h2>
									<span class="dancing-text">{{-- “Track the progress” --}}</span> 
								</div>
								<div class="get-quote-btn">
									<a class="btn btn-default" href="{{ route('donate') }}" title="Donate">Donate</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Col -->
				</div>
				<!-- Row -->
			</div>
			<!-- Container -->
		</section>
		<!-- Get a Quote Section End -->
		<!-- Ministries Section -->
		<section id="ministries-section" class="ministries-section pad-top-95 pad-bottom-70">
			<div class="container">
				<!-- Row -->
				<div class="row">
					<div class="offset-md-2 col-md-8">
						<div class="title-wrap text-center">
							<div class="section-title">
								<span class="sub-title theme-color text-uppercase">Ministries</span>
								<h2 class="section-title margin-top-5">Our Ministries</h2>
								<span class="border-bottom center"></span>
							</div>
						</div>
					</div>
					<!--Ministries Main Slider-->
					<div class="owl-carousel ministries-main-wrapper" data-loop="1" data-nav="1" data-dots="0"
						data-autoplay="0" data-autoplaypause="1" data-autoplaytime="5000" data-smartspeed="1000"
						data-margin="30" data-items="3" data-items-tab="2" data-items-mob="1">
						@foreach (\App\Models\Organization::get() as $org)
							<!--Item-->
							<div class="item">
								<div class="ministries-box-style-2">
									<!-- Ministries Inner -->
									<div class="ministries-inner">
										<div class="ministries-thumb">
											<img class="img-fluid squared w-100" src="{{ $org->WebsitePage->image ?? $org->image ?? "#" }}" width="360" height="240" alt="{{ $org->name }}">
										</div>
										<!-- Ministries Content -->
										<div class="ministries-content pad-30">
											<div class="ministries-title margin-bottom-15">
												<h4><a href="{{ route('organization_details', ['slug' => $org->slug]) }}" class="ministries-link">{{ $org->name }}</a></h4>
											</div>
											<div class="ministries-desc">
												<p>{{ $org->name }}</p>
											</div>
											<div class="ministries-link margin-top-20">
												<a target="_blank" href="{{ route('organization_details', ['slug' => $org->slug]) }}" class="link">Read More</a>
											</div>
										</div>
									</div>
									<!-- Ministries Inner Ends -->
								</div>
							</div>
							<!--Item Ends-->
						@endforeach
					</div>
					<!--Ministries Owl Slider-->
				</div>
				<!-- Row -->
			</div>
			<!-- Container -->
		</section>
		<!-- Ministries Section End -->
		<!-- Contact Section -->
		<section class="contact-form-section typo-white section-bg-img o-visible pad-top-80 pad-bottom-160" data-bg="{{ asset('hm/d191c29c-58dc-4457-a9c8-8677ba57608a/1600x800.avif') }}">
			<div class="shape-bottom" data-negative="false">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
					<path class="shape-fill" opacity="0.33"
						d="M473,67.3c-203.9,88.3-263.1-34-320.3,0C66,119.1,0,59.7,0,59.7V0h1000v59.7 c0,0-62.1,26.1-94.9,29.3c-32.8,3.3-62.8-12.3-75.8-22.1C806,49.6,745.3,8.7,694.9,4.7S492.4,59,473,67.3z">
					</path>
					<path class="shape-fill" opacity="0.66"
						d="M734,67.3c-45.5,0-77.2-23.2-129.1-39.1c-28.6-8.7-150.3-10.1-254,39.1 s-91.7-34.4-149.2,0C115.7,118.3,0,39.8,0,39.8V0h1000v36.5c0,0-28.2-18.5-92.1-18.5C810.2,18.1,775.7,67.3,734,67.3z">
					</path>
					<path class="shape-fill"
						d="M766.1,28.9c-200-57.5-266,65.5-395.1,19.5C242,1.8,242,5.4,184.8,20.6C128,35.8,132.3,44.9,89.9,52.5C28.6,63.7,0,0,0,0 h1000c0,0-9.9,40.9-83.6,48.1S829.6,47,766.1,28.9z">
					</path>
				</svg>
			</div>
			<div class="container">
				<div class="row">
					<!-- col -->
					<div class="col-xl-4 pe-xl-4 pb-5 pb-xl-0">
						<div class="flip-box broken-top-115 verticalMove">
							<div class="flip-box-inner imghvr-flip-3d-horz">
								<div class="flip-box-front">
									<div class="flip-box-icon margin-bottom-40"><span
											class="text-center flip-icon-middle ti-headphone-alt"></span>
									</div>
									<h3 class="flip-box-title margin-bottom-30">Call Us</h3>
									<div class="flip-content">
										<p>{{ VariableHelper::getTextblock('tenant_address') }}</p>
										<p><a href="tel:{{ $variables['strings']['tenant_phone_02'] ?? "#" }}">{{ $variables['strings']['tenant_phone_02'] ?? "#" }}</a></p>
										<p><a href="mailto:{{ $variables['strings']['tenant_email_02'] ?? "# "}}">{{ $variables['strings']['tenant_email_02'] ?? "#" }}</a>
										</p>
									</div>
								</div>
								<div class="flip-box-back">
									<h3 class="flip-box-title">Call Us</h3>
									<div class="flip-content">
										<p>{{ VariableHelper::getTextblock('tenant_address') }}</p>
										<p><a href="tel:{{ $variables['strings']['tenant_phone_01'] ?? "#" }}">{{ $variables['strings']['tenant_phone_01'] ?? "#" }}</a></p>
										<p><a href="mailto:{{ $variables['strings']['tenant_email_01'] ?? "#" }}">{{ $variables['strings']['tenant_email_01'] ?? "#" }}</a>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- col -->
					<div class="col-xl-8 ps-xl-4">
						<div class="section-title-wrapper">
							<div class="title-wrap mb-0">
								<div class="section-title">
									<span class="sub-title theme-color text-uppercase">Get In Touch</span>
									<h2 class="section-title margin-top-5">Contact Us</h2>
									<span class="border-bottom"></span>
								</div>
								<div class="pad-top-15">
									<p class="margin-bottom-10">Feel free to Contact Us.</p>
								</div>
							</div>
							<div class="button-section margin-top-25">
								<a class="btn btn-default" href="contact-us.html" title="Learn More">Contact Us</a>
							</div>
						</div>
					</div>
					<!-- .col -->
				</div>
			</div>
		</section>
		<!-- Contact Form Section End -->
		<!-- Blog Section -->
		@component('zegen.components.post_list01', [
			'posts' => \App\Models\WebsitePost::where('website_id', config('app.site_id'))->limit(4)->get(),
		])
		@endcomponent
		<!-- Blog Section End -->
	</div>
</div>
@endsection