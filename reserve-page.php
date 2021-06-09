<?php
    require_once 'admin/vender/connect.php';
    $table_card=mysqli_query($connect,"SELECT * FROM `tables`");
    $request=mysqli_query($connect,"SELECT * FROM `requests`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/style/all.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.css">
	<script src="script.js?<?echo time();?>"></script>
	<link rel="stylesheet" type="text/css" href="assets/style/style.css?<?echo time();?>">
	<title>Document</title>
</head>
<body class="reserve-page">
	<header class="py-3 bg-secondary">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2 col-6 order-md-first order-2">
						<a href="index.php" class="logo fw-bold fs-2">Restaurant</a>
					</div>
					<div class="col-lg-3 col-2 ">
						<button class="btn text-white burger">
							<i class="fas fa-bars fs-3"></i>
						</button>
					</div>
					<div class="col-lg-7 navbar order-md-2 order-1">
						<ul class="d-lg-flex justify-content-between align-items-center mb-0 w-100">
							<li>
								<a href="index.php">Мейрамхана туралы</a>
							</li>
							<li>
								<a href="#">Мәзір</a>
							</li>
							<li>
								<a href="#">Галерея</a>
							</li>
							<li>
								<a href="#">Байланыстар</a>
							</li>
							<li>
								<button class="btn rounded-pill px-4 py-2 btn-light me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
									<i class="fas fa-phone-alt me-2"></i>Хабарласу
								</button>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<div class="wrapper">
			<div class="container my-5">
				<div class="card-body bg-white border">
						<div class="row my-3">
							<div class="col-lg-6 col-5">
								<h3 class="fw-bold">Брондау күні мен уақытын таңдаңыз</h3>
							</div>
						</div>
					<form action="reserve-page.php" method="post">
						<div class="row my-4">
							<div class="col-lg-3 col-4">
								<div id="datepicker" class="input-group date m-0" data-date-format="yyyy-mm-dd">
									<input class="form-control" type="text" name="date" style="padding: 0.5rem 1rem; font-size: 1rem;" />
									<span class="input-group-addon">
										<i class="far fa-calendar-alt"></i>
									</span>
								</div>
							</div>
							<div class="col-lg-2 col-1">
								<input type="time" id="timepicker" class="time input-group-addon" name="time" style="padding: 0.5rem 1rem; font-size: 1rem;" value="<?php echo date("H:i", strtotime('+4 hours'))?>">
								
								<br>
							</div>
							<div class="col-lg-2">
								<button type="submit" class="btn mini-bg-success" style="padding: 0.5rem 1rem; font-size: 1rem;">Үстелді табу</button>
							</div>
						</div>
					</form>
				</div>
			<div class="card-body bg-white my-5 border">
				<div class="row my-3">
					<div class="col-lg-6 col-5">
						<h4 class="fw-bold">Үстелді таңдаңыз</h4>
					</div>
				</div>
				<hr>
				<div class="row mt-3">		
					<?php
						$count=0;
						if(!isset($_POST['date'])){
							$date=date("Y-m-d");
						}
						else {$date=$_POST['date'];}

						if(!isset($_POST['time'])){
							$time=date("H:i:s", strtotime('+4 hours'));
						}
						else {$time=$_POST['time'];}

                        while ($tab_card=mysqli_fetch_assoc($table_card)) {
						$count++;
                        $nameCount="Modal{$count}";
                        $nameCount2="SecondModal{$count}";

                        	echo '<a class="col-6 text-white table_card mb-4" href="#" data-bs-toggle="modal" data-bs-target="#'.$nameCount.'">
						<div class="card-body stol-card" style="background: url('.$tab_card["picture"].') no-repeat center center / cover;">
							<div class="card-inner d-flex justify-content-between w-100 align-items-center pe-5 box-shadow">
								<p class="fs-3 mb-0">Бос</p>
								<div class="bg-success rounded-circle" style="width: 15px;height: 15px;"></div>
							</div>
							<div class="stol-footer p-1 d-flex justify-content-between align-items-center w-100 pe-5">
								<div>
									<p class="mb-0 fs-6 text-white">'.$tab_card["place"].'</p>
									<p class="mb-0 fw-bold fs-3">№'.$tab_card["table_id"].'</p>
								</div>
								<div class="d-flex align-items-center">
									<i class="fas fa-users fs-1"></i>
									<p class="mb-0 ms-2 fs-3">'.$tab_card["count_seats"].'</p>
								</div>
							</div>
						</div>
					</a> 

					<div class="modal fade" id="'.$nameCount.'" tabindex="-1" aria-labelledby="LabelExample" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title fw-bold" id="mod_name">Үстел №'.$tab_card["table_id"].'</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body p-0">
						        <div class="w-100 card-body stol-card rounded-0" style="background: url('.$tab_card["picture"].') no-repeat center center / cover; height: 250px; ">
								<div class="card-inner d-flex justify-content-between w-100 align-items-center pe-5 box-shadow text-white">
									<p class="fs-5 mb-0">Бос</p>
									<div class="bg-success rounded-circle" style="width: 15px;height: 15px;"></div>
								</div>
								<div class="stol-footer p-1 d-flex justify-content-between align-items-center w-100 pe-5">
									<div class="d-flex align-items-center text-white">
										<i class="fas fa-users fs-5"></i>
										<p class="mb-0 ms-2 fs-5">'.$tab_card["count_seats"].'</p>
									</div>
								</div>
							</div>
							<p class="p-3 pb-0">Бронь жоқ</p><hr>
							<p class="px-3">Терезенің қасындағы ең керемет үстел</p>
							<div class="px-3 mb-4">
								<button type="submit" class="btn btn-dark d-flex justify-content-between align-items-center w-75" data-bs-toggle="modal" data-bs-target="#'.$nameCount2.'">
									<span>Брондау</span>     
									<i class="fas fa-long-arrow-alt-right"></i>
								</button>
							</div>
							
					      </div>
					    </div>
					  </div>
					</div>

					<div class="modal fade" id="'.$nameCount2.'" tabindex="0" aria-labelledby="ExampleLabel2" aria-hidden="true">
					  <div class="modal-dialog">
				<form action="add_reserve.php" method="post">
					    <div class="modal-content reserveModal">
					      <div class="modal-header">
					        <h5 class="modal-title fw-bold" id="ExampleLabel2">
					        	<i class="fas fa-long-arrow-alt-left"></i> 
					        	Үстел №<span class="fs-5">'.$tab_card["table_id"].'</span> брондау</h5>
					        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					      </div>
					      <div class="modal-body">
					      		<div class="btn input-group-reserve rounded-2 btn-outline-light w-100 my-3 d-none">
					      				<input type="tel" name="tab_id" value="'.$tab_card["table_id"].'" required>
					      		</div>
					      		<div class="btn input-group-reserve rounded-2 btn-outline-light w-100 my-3 d-none">
					      				<input type="tel" name="tab_place" value="'.$tab_card["place"].'" required>
					      		</div>
					      		<div class="btn input-group-reserve rounded-2 btn-outline-light w-100 my-3 d-none">
					      				<input type="tel" name="tab_date" value="'.$date.'" required>
					      		</div>
					      		<div class="btn input-group-reserve rounded-2 btn-outline-light d-flex justify-content-between align-items-center py-2">
					      			<label class="underTxt fw-bold">Брондау уақыты мен күні *</label>
						        	<span>Келу уақыты</span>
						        	<div class="text-center">
						        		<label style="font-size: 11px" for="firdtTime" name="tab_date">'.$date.'</label> <br>
						        		<input type="time" name="FirstTime" class="ps-2" value="'.$time.'" required>
						        	</div>
						        	
						        	<span>Қайту уақыты</span>
						        	<div class="text-center">
						        		<label style="font-size: 11px" for="firdtTime">'.$date.'</label> <br>
						        		<input type="time" name="LastTime" class="ps-2" required>
						        	</div>
						    	</div>

						    	<div class="div d-flex justify-content-between my-3">
						    		<div class="btn input-group-reserve rounded-2 btn-outline-light">
					      				<label class="underTxt fw-bold">Атыңыз *</label>
					      				<input type="text" name="customName" required>
					      			</div>
					      			<div class="btn input-group-reserve rounded-2 btn-outline-light w-50">
					      				<label class="underTxt fw-bold">Қонақтар саны *</label>
					      				<select class="form-select" aria-label="Default select example" name="customCount" required>
										  <option selected>Қонақтар саны</option>
										  <option value="1">1</option>
										  <option value="2">2</option>
										  <option value="3">3</option>
										  <option value="3">4</option>
										  <option value="3">5</option>
										  <option value="3">6</option>
										</select>
					      			</div>
						    	</div>

						    	<div class="btn input-group-reserve rounded-2 btn-outline-light w-100 my-3">
					      				<label class="underTxt fw-bold">Телефон *</label>
					      				<input type="tel" name="customTel" required>
					      		</div>
					      		 <div class="btn input-group-reserve rounded-2 btn-outline-light w-100">
					      			<label class="underTxt fw-bold">Email *</label>
					      			<input type="email" name="customEmail" required>
					      		</div>

					      		<div class="btn input-group-reserve rounded-2 btn-outline-light w-100 text-start my-3">
					      			<input type="text" placeholder="Қосымша комментарии" name="comm">
					      		</div>

					      		<div class="modal-footer">
					      			<button type="submit" class="btn btn-danger w-100 mb-3" data-bs-toggle="modal" data-bs-target="#message-modal">Брондау</button>
					      		</div>
						    
					      </div>
					    </div>
					      	</form>
					  </div>
					</div>';
                        }
                    ?>
					</div>
				</div>
			</div>
		</div>

    <footer class="text-white pb-5 mt-5" style="background-color: #2b2b2b;">
		<div class="container" id="section-5">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-6 block1">
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

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
	<script src="assets/js/all.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>
