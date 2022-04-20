@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
@include('components.navbar')
<!-- Header -->
<header id="header" class="header">
<<<<<<< HEAD
	<img class="decoration-star" src="https://technext.github.io/yavin/images/decoration-star.svg" alt="alternative">
	<img class="decoration-star-2" src="https://technext.github.io/yavin/images/decoration-star.svg" alt="alternative">
	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{asset('image/Slide/1.png')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('image/Slide/2.png')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
					<p>Some representative placeholder content for the second slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('image/Slide/3.png')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</header>
<!-- Content -->
=======
	<img class="decoration-star" src="{{asset('image/decoration-star.svg')}}" alt="alternative">
	<img class="decoration-star-2" src="{{asset('image/decoration-star.svg')}}" alt="alternative">
	<div class="container">
		<div class="row">
			<div class="col-lg-7 col-xl-5">
				<div class="text-container">
					<h1 class="h1-large">Beauty Care <br> Clinic</h1>
					<p class="p-large">คลินิกความงามครบวงจรพร้อมให้บริการคุณ โดยทีมแพทย์ผู้เชี่ยวชาญให้คำปรึกษาปัญหาทั้งด้านศัลยกรรม ผิวพรรณ ใบหน้าจนถึงรูปร่างด้วยประสบการณ์และความมุ่งมั่นทุ่มเทที่จะให้การดูแลแก่ทุกท่านในราคาที่คุณพอใจ
เด่นในเรื่องดูดไขมันโดยใช้นวัตกรรม เทคโนโลยี กระบวนการใหม่ๆ ด้วยความปลอดภัยที่ได้ระดับมาตรฐานสากล รวมถึงผลิตภัณฑ์และยาที่ได้รับมาตรฐานจากองค์การอาหารและยา กระทรวงสาธารณสุข</p>
					<a class="btn-solid-lg" href="#introduction">More details</a>
					<a class="btn-outline-lg" href="#contact">Contact us</a>
				</div> <!-- end of text-container -->
			</div> <!-- end of col -->
			<div class="col-lg-5 col-xl-7">
				<div class="image-container">
					<img class="img-fluid" src="{{asset('image/uploads/doctor.png')}}" alt="alternative">
				</div> <!-- end of image-container -->
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</header> <!-- end of header -->
<!-- end of header -->
>>>>>>> ec00e84c048dd43b6fa88b43455dfe5d324b890b


<!-- Statistics -->
<div class="counter">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<!-- Counter -->
				<div class="counter-container">
					<div class="counter-cell">
						<div data-purecounter-start="0" data-purecounter-end="231" data-purecounter-duration="3" class="purecounter">1</div>
						<div class="counter-info">Happy Customers</div>
					</div> <!-- end of counter-cell -->
					<div class="counter-cell">
						<div data-purecounter-start="0" data-purecounter-end="385" data-purecounter-duration="1.5" class="purecounter">1</div>
						<div class="counter-info">Issues Solved</div>
					</div> <!-- end of counter-cell -->
					<div class="counter-cell">
						<div data-purecounter-start="0" data-purecounter-end="159" data-purecounter-duration="3" class="purecounter">1</div>
						<div class="counter-info">Good Reviews</div>
					</div> <!-- end of counter-cell -->
					<div class="counter-cell">
						<div data-purecounter-start="0" data-purecounter-end="128" data-purecounter-duration="3" class="purecounter">1</div>
						<div class="counter-info">Case Studies</div>
					</div> <!-- end of counter-cell -->
				</div> <!-- end of counter-container -->
				<!-- end of counter -->

			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of counter -->
<!-- end of statistics -->


<!-- Introduction -->
<div id="introduction" class="basic-1 bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-xl-9">
				<h2>Creating office spaces is our passion and you can see that in our completed projects</h2>
				<p>Unpleasing has ask acceptance partiality alteration understood two. Worth no tiled my at house added. Married he hearing am it totally removal. Remove but suffer wanted his lively length. Moonlight two applauded conveying end direction old principle but. Are expenses distance weddings perceive</p>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of basic-1 -->
<!-- end of introduction -->


<!-- Details 1 -->
<div id="details" class="basic-2">
	<img class="decoration-star" src="{{asset('image/decoration-star.svg')}}" alt="alternative">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-xl-5">
				<div class="image-container">
					<img class="img-fluid" src="https://technext.github.io/yavin/images/details-1.png" alt="alternative">
				</div> <!-- end of image-container -->
			</div> <!-- end of col -->
			<div class="col-lg-6 col-xl-7">
				<div class="text-container">
					<h2>Office spaces should be unique they don’t need to look the same</h2>
					<ul class="list-unstyled li-space-lg">
						<li class="d-flex">
							<i class="fas fa-square"></i>
							<div class="flex-grow-1">At every tiled on ye defer do. No attention suspected oh difficult. Fond his say</div>
						</li>
						<li class="d-flex">
							<i class="fas fa-square"></i>
							<div class="flex-grow-1">Old meet cold find come whom. The sir park sake bred. Wonder matter now</div>
						</li>
						<li class="d-flex">
							<i class="fas fa-square"></i>
							<div class="flex-grow-1">Can estate esteem assure fat roused. Am performed on existence as discourse</div>
						</li>
						<li class="d-flex">
							<i class="fas fa-square"></i>
							<div class="flex-grow-1">existence as discourse is. Pleasure friendly at marriage blessing or should</div>
						</li>
					</ul>
					<a class="btn-solid-reg" href="article.html">Get started</a>
				</div> <!-- end of text-container -->
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of basic-2 -->
<!-- end of details 1 -->


<!-- Services -->
<div id="services" class="cards-1 bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-5">
				<div class="text-container">
					<h2>Services that we offer</h2>
					<p>Greatly hearted has who believe. Drift allow green son walls years for blush. Sir margaret drawings repeated recurred exercise laughing may you</p>
					<p>Do repeated whatever to welcomed absolute no. Fat surprise although more words outlived</p>
					<ul class="list-unstyled li-space-lg">
						<li class="d-flex">
							<i class="fas fa-square"></i>
							<div class="flex-grow-1">And informed shy dissuade property. Musical by</div>
						</li>
						<li class="d-flex">
							<i class="fas fa-square"></i>
							<div class="flex-grow-1">He drawing savings an. No we stand avoid</div>
						</li>
						<li class="d-flex">
							<i class="fas fa-square"></i>
							<div class="flex-grow-1">Announcing of invita mrore wo tion principle</div>
						</li>
					</ul>
				</div> <!-- end of text-container -->
			</div> <!-- end of col -->
			<div class="col-lg-7">
				<div class="card-container">

					<!-- Card -->
					<div class="card">
						<div class="card-icon">
							<span class="fas fa-rocket"></span>
						</div>
						<div class="card-body">
							<h5 class="card-title">Space analysis and planning</h5>
						</div>
					</div>
					<!-- end of card -->

					<!-- Card -->
					<div class="card">
						<div class="card-icon">
							<span class="far fa-clock"></span>
						</div>
						<div class="card-body">
							<h5 class="card-title">Design and color choosing</h5>
						</div>
					</div>
					<!-- end of card -->

					<!-- Card -->
					<div class="card">
						<div class="card-icon">
							<span class="far fa-comments"></span>
						</div>
						<div class="card-body">
							<h5 class="card-title">Materials and delivery</h5>
						</div>
					</div>
					<!-- end of card -->

					<!-- Card -->
					<div class="card">
						<div class="card-icon">
							<span class="fas fa-tools"></span>
						</div>
						<div class="card-body">
							<h5 class="card-title">Execute the concept</h5>
						</div>
					</div>
					<!-- end of card -->

					<!-- Card -->
					<div class="card">
						<div class="card-icon">
							<span class="fas fa-chart-pie"></span>
						</div>
						<div class="card-body">
							<h5 class="card-title">Creating great atmosphere</h5>
						</div>
					</div>
					<!-- end of card -->

					<!-- Card -->
					<div class="card">
						<div class="card-icon">
							<span class="far fa-chart-bar"></span>
						</div>
						<div class="card-body">
							<h5 class="card-title">Evaluation and reporting</h5>
						</div>
					</div>
					<!-- end of card -->

				</div> <!-- end of container -->
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of services -->


<!-- Details 2 -->
<div class="basic-3">
	<img class="decoration-star" src="{{asset('image/decoration-star.svg')}}" alt="alternative">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-xl-7">
				<div class="text-container">
					<h2>A beautiful and well organized office space increases productivity</h2>
					<p>On it differed repeated wandered required in. Then girl neat why yet knew rose spot. Moreover property we he kindness greatest be oh striking laughter. In me he at collecting affronting principles apartments. Has visitor law attacks pretend you calling own excited painted. Contented attending</p>
					<a class="btn-solid-reg" href="article.html">Get started</a>
				</div> <!-- end of text-container -->
			</div> <!-- end of col -->
			<div class="col-lg-6 col-xl-5">
				<div class="image-container">
					<img class="img-fluid" src="https://technext.github.io/yavin/images/details-2.png" alt="alternative">
				</div> <!-- end of image-container -->
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of basic-3 -->
<!-- end of details 2 -->


<!-- Invitation -->
<div class="basic-4 bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h4>Our team of highly skilled designers and interior construction workers can deliver above your level of expections</h4>
				<a class="btn-solid-lg" href="#contact">Get quote</a>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of basic-4 -->
<!-- end of invitation -->


<!-- Projects -->
<div id="projects" class="cards-2">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="h2-heading">Services</h2>
			</div> <!-- end of col -->
		</div> <!-- end of row -->
		<div class="row">
			<div class="col-lg-12">

				<!-- Card -->
				<div class="card">
					<img class="img-fluid" src="https://image.makewebeasy.net/makeweb/m_750x0/2GFvGZndG/DefaultData/IMG_7690.jpg?v=202012190947" alt="alternative">
					<div class="card-body">
						<h4 class="card-title text-center">เสริมจมูก</h4>
						<p class="card-text">ทำจมูก หรือการศัลยกรรมจมูก (Rhinoplasty) คือการผ่าตัดเปลี่ยนรูปร่างของจมูก โดยอาจมีจุดประสงค์เพื่อปรับรูปร่างลักษณะของจมูกใหม่</p>
					</div>
				</div>
				<!-- end of card -->

				<!-- Card -->
				<div class="card">
					<img class="img-fluid" src="https://image.makewebeasy.net/makeweb/0/2GFvGZndG/DefaultData/117906534_xl.jpg?v=202012190947" alt="alternative">
					<div class="card-body">
						<h4 class="card-title text-center">ตาสองขั้น</h4>
						<p class="card-text">ดวงตาเป็นหน้าต่างของหัวใจ เพราะฉะนั้น เราควรดูแลเป็นอย่างดี อีกทั้งยังเป็นจุดที่มีเสน่ห์แล้วชวนให้หลงใหลได้อีกด้วย ควรมีตาสองชั้นที่มีลักษณะดีตามตำราโหงวเฮ้ง</p>
					</div>
				</div>
				<!-- end of card -->

				<!-- Card -->
				<div class="card">
					<img class="img-fluid" src="https://image.makewebeasy.net/makeweb/0/2GFvGZndG/DefaultData/114922804_xl.jpg?v=202012190947" alt="alternative">
					<div class="card-body">
						<h4 class="card-title text-center">เสริมคาง</h4>
						<p class="card-text">ทำไมเราถึงต้องเสริมคาง บางคนตอบว่าอยากได้หน้าหวานขึ้น อยากได้หน้าวีเชฟมากขึ้น อยากได้โหงวเฮ้งรับทรัพย์ อยากให้หายคางบุ๋ม ตัด หรือสั้น ล้วนเป็นคำตอบส่วนใหญ่</p>
					</div>
				</div>
				<!-- end of card -->

				<!-- Card -->
				<div class="card">
					<img class="img-fluid" src="https://image.makewebeasy.net/makeweb/m_750x0/51KrHvmMb/DefaultData/iStock_1159699813.jpg?v=202012190947" alt="alternative">
					<div class="card-body">
						<h5 class="card-title">เลเซอร์รักษาสิว</h5>
						<p class="card-text">Vent new at or happiness commanded daughters as is handsome an <a class="blue no-line" href="article.html">...Read more</a></p>
					</div>
				</div>
				<!-- end of card -->

				<!-- Card -->
				<div class="card">
					<img class="img-fluid" src="https://image.makewebeasy.net/makeweb/0/2GFvGZndG/DefaultData/iStock_1147978235.jpg?v=202012190947" alt="alternative">
					<div class="card-body">
						<h4 class="card-title text-center">VITAMIN ผิว</h4>
						<p class="card-text">ไม่ว่าจะยุคสมัยไหน “การฉีดผิว”ก็เป็นอะไรที่ขาดไม่ได้ ไม่ว่าจะเป็นการฉีดผิวให้ดูขาว กระจ่างใสขึ้น หรือว่าจะฉีดวิตามินบำรุงสุขภาพทั่วไป ซึ่งยังเป็นที่นิยมและได้รับความสนใจจากสาวๆ</p>
					</div>
				</div>
				<!-- end of card -->

				<!-- Card -->
				<div class="card">
					<img class="img-fluid" src="https://image.makewebeasy.net/makeweb/m_750x0/2GFvGZndG/DefaultData/IMG_7689.jpg?v=202012190947" alt="alternative">
					<div class="card-body">
						<h4 class="card-title text-center">MESO THERAPHY หน้าใส</h4>
						<p class="card-text">“เมโสหน้าใส หรือ Mesotherapy” คือ การให้สารอาหารและวิตามินต่างๆในการช่วยบำรุงหน้า ด้วยวิธีการที่เร่งรัดและเห็นผลที่รวดเร็วกว่าการทาครีม รวมถึงแก้ปัญหาต่างๆของผิวหน้า โดยจะลงลึกได้มากกว่าการทาครีมทั่วไป</p>
					</div>
				</div>
				<!-- end of card -->

			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of projects -->


<!-- Testimonials -->
<div class="slider-1 bg-gray">
	<img class="quotes-decoration" src="{{asset('image/quotes.svg')}}" alt="alternative">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">

				<!-- Card Slider -->
				<div class="slider-container">
					<div class="swiper-container card-slider">
						<div class="swiper-wrapper">

							<!-- Slide -->
							<div class="swiper-slide">
								<img class="testimonial-image" src="https://technext.github.io/yavin/images/testimonial-1.jpg" alt="alternative">
								<p class="testimonial-text">“Expense bed any sister depend changer off piqued one. Contented continued any happiness instantly objection yet her allowance. Use correct day new brought tedious. By come this been in. Kept easy or sons my it how about some words here done”</p>
								<div class="testimonial-author">Marlene Visconte</div>
								<div class="testimonial-position">General Manager - Scouter</div>
							</div> <!-- end of swiper-slide -->
							<!-- end of slide -->

							<!-- Slide -->
							<div class="swiper-slide">
								<img class="testimonial-image" src="https://technext.github.io/yavin/images/testimonial-2.jpg" alt="alternative">
								<p class="testimonial-text">“Expense bed any sister depend changer off piqued one. Contented continued any happiness instantly objection yet her allowance. Use correct day new brought tedious. By come this been in. Kept easy or sons my it how about some words here done”</p>
								<div class="testimonial-author">John Spiker</div>
								<div class="testimonial-position">Team Leader - Vanquish</div>
							</div> <!-- end of swiper-slide -->
							<!-- end of slide -->

							<!-- Slide -->
							<div class="swiper-slide">
								<img class="testimonial-image" src="https://technext.github.io/yavin/images/testimonial-3.jpg" alt="alternative">
								<p class="testimonial-text">“Expense bed any sister depend changer off piqued one. Contented continued any happiness instantly objection yet her allowance. Use correct day new brought tedious. By come this been in. Kept easy or sons my it how about some words here done”</p>
								<div class="testimonial-author">Stella Virtuoso</div>
								<div class="testimonial-position">Design Chief - Bikegirl</div>
							</div> <!-- end of swiper-slide -->
							<!-- end of slide -->

						</div> <!-- end of swiper-wrapper -->

						<!-- Add Arrows -->
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						<!-- end of add arrows -->

					</div> <!-- end of swiper-container -->
				</div> <!-- end of slider-container -->
				<!-- end of card slider -->

			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of slider-1 -->
<!-- end of testimonials -->


<!-- Contact -->
<div id="contact" class="form-1">
	<img class="decoration-star" src="{{asset('image/decoration-star.svg')}}" alt="alternative">
	<img class="decoration-star-2" src="{{asset('image/decoration-star.svg')}}" alt="alternative">
	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				<div class="image-container">
					<img class="img-fluid" src="https://technext.github.io/yavin/images/contact.png" alt="alternative">
				</div> <!-- end of image-container -->
			</div> <!-- end of col -->
			<div class="col-lg-6">
				<div class="text-container">
					<h2>Contact us for a quote using the following form</h2>

					<!-- Contact Form -->
					<form>
						<div class="form-group">
							<input type="text" class="form-control-input" placeholder="Name" required>
						</div>
						<div class="form-group">
							<input type="email" class="form-control-input" placeholder="Email" required>
						</div>
						<div class="form-group">
							<textarea class="form-control-textarea" placeholder="Message" required></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="form-control-submit-button">Submit</button>
						</div>
					</form>
					<!-- end of contact form -->
				</div> <!-- end of text-container -->
			</div> <!-- end of col -->
		</div> <!-- end of row -->
	</div> <!-- end of container -->
</div> <!-- end of form-1 -->
<!-- end of contact -->


@include('components.footer')

@endsection