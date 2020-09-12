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

    <title>Dashbords</title>
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
 

        <!-- ------------------------------blank end--------------------------- -->
        <!-- 內容content -->
            <div class="container-fluid">
                <!-- 麵包屑 (Breadcrumb) -->
                <div class="Breadcrumb-bar d-md-flex align-items-center border-bottom  d-none">

                    <h1 class="px-5">Dashbords</h1>
                    <h4 class="px-4"><i class="fas fa-home"></i> Dashbords</h4>
                </div>

                <!-- 麵包屑 (Breadcrumb) end -->
                <!-- 第一層 start -->
                <div class="d-flex mb-4 flex-column flex-md-row">

                    <div class="col-md-3 col my-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <h1 class="display-4 mx-auto mb-4" style="color: gold;"><i
                                                class="fas fa-coins"></i></h1>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-text">租金收益(上個月)</div>
                                        <h1 class="card-title " style="color: gold;">1,840
                                        </h1>
                                    </div>

                                </div>
                                <div class="card-footer bg-white p-0">
                                    <p class="pb-0 pt-3 mb-0 text-secondary"> <i class="far fa-arrow-alt-circle-up"></i>
                                        Updated now </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col my-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <h1 class="display-4 mx-auto mb-4 text-info"><i class="far fa-chart-bar"></i>
                                        </h1>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-text">出租率</div>
                                        <h1 class="card-title text-info">100%
                                        </h1>
                                    </div>

                                </div>
                                <div class="card-footer bg-white p-0">
                                    <p class="pb-0 pt-3 mb-0 text-secondary"> <i class="far fa-arrow-alt-circle-up"></i>
                                        Updated now </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col my-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <h1 class="display-4 mx-auto mb-4 text-success "><i
                                                class="fas fa-hand-holding-usd"></i></h1>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-text">收租率</div>
                                        <h1 class="card-title text-success">100%
                                        </h1>
                                    </div>

                                </div>
                                <div class="card-footer bg-white p-0">
                                    <p class="pb-0 pt-3 mb-0 text-secondary"> <i class="far fa-arrow-alt-circle-up"></i>
                                        Updated now </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 col my-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-5">
                                        <h1 class="display-4 mx-auto mb-4 text-danger"><i
                                                class="fas fa-exclamation-circle"></i></h1>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-text">問題回報狀況</div>
                                        <h1 class="card-title text-danger">?
                                        </h1>
                                    </div>

                                </div>
                                <div class="card-footer bg-white p-0">
                                    <p class="pb-0 pt-3 mb-0 text-secondary"> <i class="far fa-arrow-alt-circle-up"></i>
                                        Updated now </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- 第一層 end-->
                <!-- 第二層 start-->
                <div class="d-flex mb-4 flex-md-row flex-column">
                    <div class="col-md-4 col my-2">
                        <div class="card">
                            <h4 class="card-header">租客職業</h4>
                            <div class="card-body">
                                <div class="header">
                                </div>
                                <div class="content">
                                    <canvas id="Career_chart" width="400" height="400"></canvas>

                                </div>
                            </div>
                            <div class="card-footer text-secondary">Last updated 3 mins ago</div>
                        </div>
                    </div>
                    <div class="col-md-8 col my-2">
                        <div class="card">
                            <h4 class="card-header">租金報酬成長率</h4>
                            <div class="card-body">
                                <div class="header">
                                    <p class="category">一年資訊</p>
                                </div>
                                <div class="content">
                                    <canvas id="rr_chart" width="400" height="150"></canvas>

                                </div>
                                <p><i class="fas fa-circle"></i>租金</p>
                            </div>
                            <div class="card-footer text-secondary">
                                <i class="fas fa-undo"></i>Last updated 3 mins ago
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 第二層 end-->
                <!-- 第三層 start -->
                <div class="d-flex mb-4 flex-md-row flex-column">
                    <div class="col-md-6 col my-2">
                        <div class="card">
                            <h4 class="card-header">出租率</h4>
                            <div class="card-body">
                                <canvas id="rent_chart"></canvas>
                            </div>
                            <div class="card-footer text-secondary">
                                Last updated 3 mins ago
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col my-1">
                        <div class="card">
                            <h4 class="card-header">收租率</h4>
                            <div class="card-body">
                                <canvas id="rc_chart"></canvas>
                            </div>
                            <div class="card-footer text-secondary">
                                Last updated 3 mins ago
                            </div>
                        </div>
                    </div>

                </div>
                <!-- 第三層 end -->
                <!-- 第四層 start -->
                <div class="d-flex mb-4 flex-md-row flex-column">
                    <div class="col-md-6 col my-2">
                        <div class="card">
                            <h4 class="card-header">狀況問題</h4>
                            <div class="card-body">

                            </div>
                            <div class="card-footer text-secondary">
                                Last updated 3 mins ago
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col my-2">
                        <div class="card">
                            <h4 class="card-header">建議回饋</h4>
                            <div class="card-body">

                            </div>
                            <div class="card-footer text-secondary">
                                Last updated 3 mins ago
                            </div>
                        </div>
                    </div>

                </div>

                <!-- 第四層end -->
                <!-- footer start -->
                <footer class="row">
                    <div class="container-fluid px-0 ">
                        <div class="card-footer px-5">
                            <p class="text-right  ml-auto mb-0">

                                © 2019 creative for 朱軒 , 泰山職訓局專題
                            </p>
                        </div>
                    </div>
                </footer>
                <!-- footer end -->



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

    <!-- 一般javascript jquery 載入  -->
    <script>

        // Chart 圖表 start
        // Career職業
        var Career_chart = document.getElementById('Career_chart').getContext('2d');
        var myCareerChart = new Chart(Career_chart, {
            type: 'doughnut',
            data: {
                labels: ['工程師', '業務', '老師'],
                datasets: [{
                    backgroundColor: ['rgba(0,123,255,0.8)', 'rgba(102,16,242,0.8)', 'rgba(232,62,140,0.8)'],
                    data: [10, 20, 30]
                }],
            }
        });
        //  租金報酬 表
        var rr_chart = document.getElementById('rr_chart').getContext('2d');
        var myChart = new Chart(rr_chart, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: '租金報酬',
                    data: [0, 10, 5, 2, 20, 30, 45],
                    backgroundColor: 'rgba(255, 193, 7, 0.2)',
                    borderColor: 'rgba(253, 126, 20, 1)',
                    borderWidth: 1
                }
                ]
            }
        });
        // 出租率

        var rent_chart = document.getElementById('rent_chart').getContext('2d');
        var myChart = new Chart(rent_chart, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

        // 收租率 圖表
        var rc_chart = document.getElementById('rc_chart').getContext('2d');
        var myChart = new Chart(rc_chart, {
            type: 'bar',
            data: {
                labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
                datasets: [{
                    label: '# of Votes',
                    data: [12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>
</body>

</html>