<?php
require_once('sql.php');
if(empty($_SESSION['user'])) plo("login.php");
$mainzone=(empty($_GET['do']))?"dashbords":$_GET['do'];

$sql_building = "SELECT * FROM house_page_data_building WHERE 1";
$rows_building = $db->query($sql_building)->fetchAll();


$sql_area = "SELECT * FROM `house_page_data_area` WHERE 1";
$rows_area = $db->query($sql_area)->fetchAll();

$sql_room = "SELECT * FROM `house_page_data_room` WHERE 1";
$rows_room = $db->query($sql_room)->fetchAll();
// $sql01 = "SELECT DISTINCT `area` FROM `house_page_data_area` WHERE 1";
// $rows01 = $db->query($sql01)->fetchAll();

// if($_POST){ //same if(!empty($_POST))

//   }


// INSERT INTO `house_page_data_building`(`id`, `area`, `real_estate`, `picture`, `address`, `situation`, `type`, `parking_space`, `Real_estate_Pyeong`, `land_Pyeong`, `traffic`, `House_features`) VALUES (1,2,3,4,4,6,7,8,9,1,1,1)


?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>house</title>
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
<!-- 日曆選擇器-> 引用plugin的css(自行到作者GitHub下載)-->
<link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css" />
<style>
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

.text-money {
color: goldenrod;
font-weight: 500;
font-size: 1.2em;
}

.house_modal table {
width: 100%;
}

.house_modal table tr td {
min-width: 100px;
height: 100px;
}

.house_modal table tr td span {
min-width: 100px;
display: inline-block;
margin: auto 0.5rem;
}


        /* fallback   日曆選擇器 ->影響 Close < > 的切換icon */
        @font-face {
  font-family: 'Material Icons';
  font-style: normal;
  font-weight: 400;
  src: url(./font/Material-Design-Icons.woff2) format('woff2');
  /* src: url(https://fonts.gstatic.com/s/materialicons/v48/flUhRq6tzZclQEJ-Vdg-IuiaDsNc.woff2) format('woff2'); */
}

.material-icons {
  font-family: 'Material Icons';
  font-weight: normal;
  font-style: normal;
  font-size: 24px;
  line-height: 1;
  letter-spacing: normal;
  text-transform: none;
  display: inline-block;
  white-space: nowrap;
  word-wrap: normal;
  direction: ltr;
  /* -webkit-font-feature-settings: 'liga'; */
  -webkit-font-smoothing: antialiased;
}
        /* fallback   日曆選擇器 ->影響 Close < > 的切換icon  end*/
        /* fallback   日曆選擇器 ->CSS 影響按鈕文字大小變化  Start*/
        .dtp-buttons > button.btn {
             border: none;
             border-radius: 2px;
             position: relative;
             box-shadow: none;
             color: rgba(0,0,0, 0.87);
             padding: 5px 16px;
             font-size: 12px;
             margin: 10px 1px;
             font-weight: 500;
             text-transform: uppercase;
             letter-spacing: 0;
             will-change: box-shadow, transform;
             transition: box-shadow 0.2s cubic-bezier(0.4, 0, 1, 1), background-color 0.2s cubic-bezier(0.4, 0, 0.2, 1), color 0.2s cubic-bezier(0.4, 0, 0.2, 1);
             outline: 0;
             cursor: pointer;
             text-decoration: none;
             background: transparent;
         }
        .dtp-buttons > button.btn:hover,
        .dtp-buttons > button.btn:focus {
            background-color: rgba(153, 153, 153, 0.2);
        }
                /* fallback   日曆選擇器 ->CSS 影響按鈕文字大小變化  end*/
</style>
</head>

<body>
<!-- 內容content -->

<div class="container-fluid">
<!-- 麵包屑 (Breadcrumb) -->
<div class="Breadcrumb-bar d-md-flex align-items-center border-bottom d-none">

<h1 class="px-5">物件管理</h1>
<h4 class="px-4"><i class="fas fa-home"></i> Dashbords -> 物件管理</h4>
</div>

