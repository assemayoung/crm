<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="Assets/bootstrap/css/bootstrap.css"> -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/style/all.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox.css">
	<script src="script.js?<?echo time();?>"></script>
	<link rel="stylesheet" type="text/css" href="assets/style/style.css?<?echo time();?>">
	<title>Мейрамхана сайты</title>
</head>
<body>
	<div class="section-1">	
		<header class="py-3">
			<div class="container">
				<div class="row">
					<!-- Button trigger modal -->

					<!-- Modal -->
					<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel1">Выберите время бронирования</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						      	<form method="post" action="reserve-page.php">
							      	<label for="date">Выберите дату</label>

									<div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
									    <input class="form-control" type="text" name="date1" readonly />
									    <span class="input-group-addon">
									    	<i class="far fa-calendar-alt"></i>
									    </span>
									</div>

									<label for="time">Выберите время</label><br>
									<input type="time" class="time input-group-addon" name="time1" style="margin: 0 20px 20px 20px;"><br>
									<button type="submit" class="btn btn-dark rounded-pill px-4 ms-3 my-3">Забранировать столик</button>
					      		</form>
						     </div>
					    </div>
					  </div>
					</div> -->

				</div>
				<div class="row align-items-center">
					<div class="col-lg-2">
						<a href="#" class="logo fw-bold fs-2">Restaurant</a>
					</div>
					<div class="col-lg-1">
						<button class="btn text-white burger">
							<i class="fas fa-bars"></i>
						</button>
					</div>
					<div class="col-lg-5">
						<ul class="d-lg-flex justify-content-lg-between align-items-lg-center mb-0">
							<li>
								<a href="#section-2">Мейрамхана туралы</a>
							</li>
							<li>
								<a href="#section-3">Мәзір</a>
							</li>
							<li>
								<a href="#section-4">Галерея</a>
							</li>
							<li>
								<a href="#section-5">Байланыстар</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4 text-end">
						<button class="btn rounded-pill px-4 py-2 btn-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
							<i class="fas fa-phone-alt me-2"></i>Хабарласу
						</button>
						<!-- <button class="btn rounded-pill px-4 py-2 btn-outline-light" data-bs-toggle="modal" data-bs-target="#exampleModal">Забронировать столик</button> -->
						<a href="reserve-page.php" class="btn rounded-pill px-4 py-2 btn-outline-light">Үстелді брондау</a>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-12 text-center text-white">
						<p class="second_title fw-bold">Тәулік бойғы мейрамхана</p>
						<p class="second_title fs-4 pt-2">Үстелдерді онлайн режимінде брондаңыз! Дәл қазір!</p>
					</div>
				</div>
			</div>
		</header>
			
	</div>

	<div class="container my-5" id="section-2">
		<div class="row">
			<div class="col-md-6">
				<div class="card-img" style="background: url(assets/img/main_page/2.jpg) no-repeat center center / cover; height: 550px">
				</div>
			</div>

			<div class="col-md-6 m-auto">
				<div class="card card-bg-success">
					<div class="card-body p-5">
						<!-- <h3 class="text-muted">О нас</h3> -->
						<h2 class="fw-bold pb-2 text-muted">Біз туралы</h2>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad enim vitae vel itaque, tenetur neque, accusantium porro sapiente hic fuga iusto provident eaque quidem reiciendis natus, nam corporis. Beatae, quam.</p>
						<p>
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad enim vitae vel itaque, tenetur neque, accusantium porro sapiente hic fuga iusto provident eaque quidem reiciendis natus, nam corporis. Beatae, quam.	
						</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<div class="container py-5" id="section-3">

		<div class="row">
			<p class="text-center fw-bold fs-1">Мәзір</p>
		</div>
		<ul class="nav nav-pills mb-3 justify-content-center bg-transparent text-dark" id="pills-tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Таңғы ас</button>
			 </li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Салаттар</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Негізгі тағамдар</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-4" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Десерттер</button>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">
			<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
				<div class="row my-4">
					<div class="col-8">

						<div class="card-body d-flex justify-content-between align-items-center">
							<div class="mini-img" style="background: url(assets/img/main_page/4.jpg) no-repeat center center / cover; height: 100px; width: 17%">
							</div>
							<p class="w-50">
								<span class="fw-bold">Американские панкейки</span>
								<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum cum nobis
							</p>
							<p class="w-25 text-danger text-center">1250тг</p>
						</div>
						<hr>
						<div class="card-body d-flex justify-content-between align-items-center">
							<div class="mini-img" style="background: url(assets/img/main_page/5.jpg) no-repeat center center / cover; height: 100px; width: 17%">
							</div>
							<p class="w-50">
								<span class="fw-bold">Овсяная каша</span>
								<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum cum nobis
							</p>
							<p class="w-25 text-danger text-center">1050тг</p>
						</div>
						<hr>

						<div class="card-body d-flex justify-content-between align-items-center">
							<div class="mini-img" style="background: url(assets/img/main_page/2.jpg) no-repeat center center / cover; height: 100px; width: 17%">
							</div>
							<p class="w-50">
								<span class="fw-bold">Тост с авокадо</span>
								<br>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum cum nobis
							</p>
							<p class="w-25 text-danger text-center">1400тг</p>
						</div>
						
					</div>
					<div class="col-4" style="background: url(assets/img/main_page/3.jpg) no-repeat center center / cover; height: 400px">
					</div>
				</div>
				
			</div>
			<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
			<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
			<div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
		</div>
	</div>

	<div class="container" id="section-4">
		<div class="row">
			<p class="text-center fw-bold fs-1">Галерея</p>
		</div>
		<div class="row mt-4">
			<a class="fancybox col-4" rel="group" href="assets/img/main_page/6.jpg">
				<div style="background: url(assets/img/main_page/6.jpg) no-repeat center center / cover; height: 250px">
				</div>
			</a>
			<a class="fancybox col-4" rel="group" href="assets/img/main_page/7.jpg">
				<div style="background: url(assets/img/main_page/7.jpg) no-repeat center center / cover; height: 250px">
				</div>
			</a>

			<a class="fancybox col-4" rel="group" href="assets/img/main_page/8.jpg">
				<div style="background: url(assets/img/main_page/8.jpg) no-repeat center center / cover; height: 250px">
				</div>
			</a>
		</div>
		<div class="row mt-3">
			<a class="fancybox col-4" rel="group" href="assets/img/main_page/9.jpg">
				<div style="background: url(assets/img/main_page/9.jpg) no-repeat center center / cover; height: 250px">
				</div>
			</a>
			<a class="fancybox col-4" rel="group" href="assets/img/main_page/10.jpg">
				<div style="background: url(assets/img/main_page/10.jpg) no-repeat center center / cover; height: 250px">
				</div>
			</a>

			<a class="fancybox col-4" rel="group" href="assets/img/main_page/11.jpg">
				<div style="background: url(assets/img/main_page/11.jpg) no-repeat center center / cover; height: 250px">
				</div>
			</a>
		</div>
	</div>

	<div class="container">
		
	</div>	
	<footer class="text-white pb-5 mt-5" style="background-color: #2b2b2b;">
		<div class="container" id="section-5">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-6 block1">
					<!-- <img src="Assets/img/logo.svg" style="width: 200px; margin-top: 36px"> -->
					<p class="font-24 " style="font-weight: bold;margin-top: 20px">Байланыстар</p>
					<p class="font-24 num" style="margin-top: 10px">+7 (495) 230-20-60</p>

					

					
				</div>

				<div class="col-lg-2 col-md-6 col-6">
					<p class="font-24" style="padding-top: 70px">Ақпарат</p>
					<a href="#section-2" class="font-16 white" style="padding-top: 10px; display: block; color:white ">О нас</a>
					<a href="#section-3" class="font-16 white" style="padding-top: 10px;display: block;color:white">Меню</a>
					<a href="#section-4" class="font-16 white" style="padding-top: 10px;display: block;color:white">Галерея</a>
				</div>
				<div class="col-lg-4 offset-lg-2 col-md-12 block3">
					<p class="font-24 vis" style="padding-top: 103px">Әлеуметтік желілер</p>
					<div class="foot_icon vis">
						<a href="#"><img src="Assets/img/VK.png"></a>
						<a href="#"><img src="Assets/img/Facebook.png"></a>
						<a href="#"><img src="Assets/img/OK.png"></a>
						<a href="#"><img src="Assets/img/Twitter.png"></a>
						<a href="#"><img src="Assets/img/Youtube.png"></a>
						
					</div>
				</div>

				<div class="col-lg-12 col-md-12">
					<div class="store">
						<a href="#"><img src="Assets/img/appstore1.png"></a>
						<a href="#"><img src="Assets/img/googlepay1.png" style="margin-left: 20px;"></a>
						
					</div>

				</div>
			</div>
		</div>
	</footer>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<!-- <script src="Assets/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script src="assets/js/all.min.js"></script>
	<script src="assets/fancybox/jquery.fancybox.pack.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>
