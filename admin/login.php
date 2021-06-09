<?php
// session_start();
// if ($_SESSION['user']) {
//     header('Location: profile.php');
// }
session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
</head>
<body class="bg-gradient-primary">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Кіру</h4>
                                    </div>
                                    <form class="user" method ="post" action="vender/sign_in.php">
                                        <div class="form-group">
                                            <input class="form-control" type="text" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="login енгізіңіз" name="login_emp" required>
                                        </div>
                                        <div class="form-group mb-4">
                                            <input class="form-control" type="password" id="exampleInputPassword" placeholder="Пароль" name="password_emp" required>
                                        </div>
                                        <button class="btn btn-primary btn-block text-white btn-user" type="submit" name="log_in">Кіру</button>
                                    </form>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>