<!-- 麵包屑 (Breadcrumb) end -->
<!-- 物件資料 start-->
<!-- 第一層 -->
<div class="p-4 mb-4 border-bottom d-block">
<!-- <button type="button" class="btn btn-outline-primary mx-3" name="龍潭區">龍潭區</button> -->
<?php
foreach ($rows_area as $row) {
    // print_r($rows01)
?>
<button type="button" class="btn btn-primary mx-3 " name="<?= $row['area'] ?>" ><?= $row['area'] ?></button>
<?php
}
?> 




<button type="button" class="btn btn-outline-secondary mx-3" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-plus-circle"></i></button>

<button type="button" class="btn btn-danger float-right" name="編輯" >編輯</button>

<!-- Modal -->
<form method="POST" action="house_api.php?do=form_1">
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalCenterTitle">新增地區</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<input type="text" class="form-control" placeholder="地區 eg.桃園區..等" name="area" >
</div>
<div class="modal-footer">
<button  class="btn btn-primary" type="submit">確定新增</button>
<div class="col"></div>
<button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>

</div>
</div>
</div>
</div>
</form>





</div>
<!-- 第一層 end -->






























<!-- 第二層  Start-->


<div id="2nd_building" class="mb-4 row border-bottom pb-4">

<?php
  $i=1;
