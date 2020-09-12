<?php
require_once('sql.php');
if(empty($_SESSION['user'])) plo("login.php");
$mainzone=(empty($_GET['p']))?"dashbords":$_GET['p'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="css/fontawesome.css" />
    <!--animate  -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- Chart.css -->
    <link rel="stylesheet" href="css/Chart.min.css">
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">

    <title>資產管理後台系統</title>
    <style>
        /* --------------------blank start--------------------------------- */
        body {
            font-family: 'Noto Sans TC', sans-serif;
        }

        .object-fit-cover {
            object-fit: cover;
        }

        .object-fit-contain {
            object-fit: contain;
        }

        .object-position-center {
            object-position: center;
        }

        .bg-gainsboro {
            background: gainsboro;
        }

        .bg-img-sea {
            background-image: url(img/sea.jpg);
            filter: grayscale(90%);
            opacity: 0.8;
        }

        .top-bar {
            width: 100%;
            height: 100px;
            overflow: hidden;
        }

        .logo-brand {
            background: #12375B;
            width: 250px;
            height: 100px;
        }

        .sidebar {
            overflow-y: auto;
            overflow-x: hidden;
            width: 80px;
            transition: width 0.2s ease-in-out 0s;
            background: #1F4F6E;
        }

        .sidebar-items {
            transition: background .1s ease-in-out;
            position: relative;
        }

        .sidebar-items:target::before {
            content: "";
            position: absolute;
            width: 14px;
            height: 14px;
            top: 49px;
            left: 5px;
            transform: rotate(45deg);
            background: rgba(45, 52, 128, .5);
        }

        .sidebar-items:hover {
            background: rgba(45, 52, 128, .3);
        }

        .sidebar-items:target {
            background: rgba(45, 52, 128, .5);
        }

        .sidebar-items:target .sidebar-dropdown-items {
            max-height: 1500px;
            background: rgba(0, 0, 0, .5);
        }

        /* .sidebar-dropdown-menu-toggle {
      transition: background .1s ease-in-out;
    } */

        .sidebar-dropdown-items {
            max-height: 0px;
            padding: 0;
            margin: 0;
            overflow-y: hidden;
            transition: max-height 0.2s ease-in-out 0s;
        }

        .sidebar-dropdown-items a {
            display: inline-block;
            position: relative;
        }

        .sidebar-dropdown-items a::before {
            content: "";
            position: absolute;
            width: 6px;
            height: 80%;
            background: #f8f9fa;
            top: 10%;
            left: 0px;
            transition: 0.3s;
            opacity: 0;
        }

        .sidebar-dropdown-items a:hover::before {
            opacity: 1;
        }

        /* .dropdown-open {
      background: rgba(0, 0, 0, .5);
    }

    .dropdown-open>.sidebar-dropdown-items {
      max-height: 1500px;
    } */


        .sidebar p {
            display: none;
        }

        .sidebar i,
        .sidebar p {
            color: #f8f9fa;
            font-weight: 900;
            display: inline;

        }


        .sidebar-items-icon {
            font-size: 1.5rem;
            width: 80px;
            display: inline-table;
            text-align: center;
            vertical-align: middle;
            padding: 10px;
        }

        .sidebar ul li ul li .sidebar-items-icon {
            font-size: 1rem;
        }

        .main {
            position: relative;
            left: 80px;
            float: left;
            width: calc(100% - 80px);
        }



        /* .sidebar-menu-button {
      width: 50px;
      height: 100%;
      background: #1F4F6E;
      cursor: pointer;
    } */

        .Breadcrumb-bar {
            width: 100%;
            height: 100px;
        }

        #user-menu-button {
            cursor: pointer;
        }

        #user-menu-button:hover {
            transform: scale(1.1);
        }
        /* #user-menu-button:target .fa-chevron-circle-down{
            transform: rotate(180deg);
            transition: transform 0.2s ease-in 0s;
        } */

        .user-dropdown-menu {
            font-size: 1rem;
            position: absolute;
            z-index: 1000;
            top: 80px;
            display: none;
            min-width: 200px;
            margin: .125rem 1rem 0;
            padding: .5rem 0;
            list-style: none;
            text-align: left;
            color: #525f7f;
            border: 0 solid rgba(0, 0, 0, .15);
            border-radius: .4375rem;
            background-color: #fff;
            background-clip: padding-box;
            box-shadow: 0 50px 100px rgba(50, 50, 93, .1), 0 15px 35px rgba(50, 50, 93, .15), 0 5px 15px rgba(0, 0, 0, .1);
        }

        .user-img {
            height: 32px;
            width: 32px;
            border-radius: 50%;
            display: inline-block;
            margin: -1px;
            overflow: hidden;
            position: relative;
            border: 3px solid #6458C2;
        }

        .user-img.aa {
            width: 70px;
            height: 70px;
            display: block;
            margin: 10px auto;
        }

        /* .user-dropdown-menu.show {
    pointer-events: auto;
    display: block;
    opacity: 1;
} */

        .transform-rotate-180deg {
            transform: rotate(180deg);
            transition: transform 0.2s ease-in 0s;
        }

        .transform-rotate-0deg {
            transform: rotate(0deg);
            transition: transform 0.2s ease-in 0s;
        }



        /* --------------------blank end--------------------------------- */
    </style>

