<!DOCTYPE html>
<html>
<head>
    <!--引用bootstrap.css-->   

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
     <!--已另抽出inline-style，所以不引用--> 
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.css" />-->  
    <style type="text/css"> 
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
    </style> 

    <!--影響 X < >的icon-->
    <!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">--> 
    <link href="css/Material-Icons.css" rel="stylesheet" />



    <!--引用plugin的css-->
    <link rel="stylesheet" href="css/bootstrap-material-datetimepicker.css" /> 
</head>
<body>
    <!--文字框，type不可填date，自訂一個class加上去-->
    <input type="text" placeholder="請選擇日期" class="myDatePicker" />


  
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

    <script type="text/javascript">
        //當做全域參數使用
        let bootstrapMaterialDatePickerOption = { time: false, nowButton: true, clearButton: true, lang: 'zh-tw', format: 'YYYY/MM/DD' }; 
        $(function () {
            $('.myDatePicker').bootstrapMaterialDatePicker(bootstrapMaterialDatePickerOption);
        }); 
    </script> 
</body>
</html>