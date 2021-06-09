<?php 
	require_once 'admin/vender/connect.php';
	$tabId=$_POST['tab_id'];
	$tabPlace=$_POST['tab_place'];
	$tabName=$_POST['customName'];
	$tabTel=$_POST['customTel'];
	$tabCount=$_POST['customCount'];
	$tabDate=$_POST['tab_date'];
	$tabEmail=$_POST['customEmail'];
	$tabFirstTime=$_POST['FirstTime'];
	$tabLastTime=$_POST['LastTime'];
	$custom=mysqli_query($connect,"SELECT * FROM `customers` WHERE '$tabTel'=`telephone`")
	$add_reserve="INSERT INTO `requests` VALUES(NULL, '$tabId','$tabPlace','$tabName','$tabTel', '$tabCount', '$tabDate', '$tabFirstTime', '$tabLastTime','$tabEmail')";
	$add_custom="INSERT INTO `customers` VALUES(NULL, '$tabName','$tabEmail','$tabTel')";
	$result=mysqli_query($connect,$add_reserve);
	$result2=mysqli_query($connect,$add_custom);
	if($result && $result2){
echo '<!DOCTYPE html>
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
<body>
  <div class="modal-dialog">
    <div class="modal-content" style="background: #fff">
      <div class="modal-header ">
        <div class="m-auto text-center">
        <h5 class="modal-title" id="exampleModalLabel">Спасибо, '.$tabName.'</h5>
        <h5 class="modal-title" id="exampleModalLabel">Столик №'.$tabId.' забронирован</h5>
        </div>
      </div>
      <div class="modal-body mx-5">
      <table>
		  <tr>
		    <td class="text-secondary">Адрес</td>
		    <td class="ps-5">Ресторан "RESTAURANT", г.Алматы, ул.Аль-фараби 71/2</td>
		  </tr>
		  <tr>
		    <td class="text-secondary">Дата</td>
		    <td class="ps-5">'.$tabDate.'</td>
		  </tr>
		  <tr>
		    <td class="text-secondary">Уақыт</td>
		    <td class="ps-5">с '.$tabFirstTime.' до '.$tabLastTime.'</td>
		  </tr>
		  <tr>
		    <td class="text-secondary">Үстел №</td>
		    <td class="ps-5">'.$tabId.'</td>
		  </tr>
		  <tr>
		    <td class="text-secondary">Зал</td>
		    <td class="ps-5">'.$tabPlace.'</td>
		  </tr>
		  <tr>
		    <td class="text-secondary">Аты</td>
		    <td class="ps-5">'.$tabName.'</td>
		  </tr>
		  <tr>
		    <td class="text-secondary">Қонақ саны</td>
		    <td class="ps-5">'.$tabCount.'</td>
		  </tr>
		  <tr>
		    <td class="text-secondary">Телефон</td>
		    <td class="ps-5">'.$tabTel.'</td>
		  </tr>
		</table>
      </div>
      <div class="modal-footer">
        <a href="index.php" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Шығу</a>
      </div>
    </div>
  </div>
	

	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flatpickr/4.2.3/flatpickr.js"></script>
	<script src="assets/js/all.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>
';}
	else {
		echo "Ошибка";
	}
?>