</head>

<body class="mx-0 my-0 bg-gainsboro vw-100 vh-100" style="overflow-x: hidden;">
    <!-- ------------------------------blank start--------------------------- -->
    <div class="container-fluid vh-100 vw-100 py-0 px-0 mx-0">
        <div class="top-bar d-flex align-items-center bg-light">
<div class="ml-auto d-flex align-items-center">
    <p class="rounded-circle bg-dark text-light p-1">Hi..</p>

            <div id="user-menu-button" class=" ml-auto mr-3 d-flex align-items-center " >

                <span class="user-img mx-2">
                    <img class="w-100 h-100  rounded-circle  object-fit-cover object-position-center"
                        src="./img/sea.jpg" alt="">
                </span>
                <p class="mb-0"><?=$_SESSION['user']?></p>
                <span class="mx-3"><i class="fas fa-chevron-circle-down"></i>

    </div>
            </div>
            <!--  -->
            <div class="user-dropdown-menu dropdown-menu-right text-left">
                <div class="dropdown-header noti-title bg-primary">
                    <div class="d-block text-center">
                        <h5 class="text-overflow m-0 " style="color:#f8f9fa">Account</h5>
                    </div>
                </div>
                <div class="user-img aa">
                    <img class="w-100 h-100 rounded-circle object-fit-cover object-position-center"
                        src="./img/eagle_logo.png" alt="">
                </div>
                <div class="d-block text-center">
                    <a class="bg-bg-secondary" style="color:#007bff;"><?=$_SESSION['user']?></a>
                </div>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                    <span class="col-1 d-inline-flex"><i class="far fa-address-card"></i></span>
                    <span class="col-auto text-left d-inline-block">profile</span>

                </a>
                <a href="#!" class="dropdown-item">
                    <span class="col-1 d-inline-flex"><i class="fas fa-user-cog"></i></span>
                    <span class="col-auto text-left d-inline-block">Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                    <span class="col-1 d-inline-flex"><i class="fas fa-envelope-square"></i></span>
                    <span class="col-auto text-left d-inline-block">Messagee</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="#!" class="dropdown-item">
                    <span class="col-1 d-inline-flex"><i class="fas fa-sign-out-alt"></i></span>
                    <span class="col-auto text-left d-inline-block" onclick="document.cookie='user=';location.replace('api.php?do=logout')">Logout</span>
                </a>
            </div>
            <!-- user end -->
        </div>



        <!-- 上面橫槓 end -->

        <!-- sidebar start -->

        <!-- <div class=" w-25 h-100 ">
      <div class="w-50   h-100">
        <div class=" h-100 w-100 mx-0  "> -->


        <div class="sidebar fixed-top  flex-column  align-items-center position-fixed vh-100">
            <div class="logo-brand d-flex justify-content-start align-items-center ">
                <a class="navbar-brand" href="#">
                    <div class="d-inline-block m-2">
                        <img src="./img/eagle_logo.svg" height="60px" alt=""><p class="ml-4">資產管理</p>
                    </div>
                </a>
            </div>
            <ul class="nav vw-100">
                 <li class="nav-item vw-100 sidebar-items">
                    <a class="" href="?">
                        <span class="sidebar-items-icon"><i class="fas fa-tachometer-alt"></i></span>
                        <p>儀錶板</p>
                    </a>
                  </li>
                <li class="nav-item vw-100 sidebar-items">
                    <a class="" href="#">
                        <span class="sidebar-items-icon"><i class="fas fa-newspaper"></i></span>
                        <p>公告消息</p>
                    </a>
                </li>

                <li class="nav-item vw-100 sidebar-items">
                    <a class="" href="?p=house">	
                        <span class="sidebar-items-icon"><i class="fas fa-building"></i></span>
                        <p>物件管理</p>
                    </a>
                </li>
                <li class="nav-item vw-100 sidebar-items">
                    <a class="" href="?p=house">	
                        <span class="sidebar-items-icon"><i class="fas fa-pager"></i></span>
                        <p>前台網頁管理</p>
                    </a>
                </li>
                <li class="nav-item vw-100 sidebar-items" id="RM">
                    <a class=" " href="#RM">
                        <span class="sidebar-items-icon"><i class="fas fa-clipboard"></i></span>
                        <p>報表管理<i class="fas fa-angle-left"></i></p>

                    </a>
                    <ul class="px-0 sidebar-dropdown-items flex-row w-100">

                        <li class="nav-item ">
                            <a class="" href="#">
                                <span class="sidebar-items-icon"><i class="fab fa-searchengin"></i> </span>
                                <p>報表查看</p>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="" href="#">
                                <span class="sidebar-items-icon"><i class="fas fa-pen-alt"></i></span>
                                <p>報表編輯</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item  vw-100 sidebar-items" id="PM">
                    <a class="" href="#PM">
                        <span class="sidebar-items-icon"><i class="fas fa-address-book"></i></span>
                        <p>人員管理系統<i class="fas fa-angle-left"></i></p>

                    </a>
                    <ul class="px-0 sidebar-dropdown-items flex-row">

                        <li class="nav-item">
                            <a class="" href="index.html">
                                <span class="sidebar-items-icon"> <i class="fas fa-sitemap"></i></span>
                                <p>組織管理</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="" href="index.html">
                                <span class="sidebar-items-icon"> <i class="fas fa-sitemap"></i></span>
                                <p>權限管理</p>
                            </a>
                        </li>

                    </ul>
                </li>


            </ul>
        </div>

        <!-- </div>
      </div>
    </div> -->
        <!-- sidebar end -->

        <!-- ------------------------------blank end--------------------------- -->
        <!-- 內容content -->
        <div class="main">

        <?php include_once($mainzone.".php")?>

 
        </div>

    </div>
    </div>
    <!-- jquery 載入 -->
    <script src="./js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap-->
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <!-- Chart.js -->
    <script src="js/Chart.min.js"></script>
    <!--日曆選擇器 ->此plugin會影響語系-->
    <script type="text/javascript" src="./js/moment-with-locales.js"></script>
    <!--日曆選擇器 -> 引用plugin的js(自行到作者GitHub下載)-->
    <script src="js/bootstrap-material-datetimepicker.js"></script>

    <!-- 一般javascript jquery 載入  -->
    <script>
        //  sidebar 項目開關
        //  setInterval(function () {
        //     // $('.sidebar-dropdown-menu-toggle').click(function () {
        //     //   $(this).addClass('dropdown-open');
        //     // })
        //     // $('.dropdown-open').click(function () {
        //     //   $(this).removeClass('dropdown-open');
        //     // });

        // });

        // 
        //     var cc=0;
        //     if(cc == 0){
        //     $('.sidebar-menu-button').click(function () {
        //         $('.sidebar').css('width', '250px');
        //         $('.sidebar p').fadeIn(100);
        //         cc=1;
        //       });
        // }
        // else{
        //       $('.sidebar-menu-button').click(function () {
        //         $('.sidebar').css('width', '80px');
        //         $('.sidebar p').fadeOut(100);
        //         cc=0;
        //       });
        // }
        // 

        $('.sidebar').mouseover(function () {
            $(this).css('width', '250px');
            $('.sidebar p').fadeIn(100);
        });

        $('.sidebar').mouseleave(function () {
            $(this).css('width', '80px');
            $('.sidebar p').fadeOut(100);
        });

        // $('#user-menu-button').click(function () {
        //     $('.user-dropdown-menu').fadeToggle(200);
        //     $('.fa-chevron-circle-down').toggleClass('transform-rotate-180deg')
        // });


