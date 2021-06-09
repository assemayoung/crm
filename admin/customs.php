<?php
    session_start();
    require_once 'vender/connect.php';

    $custom=mysqli_query($connect,"SELECT * FROM `customers` INNER JOIN `requests` ON `customers`.`telephone` = `requests`.`telephone`");
    if (!$_SESSION['user']) {
    header('Location: login.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Клиенттер базасы</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/style/style.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0 my-2"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon"><i class="fas fa-utensils"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Restaurant</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="nav navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link" href="restaurants.php"><i class="fas fa-store-alt"></i><span>Мейрамханалар</span></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Сводка</span></a></li> -->
                    <li class="nav-item"><a class="nav-link" href="profile.php"><i class="fas fa-user"></i><span>Профиль</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="table.php"><i class="fas fa-table"></i><span>Қызметкерлер</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="applications.php"><i class="fas fa-tasks"></i><span>Өтінімдер</span></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="login.php"><i class="far fa-user-circle"></i><span>Войти</span></a></li> -->
                    <li class="nav-item"><a class="nav-link active" href="customs.php"><i class="fas fa-users"></i><span>Қонақтар базасы</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="vender/logout.php"><i class="fas fa-sign-out-alt"></i><span>Шығу</span></a></li>
                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Іздеу">
                                <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                            </div>
                        </form>
                        <ul class="nav navbar-nav flex-nowrap ml-auto">
                            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto navbar-search w-100">
                                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Іздеу">
                                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 12, 2019</span>
                                                <p>A new monthly report is ready to download!</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 7, 2019</span>
                                                <p>$290.29 has been deposited into your account!</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="mr-3">
                                                <div class="bg-danger icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                            </div>
                                            <div><span class="small text-gray-500">December 2, 2019</span>
                                                <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                            </div>
                                        </a><a href="notification.php" class="text-center dropdown-item small text-gray-500">Show All Alerts</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown no-arrow mx-1">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in">
                                        <h6 class="dropdown-header">alerts center</h6><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../assets/img/avatars/avatar4.jpeg" alt="">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                                <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../assets/img/avatars/avatar2.jpeg" alt="">
                                                <div class="status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                                <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../assets/img/avatars/avatar3.jpeg" alt="">
                                                <div class="bg-danger status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                                <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                            </div>
                                        </a><a class="d-flex align-items-center dropdown-item" href="#">
                                            <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="../assets/img/avatars/avatar5.jpeg" alt="">
                                                <div class="bg-success status-indicator"></div>
                                            </div>
                                            <div class="font-weight-bold">
                                                <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                                <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                            </div>
                                        </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </div>
                                <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                            </li>
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="d-none d-lg-inline mr-2 text-gray-600 small"><?php echo $_SESSION['user']['FirstName'].' '.$_SESSION['user']['LastName'];?></span><img class="border rounded-circle img-profile" src="<?php echo $_SESSION['user']['avatar'];?>" alt=""></a>
                                    <div class="dropdown-menu shadow dropdown-menu-right animated--grow-in"><a class="dropdown-item" href="#"><i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Profile</a><a class="dropdown-item" href="#"><i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Settings</a><a class="dropdown-item" href="#"><i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Activity log</a>
                                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                        <div class="row my-4">
                            <h3 class="text-dark mb-4 fw-bold">Қонақтар базасы</h3>
                            <!-- <div class="col-lg-6">
                                <form class="form-inline d-none d-sm-inline-block navbar-search w-100 border">
                                    <div class="input-group"><input class="bg-white form-control border-0 small" type="text" placeholder="Поиск по имени, телефону или e-mail">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-3">
                                
                                <div class="dropdown">
                                  <button class="btn border border-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-filter me-2"></i>Все статусы
                                  </button>
                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                  </ul>
                                </div>
                            </div>   -->
                        </div>

                        <div class="card">
                            <div class="card-body text-dark">
                                <div class="row">
                                    <div class="col">
                                        <span class="fw-bold">Қонақ саны</span><br>
                                        <span class="fw-bold fs-2">
                                            <?php 
                                                echo mysqli_num_rows($custom);
                                            ?>
                                        </span>
                                    </div>
                                    <div class="col text-center border-start">
                                        <small class="bg-success text-white px-2 rounded-3">Жаңа</small><br>
                                        <span class="fw-bold fs-2">256</span>
                                        <small class="text-pink">26%</small>
                                    </div>
                                    <div class="col text-center border-start">
                                        <small class="bg-primary text-white px-2 rounded-3">Белсенді</small><br>
                                        <span class="fw-bold fs-2">329</span>
                                        <small class="text-pink">38%</small>
                                    </div>
                                    <div class="col text-center border-start">
                                        <small class="bg-warning text-white px-2 rounded-3">Тұрақты</small><br>
                                        <span class="fw-bold fs-2">137</span>
                                        <small class="text-pink">19%</small>
                                    </div>
                                    <!-- <div class="col text-center border-start">
                                        <small class="bg-info text-white px-2 rounded-3">Салқындаған</small><br>
                                        <span class="fw-bold fs-2">85</span>
                                        <small class="text-pink">13%</small>
                                    </div>
                                    <div class="col text-center border-start">
                                        <small class="bg-secondary text-white px-2 rounded-3">Жоғалған</small><br>
                                        <span class="fw-bold fs-2">26</span>
                                        <small class="text-pink">9%</small>
                                    </div> -->
                                    <div class="col text-center border-start">
                                        <small class="bg-dark text-white px-2 rounded-3">ҚТ-дегі</small><br>
                                        <span class="fw-bold fs-2">7</span>
                                        <small class="text-pink">2%</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                                    <table class="table my-0" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Аты / статус</th>
                                                <th>Контактілер</th>
                                                <th>Соңғы өтінім</th>
                                                <th>Бронь саны</th>
                                                <th>Келмеген</th>
                                                <th>Орташа келу уақыты</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                                while ($cus=mysqli_fetch_assoc($custom)) {

                                                   echo '<tr>
                                                            <td>
                                                                <p class="fw-bold text-pink mb-0">'.$cus["name"].'</p>
                                                                <small class="bg-success text-white px-2 rounded-3">Жаңа</small>
                                                            </td>
                                                            <td>
                                                                <p class="fw-bold mb-0">'.$cus["telephone"].'</p>
                                                                <small class="text-secondary">'.$cus["email"].'</small>
                                                            </td>
                                                            <td>
                                                                <p class="fw-bold mb-0">'.$cus["date"].'</p>
                                                            </td>
                                                   </tr>';  
                                                }
                                                
                                                ?>
                                            <!-- <tr>
                                                <td>
                                                    <p class="fw-bold text-pink mb-0">Сауле</p>
                                                    <small class="bg-success text-white px-2 rounded-3">Новый</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">+7 7771 522 12 41</p>
                                                    <small class="text-secondary">saule@gmail.com</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">01.09.2019</p>
                                                    <small class="text-secondary">12:30 - 19:00</small>
                                                </td>
                                                <td>12</td>
                                                <td>2</td>
                                                <td>1 ч 20 мин</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-bold text-pink mb-0">Талғат</p>
                                                    <small class="bg-primary text-white px-2 rounded-3">Активных</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">+7 7775 445 44 50</p>
                                                    <small class="text-secondary">tbt10@gmail.com</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">01.09.2019</p>
                                                    <small class="text-secondary">18:30 - 20:00</small>
                                                </td>
                                                <td>5</td>
                                                <td>0</td>
                                                <td>2 ч 30 мин</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-bold text-pink mb-0">Айжан</p>
                                                    <small class="bg-warning text-white px-2 rounded-3">Постоянных</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">+7 7775 445 44 50</p>
                                                    <small class="text-secondary">saule@gmail.com</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">01.09.2019</p>
                                                    <small class="text-secondary">12:30 - 19:00</small>
                                                </td>
                                                <td>12</td>
                                                <td>2</td>
                                                <td>1 ч 20 мин</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-bold text-pink mb-0">Сауле</p>
                                                    <small class="bg-secondary text-white px-2 rounded-3">Потерянных</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">+7 7775 445 44 50</p>
                                                    <small class="text-secondary">saule@gmail.com</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">01.09.2019</p>
                                                    <small class="text-secondary">12:30 - 19:00</small>
                                                </td>
                                                <td>12</td>
                                                <td>2</td>
                                                <td>1 ч 20 мин</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-bold text-pink mb-0">Сауле</p>
                                                    <small class="bg-info text-white px-2 rounded-3">Остывших</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">+7 7775 445 44 50</p>
                                                    <small class="text-secondary">saule@gmail.com</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">01.09.2019</p>
                                                    <small class="text-secondary">12:30 - 19:00</small>
                                                </td>
                                                <td>12</td>
                                                <td>2</td>
                                                <td>1 ч 20 мин</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <p class="fw-bold text-pink mb-0">Сауле</p>
                                                    <small class="bg-dark text-white px-2 rounded-3">в ЧС</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">+7 7775 445 44 50</p>
                                                    <small class="text-secondary">saule@gmail.com</small>
                                                </td>
                                                <td>
                                                    <p class="fw-bold mb-0">01.09.2019</p>
                                                    <small class="text-secondary">12:30 - 19:00</small>
                                                </td>
                                                <td>12</td>
                                                <td>2</td>
                                                <td>1 ч 20 мин</td>
                                            </tr> -->
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <td><strong>Имя / статус</strong></td>
                                                <td><strong>Контакты</strong></td>
                                                <td><strong>Последняя заявка</strong></td>
                                                <td><strong>Броней</strong></td>
                                                <td><strong>Не пришел</strong></td>
                                                <td><strong>Ср.время посещения</strong></td>
                                            </tr>
                                        </tfoot> -->
                                    </table>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Brand 2021</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>