<?php
session_start();
    require_once 'vender/connect.php';

    // $request=mysqli_query($connect,"SELECT * FROM `requests`");
    // $tables=mysqli_query($connect,"SELECT * FROM `tables`");
    $req_info=mysqli_query($connect,"SELECT * FROM `requests` INNER JOIN `tables` ON `requests`.`table_id` = `tables`.`table_id`");
    if(isset($_POST['req_date'])){
        $date=$_POST['req_date'];
    }
    else {
        $date=date("Y-m-d");
    }
    if (!$_SESSION['user']) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Заявки</title>
    <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../assets/fonts/fontawesome5-overrides.min.css">
    <script src="script.js?<?echo time();?>"></script>
    <link rel="stylesheet" type="text/css" href="../assets/style/style.css?<?echo time();?>">
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
                    <li class="nav-item"><a class="nav-link active" href="applications.php"><i class="fas fa-tasks"></i><span>Өтінімдер</span></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="login.php"><i class="far fa-user-circle"></i><span>Войти</span></a></li> -->
                    <li class="nav-item"><a class="nav-link" href="customs.php"><i class="fas fa-users"></i><span>Қонақтар базасы</span></a></li>
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
                            <h3 class="text-dark mb-4 fw-bold">Өтінімдер</h3>
                            <div class="col-lg-3">
                                <!-- <form class="form-inline d-none d-sm-inline-block navbar-search w-100 border">
                                    <div class="input-group"><input class="bg-white form-control border-0 small" type="text" placeholder="Қонақтың атын немесе нөмірін енгізіңіз">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="submit"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form> -->
                                <form class="form-inline d-none d-sm-inline-block navbar-search w-100 border" method="post" action="">
                                    <div class="input-group"><input class="bg-white form-control border-0 small" type="date" name="req_date" value="<?php echo date("Y-m-d")?>">
                                        <div class="input-group-append"><button class="btn btn-primary py-0" type="submit"><i class="fas fa-search"></i></button></div>
                                    </div>
                                </form>
                            </div>
                                <div class="col-lg-3 col-4">
                                    <!-- <div id="datepicker" class="input-group date" data-date-format="mm-dd-yyyy">
                                            <input class="form-control" type="text" readonly />
                                            <span class="input-group-addon">
                                                <i class="far fa-calendar-alt"></i>
                                            </span>
                                        </div> -->
                                        <!-- <input class="form-control"  type="date"> -->
                                </div>
                        </div>

                        <div class="row my-5 ps-3" style="color: #000;">
                            <button class="border-0 col-2 mini-bg-success rounded-3 p-3 me-3">
                                    Ашық: 6
                            </button>
                            <button class="border-0 col-2 mini-bg-wait rounded-3 p-3 me-3">
                                    Күтудеміз: 3
                            </button>
                            <button class="border-0 col-2 mini-bg-close rounded-3 p-3 me-3">
                                    Жабылған: 2
                            </button>
                            <button class="border-0 col-2 mini-bg-new rounded-3 p-3 me-3">
                                    Жаңа: 3
                            </button>
                        </div>

                        <div class="row">
                            <?php
                            $count=0;

                                while ($req=mysqli_fetch_assoc($req_info)){
                                    $count++;
                                    $nameCount="Modal{$count}";
                                    $nameCount2="SecondModal{$count}";
                                    echo ' <div class="col-6 text-dark mb-4">
                                        <button class="card-body card-bg-success w-100 border-0 text-start" style="border-radius: 1rem" data-bs-toggle="modal" data-bs-target="#'.$nameCount.'">
                                            <div class="d-flex justify-content-between">
                                                <div class="align-items-center pe-5 box-shadow">
                                                    <h5 class="fw-bold">Стол №'.$req["table_id"].'</h5>
                                                    <p class="text-pink mb-0">'.$req["place"].'</p>
                                                </div>
                                                <div class="mini-bg-success p-3 rounded-3 d-flex flex-column" style="width: 30%; ">
                                                    <small class="text-secondary">Үстел</small>
                                                    <small style="color: #000;">Ашық</small>
                                                </div>
                                            </div>
                                            <div class="pt-2">
                                                <p class="mb-0">'.$req["name"].' <span class="fw-bold">'.$req["count"].' чел</span></p>
                                                <a href="#" class="text-dark text-decoration-underline">'.$req["telephone"].'</a>
                                            </div><p class="mb-0 pt-2 fs-6"><i class="far fa-clock"></i> c  <span class="fw-bold">'.$req["firstTime"].'</span> до  <span class="fw-bold">'.$req["lastTime"].'</span></p>
                                        </button>
                                    </div> 
                                    <!-- Modal -->
<div class="modal fade" id="'.$nameCount.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="d-flex align-items-center">
            <h5 class="modal-title fw-bold" id="exampleModalLabel">Өтінім №'.$req["id"].'</h5>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="w-100 card-body stol-card rounded-0" style="background: url(../'.$req["picture"].') no-repeat center center / cover; height: 250px; ">
                                <div class="stol-footer p-1 d-flex justify-content-between align-items-center w-100 pe-5">
                                    <div class="d-flex align-items-center text-white">
                                        <i class="fas fa-users fs-5"></i>
                                        <p class="mb-0 ms-2 fs-5">'.$req["count"].'</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-dark mb-4">
                                        <div class="card-body card-bg-success w-100 border-0 text-start" style="border-radius: 1rem" data-bs-toggle="modal" data-bs-target="#'.$nameCount.'">
                                            <div class="d-flex justify-content-between">
                                                <div class="align-items-center pe-5 box-shadow">
                                                    <h5 class="fw-bold">Стол №'.$req["table_id"].'</h5>
                                                    <p class="text-pink mb-0">'.$req["place"].'</p>
                                                </div>

                                                <div class="mini-bg-success p-3 rounded-3 d-flex flex-column" style="width: 30%; ">
                                                    <small class="text-secondary">Үстел</small>
                                                    <small style="color: #000;">Ашық</small>
                                                </div>
                                            </div>
                                                <div class="pt-2">
                                                    <p class="mb-0">'.$req["name"].' <span class="fw-bold">'.$req["count"].' чел</span></p>
                                                    <a href="#" class="text-dark text-decoration-underline">'.$req["telephone"].'</a>
                                                </div>
                                                <div>
                                                <p class="mb-0 pt-2 fs-6"><i class="far fa-clock"></i> c  <span class="fw-bold">'.$req["firstTime"].'</span> до  <span class="fw-bold">'.$req["lastTime"].'</span></p>
                                                </div>                                   
                                                </div>
                                        </div
                                    </div>
                            </div>
      </div>
      <div class="modal-footer">
        <div class="d-flex justify-content-between w-100">
        <button type="button" class="btn btn-dark" style="width:48%;height:45px;" data-bs-toggle="modal" data-bs-target="#'.$nameCount2.'">Өзгерту</button>
        <button type="button" class="btn btn-dark" style="width:48%;height:45px;">Жою</button>
        </div>
        <div class="d-flex justify-content-between w-100">
        <button type="button" class="btn btn-dark" style="width:48%;height:45px;">Хабарласу</button>
        <button type="button" class="btn btn-dark" style="width:48%;height:45px;">Жабу</button>
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
                                Үстел №<span class="fs-5">'.$req["table_id"].'</span> брондау</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                                <div class="btn input-group-reserve rounded-2 btn-outline-light w-100 my-3 d-none">
                                        <input type="tel" name="tab_id" value="'.$req["table_id"].'" required>
                                </div>
                                <div class="btn input-group-reserve rounded-2 btn-outline-light w-100 my-3 d-none">
                                        <input type="tel" name="tab_place" value="'.$req["place"].'" required>
                                </div>
                                <div class="btn input-group-reserve rounded-2 btn-outline-light w-100 my-3 d-none">
                                        <input type="tel" name="tab_date" value="'.$req["telephone"].'" required>
                                </div>
                                <div class="btn input-group-reserve rounded-2 btn-outline-light w-100 my-3">
                                        <label class="underTxt fw-bold">Брондау датасы *</label>
                                        <input type="date" name="date" value="'.$req["date"].'" required>
                                </div>
                                <div class="btn input-group-reserve rounded-2 btn-outline-light d-flex justify-content-between align-items-center py-2">
                                    <label class="underTxt fw-bold">Брондау уақыты *</label>
                                    <span>Келу уақыты</span>
                                    <div class="text-center">
                                        <input type="time" name="FirstTime" class="ps-2" value="'.$req["firstTime"].'" required>
                                    </div>
                                    
                                    <span>Қайту уақыты</span>
                                    <div class="text-center">
                                        <input type="time" name="LastTime" class="ps-2" value="'.$req["lastTime"].'" required>
                                    </div>
                                </div>
                                <div class="div d-flex justify-content-between my-3">
                                    <div class="btn input-group-reserve rounded-2 btn-outline-light">
                                        <label class="underTxt fw-bold">Аты-жөні *</label>
                                        <input type="text" name="customName" value="'.$req["name"].'" required>
                                    </div>
                                    <div class="btn input-group-reserve rounded-2 btn-outline-light w-50">
                                        <label class="underTxt fw-bold">Қонақтар саны *</label>
                                        <select class="form-select" aria-label="Default select example" name="customCount" required value="'.$req["count"].'">
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
                                        <input type="tel" name="customTel" value="'.$req["telephone"].'" required>
                                </div>
                                 <div class="btn input-group-reserve rounded-2 btn-outline-light w-100">
                                    <label class="underTxt fw-bold">Email *</label>
                                    <input type="email" name="customEmail" value="'.$req["email"].'" required>
                                </div>

                                <div class="btn input-group-reserve rounded-2 btn-outline-light w-100 text-start my-3">
                                    <input type="text" placeholder="Қосымша комментарии" name="comm">
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger w-100 mb-3" data-bs-toggle="modal" data-bs-target="#message-modal">Өзгерту</button>
                                </div>
                            
                          </div>
                        </div>
                            </form>
                      </div>
                    </div>';
                                }
                                                
                            ?>
                            <!-- <div class="col-6 text-dark">
                                <div class="card-body card-bg-success" style="border-radius: 1rem">
                                    <div class="d-flex justify-content-between">
                                        <div class="align-items-center pe-5 box-shadow">
                                            <h5 class="fw-bold">Стол №12</h5>
                                            <p class="text-pink mb-0">Основной зал</p>
                                           

                                        </div>
                                        <div class="mini-bg-success p-3 rounded-3 d-flex flex-column" style="width: 30%; ">
                                            <small class="text-secondary">СТОЛ</small>
                                            <small style="color: #000;">Открыто</small>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <p class="mb-0">Айгерим <span class="fw-bold">4 чел.</span></p>
                                        <a href="#" class="text-dark text-decoration-underline">+7 700 000 0000</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 text-dark">
                                <div class="card-body card-bg-wait" style="border-radius: 1rem">
                                    <div class="d-flex justify-content-between">
                                        <div class="align-items-center pe-5 box-shadow">
                                            <h5 class="fw-bold">Стол №12</h5>
                                            <p class="text-pink mb-0">Основной зал</p>
                                           

                                        </div>
                                        <div class="mini-bg-wait p-3 rounded-3 d-flex flex-column" style="width: 30%; ">
                                            <small class="text-secondary">СТОЛ</small>
                                            <small style="color: #000;">Открыто</small>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <p class="mb-0">Айгерим <span class="fw-bold">4 чел.</span></p>
                                        <a href="#" class="text-dark text-decoration-underline">+7 700 000 0000</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-6 text-dark">
                                <div class="card-body card-bg-close" style="border-radius: 1rem">
                                    <div class="d-flex justify-content-between">
                                        <div class="align-items-center pe-5 box-shadow">
                                            <h5 class="fw-bold">Стол №12</h5>
                                            <p class="text-pink mb-0">Основной зал</p>
                                           

                                        </div>
                                        <div class="mini-bg-close p-3 rounded-3 d-flex flex-column" style="width: 30%; ">
                                            <small class="text-secondary">СТОЛ</small>
                                            <small style="color: #000;">Открыто</small>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <p class="mb-0">Айгерим <span class="fw-bold">4 чел.</span></p>
                                        <a href="#" class="text-dark text-decoration-underline">+7 700 000 0000</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-6 text-dark">
                                <div class="card-body bg-white" style="border-radius: 1rem">
                                    <div class="d-flex justify-content-between">
                                        <div class="align-items-center pe-5 box-shadow">
                                            <h5 class="fw-bold">Стол №12</h5>
                                            <p class="text-pink mb-0">Основной зал</p>
                                           

                                        </div>
                                        <div class="mini-bg-new p-3 rounded-3 d-flex flex-column" style="width: 30%; ">
                                            <small class="text-secondary">СТОЛ</small>
                                            <small style="color: #000;">Открыто</small>
                                        </div>
                                    </div>
                                    <div class="pt-2">
                                        <p class="mb-0">Айгерим <span class="fw-bold">4 чел.</span></p>
                                        <a href="#" class="text-dark text-decoration-underline">+7 700 000 0000</a>
                                    </div>
                                </div>
                            </div> -->
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/chart.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>