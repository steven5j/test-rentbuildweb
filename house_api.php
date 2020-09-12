<?php
require_once('sql.php');

// $aa[] = "'.$_POST['do'].'";
// foreach ($rows01 as $row01){
switch ($_GET['do']) {
  case 'building':
    $sql_building = "SELECT * FROM house_page_data_building WHERE 1";
    $rows_building = $db->query($sql_building)->fetchAll();
  $i=1;
    // print_r($rows);
    foreach ($rows_building as $row) {
      echo '
<div class="card m-4 shadow btn-outline-primary  animated fadeIn buildingcard " style="width:18rem; height: 500px; cursor: pointer;" onclick="building'.$row['id'].'()"  name="'.$row['real_estate'].'" >
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

      ';
      $i++;
    }
    
echo'
<div class="card m-4 shadow btn-outline-secondary animated fadeIn" style="width:18rem; height: 500px; cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-xl-buildingadd">
<div class="d-flex flex-column justify-content-center  align-items-center h-100">
<div class="display-3"><i class="fas fa-plus-circle"></i>
</div>
</div>
</div>


<div class="modal fade bd-example-modal-xl-buildingadd" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-xl">
<div class="modal-content">

<form method="POST"  action="house_api.php?do=form_2" enctype="multipart/form-data">
<div class="modal-header d-flex align-items-center">
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
        <button class="btn btn-outline-secondary w-100 h-50 my-3" >
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


';

    break;

    case 'rooms':
    $sql_room = "SELECT * FROM `house_page_data_room` WHERE 1";
$rows_room = $db->query($sql_room)->fetchAll();
$i=0;
    foreach ($rows_room as $row) {
        // print_r($rows01)
        echo '<div class="card m-4 shadow btn-outline-success animated fadeIn roomcard " style="width:18rem; height: 400px; cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-xl-'.$row['id'].'">
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
echo'

<div class="card m-4 shadow btn-outline-secondary animated fadeIn" style="width:18rem; height: 400px; cursor: pointer;" data-toggle="modal" data-target=".bd-example-modal-xl-roomadd">
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
                <td><span>使用坪數：<input class="form-control" type="number"  step="0.01" placeholder="台坪"name="Pyeong"></span>
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
';
echo'<script>
DatePicker();
</script>';
    break;
    case 'form_1':
        $sql_area="INSERT INTO `house_page_data_area` (`id`, `area`) VALUES (NULL, '".$_POST['area']."');";
        $db->query($sql_area); //pdo->執行指令
        // echo "<script>history.go(-1)</script>";
        header('location:admin.php?p=house');
        break;
    case 'form_2':
            date_default_timezone_set("Asia/Taipei");
            $picturename=$_POST['area']."_".$_POST['real_estate']."_".date("YmdHis")."_".$_FILES['picture']['name'];
            // $picturename=$_POST['area']."_".$_POST['real_estate']."_".date("YmdHis");
            copy($_FILES['picture']['tmp_name'],"./img/building/".$picturename); 

            $sql_building="INSERT INTO `house_page_data_building`(`id`, `area`, `real_estate`, `picture`, `address`, `situation`, `type`, `parking_space`, `Real_estate_Pyeong`, `land_Pyeong`, `traffic`, `House_features`) VALUES (null,'".$_POST['area']."','".$_POST['real_estate']."','".$picturename."','".$_POST['address']."','".$_POST['situation']."','".$_POST['type']."','".$_POST['parking_space']."','".$_POST['Real_estate_Pyeong']."','".$_POST['land_Pyeong']."','".$_POST['traffic']."','".$_POST['House_features']."')";
            $db->query($sql_building); //pdo->執行指令
            // echo "<script>history.go(-1)</script>";
            // copy($_FILES['mypic1']['tmp_name'],"./img/building/".$newname);
            // print_r($_FILES);

            header('location:admin.php?p=house');
        break;


        case 'form_3':
            date_default_timezone_set("Asia/Taipei");
            $picturename=$_POST['real_estate']."_".$_POST['room_title']."_".date("YmdHis")."_".$_FILES['picture']['name'];
            copy($_FILES['picture']['tmp_name'],"./img/room/".$picturename); 

            $sql_room="INSERT INTO `house_page_data_room`(`id`, `room_num`, `room_title`, `real_estate`, `picture`, `rental_status`, `t_occupation`, `t_gender`, `t_surname`, `start_date`, `end_date`, `rental_price`, `rental_price_period`, `type`, `situation`, `floor`, `Pyeong`, `equipment`, `characteristic`) VALUES (null,'".$_POST['room_num']."','".$_POST['room_title']."','".$_POST['real_estate']."','".$picturename."','".$_POST['rental_status']."','".$_POST['t_occupation']."','".$_POST['t_gender']."','".$_POST['t_surname']."','".$_POST['start_date']."','".$_POST['end_date']."','".$_POST['rental_price']."','".$_POST['rental_price_period']."','".$_POST['type']."','".$_POST['situation']."','".$_POST['floor']."','".$_POST['Pyeong']."','".$_POST['equipment']."','".$_POST['characteristic']."')";
            $db->query($sql_room); //pdo->執行指令
            // echo "<script>history.go(-1)</script>";
            header('location:admin.php?p=house');
        break;


}
// }
?>

