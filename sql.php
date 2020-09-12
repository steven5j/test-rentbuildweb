<?php

$db = new PDO("mysql:host=127.0.0.1;dbname=s1080205;charset=utf8", "root", "");
session_start();
date_default_timezone_set("Asia/Taipei");

//selet SQL
function select($tb, $wh){ //只要告知我資料表名稱與條件，我就能回傳select的結果(二維陣列)
  global $db;
  return $db->query("select * from " . $tb . " where " . $wh)->fetchAll();
}

//insert SQL
function insert($ary, $tb){ //給我資料跟資料表名，我能分解情報後新增一筆資料
  global $db;
  $field = "id";
  $data = "null";
  foreach ($ary as $key => $value) {
    $field .= "," . $key;
    $data .= ",'" . $value."'";
  }
  $db->query("INSERT INTO " . $tb . " (" . $field . ") VALUES (" . $data . ")");
  return $db->lastInsertId(); //取得上一筆新增資料的該ID
}

//update SQL
function update($ary, $tb){
  global $db;
  foreach ($ary as $do => $data) {
    switch($do){
    case 'num+1': 
      $db->query("UPDATE ".$tb." SET num=num+1 WHERE id=".$data);
    break;
    case 'num-1':
      $db->query("UPDATE ".$tb." SET num=num-1 WHERE id=".$data);
    break;
    default:
      foreach($data as $key=>$value){ //$do為欄位名稱,$key為索引id,$value為新值
          $db->query("UPDATE ".$tb." SET ".$do."='".$value."' WHERE id=".$key);
      }
    break;
    }
  }
}
//delete sql
function delete($ary,$tb){
  global $db;
  foreach ($ary as $do=>$data){
    switch ($do) {
      case 'del':
          foreach($data as $value){ //$value為刪除對象
            $db->query("DELETE FROM ".$tb." WHERE id=".$value);
          }
        break;
      case 'delat':
          $db->query("DELETE FROM ".$tb." WHERE ".$data);
      break;
    }
  }
}

//php轉址
function plo($link){
  return header("location:".$link);
}

//JS轉址
function jlo($link){
  return "location.href='".$link."'";
}


?>