document.getElementById('user-menu-button').onclick=fa_chevron_circle_down;
function fa_chevron_circle_down() {
    $('.user-dropdown-menu').fadeToggle(200);
            // $('.user-dropdown-menu').fadeToggle(200);
            if ($('.fa-chevron-circle-down').hasClass('transform-rotate-180deg')) {
                document.getElementsByClassName('fa-chevron-circle-down')[0].className+= " " + "transform-rotate-0deg";
                document.getElementsByClassName('fa-chevron-circle-down')[0].classList.remove("transform-rotate-180deg");
                // $('.fa-chevron-circle-down').toggleClass('transform-rotate-0deg');
                // $('.fa-chevron-circle-down').removeClass('transform-rotate-180deg');
            } else {
                document.getElementsByClassName('fa-chevron-circle-down')[0].className+= " " + "transform-rotate-180deg";
                document.getElementsByClassName('fa-chevron-circle-down')[0].classList.remove("transform-rotate-0deg");
                // $('.fa-chevron-circle-down').toggleClass('transform-rotate-180deg');
                // $('.fa-chevron-circle-down').removeClass('transform-rotate-0deg');
            }
        };
        // $('#user-menu-button').on('click', function () {
        //     $('.user-dropdown-menu').fadeToggle(200);
        //     if ($('.fa-chevron-circle-down').hasClass('transform-rotate-180deg')) {
        //         $('.fa-chevron-circle-down').toggleClass('transform-rotate-0deg');
        //         $('.fa-chevron-circle-down').removeClass('transform-rotate-180deg');
        //     } else {
        //         $('.fa-chevron-circle-down').toggleClass('transform-rotate-180deg');
        //         $('.fa-chevron-circle-down').removeClass('transform-rotate-0deg');
        //     }
        // });


    </script>
</body>

</html>