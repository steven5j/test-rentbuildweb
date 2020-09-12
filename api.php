

<?php
require_once('sql.php');

switch ($_GET['do']) {
  case 'check':
  $sql="SELECT * FROM user WHERE acc='".$_POST['acc']."' and pwd='".$_POST['pwd']."'";
  $re=$db->query($sql)->fetchAll();
  if($re){//有找到此帳號密碼
    $_SESSION['user']=$_POST['acc'];
    plo("admin.php");
  }
  else {
    echo "<script>
     alert('帳號或密碼錯誤');
     ".jlo("login.php").";
  </script>";}
 
  break;
  case 'logout':
  unset($_SESSION['user']);
  plo("login.php");
break;
}



?>