foreach ($rows_building as $row) {
      echo '
<div class="card m-4 shadow btn-outline-primary buildingcard " style="width:18rem; height: 500px; cursor: pointer;" onclick="building'.$row['id'].'()"  name="'.$row['real_estate'].'" >
<img class="w-100 object-fit-cover object-position-center" src="./img/building/'.$row['picture'].'" style=" height: 350px" alt="">
<div class="card-body d-flex flex-column justify-content-center  align-items-center">
<h4 class="card-title">'.$row['real_estate'].'</h4>
<div class="card-text aa'.$i.' d-none " >'.$row['area'].'</div>
<button class="btn-info btn" data-toggle="modal" data-target=".modal-xl-'.$row['id'].'">詳細資料</button>
</div>
</div>


<div class="modal fade modal-xl-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
<div class="modal-content">
<div class="modal-header d-flex align-items-center">
<h3 class="modal-title border-right pr-3" id="exampleModalLabel">'.$row['real_estate'].'</h3>
<h6 class="modal-title ml-3" >'.$row['area'].'</h6>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row flex-column flex-lg-row">
    <div class="col-12 col-lg-6 house_modal">
        <div class="w-100" style="height:400px">
            <img src="./img/building/'.$row['picture'].'" class="w-100 h-100 object-fit-cover object-position-center" alt="" >
        </div>
        <table>
            <tr>
                <td><span>地址</span></td>
                <td>'.$row['address'].'</td>
            </tr>
        </table>

    </div>
    <div class="col-12 col-lg-6 house_modal">
        <table>
            <tr>
                <td>
                    房屋資料
                </td>
                <td><span>現況：'.$row['situation'].'</span>
                    <span>型態：'.$row['type'].'</span>
                    <span>車位：'.$row['parking_space'].'</span></td>
            </tr>
            <tr>
                <td>坪數說明
                </td>
                <td><span>主建物：'.$row['Real_estate_Pyeong'] .'坪</span><span>土地坪數：'.$row['land_Pyeong'].'坪</span></td>
            </tr>
            <tr>
                <td>附近交通</td>
                <td>'.$row['traffic'].'</td>
            </tr>
            <tr>
                <td>屋況特色
                </td>
                <td>'.$row['House_features'].'
                </td>
            </tr>
        </table>
    </div>
</div>
</div>
<div class="modal-footer d-flex justify-content-between">
<button type="button" class="btn btn-primary">修改</button>
<button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>

</div>
</div>
</div>
</div>

      ';}
      $i++;
?>

<div class="card m-4 shadow btn-outline-secondary " style="width:18rem; height: 500px; cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-xl-buildingadd">
<div class="d-flex flex-column justify-content-center  align-items-center h-100">
<div class="display-3"><i class="fas fa-plus-circle"></i>
</div>
</div>
</div>


<div class="modal fade bd-example-modal-xl-buildingadd" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
<div class="modal-content">

<form method="POST"  action="house_api.php?do=form_2" enctype="multipart/form-data">
<div class="modal-header">
<h5 class="modal-title border-right pr-3" id="exampleModalLabel">
    <input class="form-control form-control-lg " type="text" placeholder="物件標題" name="real_estate"></h5>
    <h5 class="modal-title ml-3" id="exampleModalLabel">
<input class="form-control form-control mt-1 " type="text" placeholder="地區 eg.龍潭區..等" name="area">
</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row flex-column flex-lg-row">
    <div class="col-12 col-lg-6 house_modal">
        <button class="btn btn-outline-secondary w-100 h-50 my-3"type="file" name="picture">
            <div class="form-group d-flex flex-column justify-content-center  align-items-center">
                <label for="exampleFormControlFile1">上傳物件圖片</label>
                <input type="file" class="form-control-file w-50" id="exampleFormControlFile1" name="picture">
            </div>
        </button>
        地址<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="新北市泰山區..等" name="address"></textarea>
    </div>
    <div class="col-12 col-lg-6 house_modal">
        <table>
            <tr>
                <td>
                    房屋資料
                </td>
                <td><span>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">現況：</label>
                            <select class="form-control " id="exampleFormControlSelect1" name="situation">
                                <option>住宅</option>
                                <option>廠房</option>
                                <option>土地</option>
                                <option>其他</option>
                            </select>
                        </div>
                    </span>
                    <span>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">型態：</label>
                            <select class="form-control " id="exampleFormControlSelect1" name="type">
                                <option>公寓</option>
                                <option>電梯大樓</option>
                                <option>透天</option>
                                <option>別墅</option>
                            </select>
                        </div>
                    </span>
                    <span>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">車位：</label>
                            <select class="form-control " id="exampleFormControlSelect1"name="parking_space">
                                <option>有</option>
                                <option>無</option>
                            </select>
                        </div>
                    </span></td>
            </tr>
            <tr>
                <td>坪數說明
                </td>
                <td><span>主建物：<input class="form-control" type="number" step="0.01" placeholder="台坪" name="Real_estate_Pyeong"></span>
                    <span>土地坪數：<input class="form-control " type="number" step="0.01" placeholder="台坪" maxlength="6" size="6"name="land_Pyeong"></span></td>
            </tr>
            <tr>
                <td>附近交通</td>
                <td>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="公車站、火車站、客運總站..等"name="traffic"></textarea>
                    </div><span></span>
                </td>
            </tr>
            <tr>
                <td>屋況特色
                </td>
                <td>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="7米活巷、前後採光、自帶停車場..等" name="House_features"></textarea>
                    </div>

                </td>
            </tr>
        </table>
    </div>
</div>
</div>
<div class="modal-footer d-flex justify-content-between">
<button type="submit" class="btn btn-primary">確定新增</button>
<button type="reset" class="btn btn-primary">重置</button>
<div class="col"></div>
<button type="button" class="btn btn-secondary " data-dismiss="modal">關閉</button>

</div>
</form>

</div>
</div>
</div>




</div>

<!-- 第二層 end -->






































<!-- 第三層 start -->
<div id="3rd_rooms" class="mb-4 row border-bottom pb-4">

<?php
$i=0;
    foreach ($rows_room as $row) {
        // print_r($rows01)
        echo '<div class="card m-4 shadow btn-outline-success roomcard" style="width:18rem; height: 400px; cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-xl-'.$row['id'].'">
        <h4 class="card-header card-title d-flex justify-content-start">
        <div class="col-3 border-right">'.$row['room_num'].'</div>
        <div class="col">'.$row['room_title'].'</div>
        
        </h4>
        <div class="w-100" style="height:200px">
        <img src="./img/room/'.$row['picture'].'" class="w-100 h-100 object-fit-cover object-position-center" alt="">
        </div>
        <div class="card-body d-flex flex-column justify-content-center  align-items-center">
        <h5 class="card-title w-100 d-flex text-center align-items-center">
        <div class="col text-money">'.$row['rental_price'].'</div>
        <div class="">/'.$row['rental_price_period'].'</div>
        </h5>
        <div class="card-text">'.$row['start_date'].'~'.$row['end_date'].'</div>
        <div class="card-text d-none building-room'.$i.'">'.$row['real_estate'].'</div>
        </div>
        </div>
        
        <div class="modal fade bd-example-modal-xl-'.$row['id'].'" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
        
        <form>
        <div class="modal-header d-flex align-items-center">
        <h3 class="modal-title border-right px-3" id="exampleModalLabel">'.$row['room_num'].'</h3>
        <h3 class="modal-title ml-3 border-right pr-3" id="exampleModalLabel">'.$row['room_title'].'</h3>
        <h6 class="modal-title ml-3 mt-1" id="exampleModalLabel">'.$row['real_estate'].'</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
        <div class="row flex-column flex-lg-row">
            <div class="col-12 col-lg-6 house_modal">
        
                <div class="w-100" style="height:400px">
                    <img src="./img/room/'.$row['picture'].'" class="w-100 h-100 object-fit-cover object-position-center" alt="">
                </div>
                <table>
                    <tr>
                        <td><span>租賃現況</span></td>
                        <td><span><label for="exampleFormControlSelect1">出租狀態</label>
                        '.$row['rental_status'].'</span>
                            <span><label for="exampleFormControlSelect1">租客職業</label> '.$row['t_occupation'].'
                            </span><span style="width: 250px;"><label for="exampleFormControlSelect1">租客姓氏
                                </label><br />'.$row['t_gender'].''.$row['t_surname'].'　</span></td>
                    </tr>
                    <tr>
                        <td><span>租約期間</span></td>
                        <td>開始日期 '.$row['start_date'].'~
                        <br/>結束日期 '.$row['end_date'].'
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-12 col-lg-6 house_modal">
                <table>
                    <tr>
                        <td>
                            租金價格</td>
                        <td>
                            <div class="form-group">
                                <span>'.$row['rental_price'].'</span>元 / <span><label for="exampleFormControlSelect1"></label>
                                '.$row['rental_price_period'].'</span></div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            型態現況
                        </td>
                        <td>
                            <span>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">型態：</label>
                                    '.$row['type'].'
                                </div>
                            </span>
                            <span>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">現況：</label>
                                    '.$row['situation'].'
                                </div>
                            </span>
                            <span>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">樓層：</label>
                                    '.$row['floor'].' 樓
                                </div>
                            </span></td>
                    </tr>
                    <tr>
                        <td>坪數說明
                        </td>
                        <td><span>使用坪數：'.$row['Pyeong'].'</span>
                        </td>
                    </tr>
                    <tr>
                        <td>設備提供</td>
                        <td>
                        '.$row['equipment'].'
                        </td>
                    </tr>
                    <tr>
                        <td>屋況特色
                        </td>
                        <td>
                        '.$row['characteristic'].'
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        </div>
        <div class="modal-footer d-flex justify-content-between">
        <button type="submit" class="btn btn-primary">修改</button>
        <div class="col"></div>
        <button type="button" class="btn btn-secondary " data-dismiss="modal">關閉</button>
        
        </div>
        </form>
        
        </div>
        </div>
        </div>'; 
        $i++;
};

?>




<div class="card m-4 shadow btn-outline-secondary " style="width:18rem; height: 400px; cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-xl-roomadd">
<div class="d-flex flex-column justify-content-center  align-items-center h-100">
<div class="display-3"><i class="fas fa-plus-circle"></i>
</div>
</div>
</div>

<div class="modal fade bd-example-modal-xl-roomadd" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
<div class="modal-content">

<form method="POST" action="house_api.php?do=form_3" enctype="multipart/form-data">
<div class="modal-header d-flex align-items-center">
<h5 class="modal-title border-right pr-3" id="exampleModalLabel"><input class="form-control form-control-lg " type="text" placeholder="編號 eg.A1..A2...等" size="8" maxlength="8" name="room_num" ></h5>
<h5 class="modal-title ml-3 border-right pr-3" id="exampleModalLabel"><input class="form-control form-control-lg" type="text" placeholder="出租物件標題" name="room_title"></h5>

<h5 class="modal-title ml-3" id="exampleModalLabel"><input class="form-control form-control-lg" type="text" placeholder="房子物件名稱" name="real_estate"></h5>

<button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<div class="row flex-column flex-lg-row">
    <div class="col-12 col-lg-6 house_modal">
        <button class="btn btn-outline-secondary w-100 h-50 my-3"type="file"name="picture">
            <div class="form-group d-flex flex-column justify-content-center  align-items-center">
                <h4 for="exampleFormControlFile1">上傳物件圖片</h4>
                <input type="file" class="form-control-file w-50" id="exampleFormControlFile1"name="picture">
            </div>
        </button>
        <table>
            <tr>
                <td><span>租賃現況</span></td>
                <td><span><label for="exampleFormControlSelect1">出租狀態</label>
                        <select class="form-control " id="exampleFormControlSelect1" name="rental_status">
                            <option>出租中</option>
                            <option>空閒中</option>
                        </select></span>
                    <span>
                        <label for="exampleFormControlSelect1">租客職業</label> 
                    <input class="form-control " type="text" style="width: 100px;" placeholder="職業"name="t_occupation">
                    </span>
                    <span >
                    <label for="exampleFormControlSelect1">租客姓氏</label>
                        <br />
                        <select class="form-control d-inline-block" id="exampleFormControlSelect1" style="width: 80px;"name="t_gender">
                            <option>Mr.</option>
                            <option>Ms.</option>
                        </select> 
                        <input class="form-control d-inline-block" type="text" style="width: 100px;" placeholder="姓氏"name="t_surname">
                    </span>
                </td>
            </tr>
            <tr>
                <td><span>租約期間</span></td>
                <td>開始日期 <input type="text" placeholder="請選擇日期" class="myDatePicker form-control w-75 d-inline" name="start_date"/> ~ <br />結束日期 <input type="text" placeholder="請選擇日期" class="myDatePicker form-control w-75 d-inline" name="end_date"/>
                </td>
            </tr>
        </table>
    </div>
    <div class="col-12 col-lg-6 house_modal">
        <table>
            <tr>
                <td>
                    租金價格</td>
                <td>
                    <div class="form-group">
                        <span><input class="form-control" type="number" placeholder="租金"name="rental_price"></span>元 / <span><label for="exampleFormControlSelect1"></label>
                            <select class="form-control " id="exampleFormControlSelect1"name="rental_price_period">
                                <option>月</option>
                                <option>年</option>
                                <option>其他</option>
                            </select></span></div>
                </td>
            </tr>
            <tr>
                <td>
                    型態現況
                </td>
                <td>
                    <span>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">型態：</label>
                            <select class="form-control " id="exampleFormControlSelect1"name="type">
                                <option>公寓</option>
                                <option>電梯大樓</option>
                                <option>透天</option>
                                <option>別墅</option>
                            </select>
                        </div>
                    </span>
                    <span>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">現況：</label>
                            <select class="form-control " id="exampleFormControlSelect1"name="situation">
                                <option>獨立套房</option>
                                <option>個人雅房</option>
                                <option>整層住家</option>
                                <option>其他</option>
                            </select>
                        </div>
                    </span>
                    <span>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">樓層：</label>
                            <input class="form-control d-inline-block w-25" type="number" placeholder="1、2.."name="floor">　樓
                        </div>
                    </span></td>
            </tr>
            <tr>
                <td>坪數說明
                </td>
                <td><span>使用坪數：<input class="form-control" type="number" step="0.01" placeholder="台坪"name="Pyeong"></span>
                </td>
            </tr>
            <tr>
                <td>設備提供</td>
                <td>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="桌子 椅子 衣櫃 床 熱水器 電視 冰箱 冷氣 洗衣機 網路 第四台 沙發 天然 瓦斯"name="equipment"></textarea>
                    </div><span></span>
                </td>
            </tr>
            <tr>
                <td>屋況特色
                </td>
                <td>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="工業風格、全新裝潢、包水、大陽台，大採光..等"name="characteristic"></textarea>
                    </div>

                </td>
            </tr>
        </table>
    </div>
</div>
</div>
<div class="modal-footer d-flex justify-content-between">
<button type="submit" class="btn btn-primary">確定新增</button>
<button type="reset" class="btn btn-primary">重置</button>
<div class="col"></div>
<button type="button" class="btn btn-secondary " data-dismiss="modal">關閉</button>

</div>
</form>

</div>
</div>
</div>





</div>
<!-- 第三層 end -->


<!-- 物件資料 end-->


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

<!-- 一般js填寫 -->
<script>

        // 日曆選擇器 ->當做全域參數使用
        // setInterval(() => {
            function DatePicker() {
                let bootstrapMaterialDatePickerOption = { time: false, nowButton: true, clearButton: true, lang: 'zh-tw', format: 'YYYY/MM/DD' }; 
        $(function () {
            $('.myDatePicker').bootstrapMaterialDatePicker(bootstrapMaterialDatePickerOption);
        }); 
            }
            DatePicker();
        // 日曆選擇器 ->當做全域參數使用 end

        // }, 2000);

<?php
foreach ($rows_area as $row01) {
?>
    $("button[name='<?=$row01['area']?>']").click(<?=$row01['area'].$row01['id']?>);
    function <?=$row01['area'].$row01['id']?>(){
        $.post("house_api.php?do=building", function (re) {
      $('#2nd_building').html(re); //塞入來自ajax的訊息
      var buildingcardlength = $('.buildingcard').length;
      $('.buildingcard').hide();
    //   鎖定新增房屋物件的地區欄位
$('.bd-example-modal-xl-buildingadd').find('input[name="area"]').after('<h6><?=$row01['area']?></h6>');
$('.bd-example-modal-xl-buildingadd').find('input[name="area"]').val('<?=$row01['area']?>').hide();


      for (var i = 0; i < (buildingcardlength + 1); i++) {
        var areatext = $('.aa'+i).text();
      if ((areatext).match("<?=$row01['area']?>")){
       $('.aa'+i).parents('.buildingcard').show();
  }
  }
    });
};
<?php
}
?>

<?php
foreach ($rows_building as $row) {
?>

function building<?=$row['id']?>() {
$.post("house_api.php?do=rooms", function (re) {
      $('#3rd_rooms').html(re); //塞入來自ajax的訊息
      var roomcardlength = $('.roomcard').length;
      $('.roomcard').hide();

    //   鎖定新增房間 的房屋物件欄位
    $('.bd-example-modal-xl-roomadd').find('input[name="real_estate"]').after('<h6><?=$row['real_estate']?></h6>');
$('.bd-example-modal-xl-roomadd').find('input[name="real_estate"]').val('<?=$row['real_estate']?>').hide();

// 有相關文字match到的顯示
      for (let i = 0; i < (roomcardlength + 1); i++) {
        var buildingroom = $('.building-room'+i).text();
      if ((buildingroom).match("<?=$row['real_estate']?>")){
       $('.building-room'+i).parents('.roomcard').show();
  }}
})


}
<?php
}
?>

// searcHCrimeB = function() {
//   // 匿名函式，當變數使用
//   // 匿名函式主要有兩種常用的場景，一是回撥函式，二是直接執行函式。回撥函式，像ajax的非同步操作，就需要回撥函式。
//   var usersValue = $("input[placeholder=請輸入可能的罪]").val();
//   var checkTrlength = $('.checkTr').length;
//   if (usersValue == null || usersValue == undefined || usersValue == '') {
//     $('.checkTr').hide();
//     $('#criminaLnote').hide();
//     // $("#searchB").hide();
//   } else {
//     $('.checkTr').hide();
//     for (var i = 1; i < (checkTrlength + 1); i++) {
//       if (($('.aa' + i).html()).match(usersValue)) {
//         $('.aa' + i).show();
//         $('#criminaLnote').show();
//         // $("#criminaLnote").addClass("criminaLnoteA");
//         // console.log(i);
//       }
//     }
//   }
// }

</script>
</body>

</html>