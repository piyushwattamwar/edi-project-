<?php

 include('db.php');


?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Homewize </title>
	<!-- FavIcon -->
	<link rel="shortcut icon" href="assets/img/favicon.png">
	<!-- BoxIcon -->
	<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
	<!-- Swiper CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/swiper-bundle.min.css">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>

<body>

	<!-- Header -->
	<header class="header" id="header">
		<div class="nav container">
			<a href="#" class="nav__logo">
				<i class='bx bxs-home-alt-2'></i> Homewize
			</a>
			<div class="nav__menu">
				<ul class="nav__list">
					<li class="nav__item">
						<a href="#home" class="nav__link active-link">
							<i class='bx bx-home-alt-2'></i>
							<span> Home </span>
						</a>
					</li>
					<li class="nav__item">
						<a href="#popular" class="nav__link">
							<i class='bx bx-building-house'></i>
							<span> Services </span>
						</a>
					</li>
					<li class="nav__item">
						<a href="#value" class="nav__link">
							<i class='bx bx-award'></i>
							<span> About </span>
						</a>
					</li>
					<li class="nav__item">
						<a href="#contact" class="nav__link">
							<i class='bx bx-phone'></i>
							<span> Contact </span>
						</a>
					</li>
					<li class="nav__item">
						<a href="add_property.html" class="nav__link">
							<i class='bx bx-phone'></i>
							<span> Add Property </span>
						</a>
					</li>

				</ul>
			</div>

			<!-- Changement de thème -->
			<i class='bx bx-moon change-theme' id="theme-button"></i>

			<a href="Login.php" class="button nav__button">
				Login
			</a>
		</div>
	</header>

	<!-- Main -->
	<main class="main">
		<!-- Home -->
		<section class="home section" id="home">
			<div class="home__container container grid">
				<div class="home__data">
					<h1 class="home__title">
						Discover Your Dream Home Today!
					</h1>
					<p class="home__description">
						Start Your Journey to Homeownership with Us. Unlock the Door to Your Future! Explore Our
						Exclusive Listings Now.
					</p>



					<div class="home__value">
						<div>
							<h1 class="home__value-number">
								9K <span>+</span>
							</h1>
							<span class="home__value-description">
								Premium <br> Projects
							</span>
						</div>
						<div>
							<h1 class="home__value-number">
								2 <span>+</span>
							</h1>
							<span class="home__value-description">
								Years Of <br> Experience
							</span>
						</div>
						<div>
							<h1 class="home__value-number">
								28K <span>+</span>
							</h1>
							<span class="home__value-description">
								Satisfied <br> Customers
							</span>
						</div>
					</div>
				</div>
				<div class="home__images">
					<div class="home__orbe"></div>
					<div class="home__img">
						<img src="assets/img/1.jpeg" alt="">
					</div>
				</div>
			</div>
		</section>



		<!-- popular -->
		<section class="popular section" id="popular">
			<div class="container">
				<span class="section__subtitle"> Services </span>
				<h2 class="nav container">
					<span class="nav-item">Buy</span>
					<span class="nav-item">PG/Co-Living</span>
					<span class="nav-item">Rent/Lease</span>
				</h2>
				<div class="popular__container swiper">
					<div class="swiper-wrapper">
						<article class="popular__card swiper-slide">
							<img class="popular__img" src="assets/img/vtf.jpg" alt="">
							<div class="popular__data">
								<h2 class="popular__price">
									<span> VTF-Flamante </span>
								</h2>
								<h3 class="popular__title">
									Services:
								</h3>
								<ul class="service-list">
									<li><a href="vtf.html"><span class="service">Buy</span></a></li>
									<li><a href="vtf.html"><span class="service">Rent</span></a></li>
								</ul>



								<p class="popular__description">
									Near SAI VILLAS, Kharadi, Pune, Maharashtra 412307
								</p>
							</div>
						</article>

						<article class="popular__card swiper-slide">
							<img class="popular__img" src="assets/img/Tower-1.jpg" alt="">
							<div class="popular__data">
								<h2 class="popular__price">
									<span> Rohan Harita </span>
								</h2>
								<h3 class="popular__title">
									Services:
								</h3>

								<ul class="service-list">
									<li><a href="buy_rentRohan.html"><span class="service">Buy</span></a></li>
									<li><a href="buy_rentRohan.html"><span class="service">Rent</span></a></li>
									<li><a href="buy_rentRohan.html"><span class="service">PG</span></a></li>
								</ul>


								<p class="popular__description">
									Ashok Nagar, Tathawade, Pune, Pimpri-Chinchwad, Maharashtra 411033
								</p>
							</div>
						</article>

						<article class="popular__card swiper-slide">
							<img class="popular__img" src="assets/img/ian-macdonald-W8z6aiwfi1E-unsplash.jpg" alt="">
							<div class="popular__data">
								<h2 class="popular__price">
									<span> 3Bhk Bungalow </span>
								</h2>
								<h3 class="popular__title">
									Services:
								</h3>
								<ul class="service-list">
									<li><a href="bunglow.html"><span class="service">Buy</span></a></li>

								</ul>


								<p class="popular__description">
									Amanora Town Centre, Hadapsar, Pune, Maharashtra 411028
								</p>
							</div>
						</article>

						<article class="popular__card swiper-slide">
							<img class="popular__img" src="assets/img/Gemini_Generated_Image (7) (1).jpeg" alt="">
							<div class="popular__data">
								<h2 class="popular__price">
									<span> Sai Paradise </span>
								</h2>
								<h3 class="popular__title">
									Services:
								</h3>
								<ul class="service-list">
									<li><a href="buy_rentRohan.html"><span class="service">Buy</span></a></li>
									<li><a href="buy_rentRohan.html"><span class="service">Rent</span></a></li>
								</ul>


								<p class="popular__description">
									Punawale, Pimpri-Chinchwad, Maharashtra 411033
								</p>
							</div>
						</article>

						<article class="popular__card swiper-slide">
							<img class="popular__img" src="assets/img/popular1.jpg" alt="">
							<div class="popular__data">
								<h2 class="popular__price">
									<span> LaxmiDeep </span>
								</h2>
								<h3 class="popular__title">
									Services:
								</h3>
								<ul class="service-list">
									<li><a href="bunglow.html"><span class="service">Rent</span></a></li>
								</ul>


								<p class="popular__description">
									Near Central Mall, Wakad , Pune, Maharashtra 412307
								</p>
							</div>
						</article>

					</div>
					<div class="swiper-button-next">
						<i class='bx bx-chevron-right'></i>
					</div>
					<div class="swiper-button-prev">
						<i class='bx bx-chevron-left'></i>
					</div>
				</div>
			</div>
		</section>

		<!-- value -->
		<section class="value section" id="value">
			<div class="value__container container grid">
				<div class="value__images">
					<div class="value__orbe"></div>
					<div class="value__img">
						<img src="assets/img/value.jpg" alt="">
					</div>
				</div>

				<div class="value__content">
					<div class="value__data">
						<span class="section__subtitle">About Us</span>
						<h2 class="section__title">
							Values we offer you <span> . </span>
						</h2>
						<p class="value__description">
							We are always ready to help you by providing you with the best possible service. We believe
							that a good place to live can make your life better.
						</p>
					</div>

					<div class="value__accordion">

						<div class="value__accordion-item">
							<header class="value__accordion-header">
								<i class='bx bxs-shield-x value__accordion-icon'></i>
								<h3 class="value__accordion-title">

									The best interest rates on the market
								</h3>
								<div class="value__accordion-arrow">
									<i class='bx bxs-down-arrow'></i>
								</div>
							</header>

							<div class="value__accordion-content">
								<p class="value__accordion-description">
									The price we provide is the best for you, we guarantee that there will be no price
									changes on your property due to various unforeseen costs that may arise.
								</p>
							</div>
						</div>

						<div class="value__accordion-item">
							<header class="value__accordion-header">
								<i class='bx bxs-bell-ring value__accordion-icon'></i>
								<h3 class="value__accordion-title">
									Preventing unstable prices
								</h3>
								<div class="value__accordion-arrow">
									<i class='bx bxs-down-arrow'></i>
								</div>
							</header>

							<div class="value__accordion-content">
								<p class="value__accordion-description">
									The price we provide is the best for you, we guarantee that there will be no price
									changes on your property due to various unforeseen costs that may arise.
								</p>
							</div>
						</div>

						<div class="value__accordion-item">
							<header class="value__accordion-header">
								<i class='bx bxs-bar-chart-square value__accordion-icon'></i>
								<h3 class="value__accordion-title">

									Best prices on the market
								</h3>
								<div class="value__accordion-arrow">
									<i class='bx bxs-down-arrow'></i>
								</div>
							</header>

							<div class="value__accordion-content">
								<p class="value__accordion-description">
									The price we provide is the best for you, we guarantee that there will be no price
									changes on your property due to various unforeseen costs that may arise.
								</p>
							</div>
						</div>

						<div class="value__accordion-item">
							<header class="value__accordion-header">
								<i class='bx bxs-check-square value__accordion-icon'></i>
								<h3 class="value__accordion-title">

									Security of your data
								</h3>
								<div class="value__accordion-arrow">
									<i class='bx bxs-down-arrow'></i>
								</div>
							</header>

							<div class="value__accordion-content">
								<p class="value__accordion-description">
									The price we provide is the best for you, we guarantee that there will be no price
									changes on your property due to various unforeseen costs that may arise.
								</p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- contact -->
		<section class="contact section" id="contact">
			<div class="contact__container container grid">

				<div class="contact__images">
					<div class="contact__orbe"></div>

					<div class="contact__img">
						<img src="assets/img/contact.png" alt="">
					</div>
				</div>

				<div class="contact__content">
					<div class="contact__data">
						<span class="section__subtitle"> Contact us
						</span>
						<h2 class="section__title">
							Easy to contact us <span>.</span>
						</h2>
						<p class="contact__description">
							Are you having trouble finding your dream home? Do you need a guide to buying your first
							home? or do you need a consultation on residential matters? contact us.
						</p>
					</div>

					<div class="contact__card">
						<div class="contact__card-box">
							<div class="contact__card-info">
								<i class='bx bxs-phone-call'></i>
								<div>
									<h3 class="contact__card-title">
										Call
									</h3>
									<p class="contact__card-description">
										9822189977
									</p>
								</div>
							</div>

							<button class="button contact__card-button">
								Call now
							</button>
						</div>

						<div class="contact__card-box">
							<div class="contact__card-info">
								<i class='bx bxs-message-rounded-dots'></i>
								<div>
									<h3 class="contact__card-title">
										Chat
									</h3>
									<p class="contact__card-description">
										9405356704
									</p>
								</div>
							</div>

							<button class="button contact__card-button">
								Chat now
							</button>
						</div>

						<div class="contact__card-box">
							<div class="contact__card-info">
								<i class='bx bxs-video'></i>
								<div>
									<h3 class="contact__card-title">
										Video call
									</h3>
									<p class="contact__card-description">
										8265094404
									</p>
								</div>
							</div>

							<button class="button contact__card-button">
								Video call now
							</button>
						</div>

						<div class="contact__card-box">
							<div class="contact__card-info">
								<i class='bx bxs-envelope'></i>
								<div>
									<h3 class="contact__card-title">
										Message
									</h3>
									<p class="contact__card-description">
										9421976239
									</p>
								</div>
							</div>

							<button class="button contact__card-button">
								Message now
							</button>
						</div>

					</div>
				</div>
			</div>
		</section>

		<!-- subscribe -->
		<section class="subscribe section">
			<div class="subscribe__container container">
				<h1 class="subscribe__title">
					Get started with Homewize
				</h1>
				<p class="subscribe__description">
					Register and discover our super advantageous price offers. Find your residence quickly.
				</p>
				<a href="listings.html">
					<button class="button subscribe__button">
						View All Listings
					</button>
				</a>
				<a href="map.html">
					<button class="button subscribe__button">
						Search By Location
					</button>
				</a>



			</div>
		</section>
	</main>



	<!-- Footer -->
	<footer class="footer section">
		<div class="footer__container container grid">
			<div>
				<a href="#" class="footer__logo">
					Homewize <i class='bx bxs-home-alt-2'></i>
				</a>
				<p class="footer__description">
					Our vision is to ensure that
					all people <br> have the best place
					to live for them. <br>
				</p>
			</div>

			<div class="footer__content">
				<div>
					<h3 class="footer__title">
						About
					</h3>
					<ul class="footer__links">
						<li>
							<a href="#" class="footer__link"> About us </a>
						</li>
						<li>
							<a href="#" class="footer__link"> Features </a>
						</li>
						<li>
							<a href="#" class="footer__link"> News & Blogs </a>
						</li>
					</ul>
				</div>

				<div>
					<h3 class="footer__title">
						Services
					</h3>
					<ul class="footer__links">
						<li>
							<a href="#" class="footer__link"> Login </a>
						</li>
						<li>
							<a href="#" class="footer__link"> FAQ </a>
						</li>
						<li>
							<a href="#" class="footer__link"> Terms & conditions </a>
						</li>
					</ul>
				</div>

				<div>
					<h3 class="footer__title">
						Support
					</h3>
					<ul class="footer__links">
						<li>
							<a href="#" class="footer__link"> Location </a>
						</li>
						<li>
							<a href="#" class="footer__link"> Help Centre </a>
						</li>
						<li>
							<a href="#" class="footer__link"> Contact Us </a>
						</li>
					</ul>
				</div>

				<div>
					<h3 class="footer__title">
						Follow Us !!
					</h3>
					<ul class="footer__social">
						<a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
							<i class='bx bxl-facebook-circle'></i>
						</a>
						<a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
							<i class='bx bxl-instagram-alt'></i>
						</a>
						<a href="https://www.pinteres.com/" target="_blank" class="footer__social-link">
							<i class='bx bxl-pinterest'></i>
						</a>
					</ul>
				</div>
			</div>
		</div>

		<div class="footer__info container">
			<span class="footer__copy">
				&#169; Homewize. All rights reserved
			</span>

			<div class="footer__privacy">
				<a href="#" alt=""> Terms & Agreements </a>
				<a href="#" alt=""> Privacy Policy </a>
			</div>
		</div>
	</footer>

	<!-- Scroll UP -->
	<a href="#" class="scrollup" id="scroll-up">
		<i class='bx bx-chevrons-up'></i>
	</a>
	<!-- ScrollReveal -->
	<script type="text/javascript" src="assets/js/scrollreveal.min.js"></script>
	<!-- Swiper Js -->
	<script type="text/javascript" src="assets/js/swiper-bundle.min.js"></script>
	<!-- JS -->
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
	<script src="https://mediafiles.botpress.cloud/fa73d141-2348-452f-b906-7f1080315ad2/webchat/config.js"
		defer></script>
</body>

</html>