<html lang='en-US'>
<head>
<meta http-eqiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "pharmacy";

$con = new mysqli($server , $user , $password , $db);

if($con->connect_error){
    die("Connection failed : ".$con->connect_error);
}
$con->set_charset("utf8");

?>
<style type="text/css">

#btn{
width:100%;
}
</style>
<body style="background-color:#9eccdc">
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}

.sidebar {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0077a2;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #302d1e;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}

*{
                margin: 0;
                padding: 0;
            }
            section{
                width: 1377px;
                height:6000px;
                background-color:#9eccdc ;
                float:right;
                margin:auto;
            }
           
    th, td {
  padding: 15px;
}
                     a{
                         color: rgb(3, 3, 3);
                        text-decoration: none;

                        }
                         a:hover{
                        text-decoration: underline;
                        }
                        .back:hover:not(.active) {
                        background-color:pink;
                        
                    }

                    .contrainer4{
                        margin:112px 60px;
                    }
                    
                    input[type=text] {
                         width: 75%;
                         padding: 12px 20px;
                        margin: 8px 8px;
                         display: inline-block;
                         border: 1px solid #ccc;
                         border-radius: 15px;
                         box-sizing: border-box;
                        }
                        table {
                         border-collapse: collapse;
                         width:1200px;
                         height:370px;
                        }

                        table, td, th {
                        border: 1px solid #0077a2;
                        background-color:white;
                        }
                        
                        .button {
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        text-decoration: none;
                        display: inline-block;
                        font-size: 16px;
                        margin: 4px 2px;
                        cursor: pointer;
                        }
                        .button1 {background-color: #00a652;} /* Green */
                        .button2 {background-color: #fe0000;} /* Blue */
</style>
</head>
<body>

<div class="sidebar">
<h1 style="color:White;" img src = ="1.png"><b> &nbsp <i class="fa fa-plus fa-3x "></i> &nbspCOM</b></h1>
                <h1 style="color:White;"align="right"></i><b> &nbsp &nbspPHARMARCY</b></h1>
                

<br><br><br>
<div class="list-group">
  <a class="list-group-item" href="searchproduct.php"style="background-color:#fef568; " ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbsp; BACK</a><br>
 
</div>
</div>
<section>
            <div class="contrainer4">
            <font Face="JasmineUPC" Size = "8.5" align="left" color="#0077a2" ><p><b>เพิ่มข้อมูลสินค้า</b></p>
            <div style=" background-color:#0077a2; weidth:5px; height:10px; "></font>&nbsp&nbsp
            
            <form action="processaddproduct.php" method="post">
  <label for="code">รหัสสินค้า :  &nbsp &nbsp &nbsp &nbsp &nbsp </label>
  <input type="text" id="code" name="Product_ID" value=""style="width:350px;"><br>

  <label for="name">ชื่อสินค้า :  &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp </label>
  <input type="text" id="name" name="Product_Name" value="" style="width:350px;"><br>

  <label for="unit">หน่วย :   &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</label>
  <input type="text" id="unit" name="Unit" value="" style="width:350px;"><br>

  <label for="cost">ต้นทุน/หน่วย :&nbsp  &nbsp &nbsp</label>
  <input type="text" id="cost" name="Cost" value="" style="width:350px;"><br>

  <label for="price">ราคา/หน่วย :  &nbsp &nbsp &nbsp &nbsp</label>
  <input type="text" id="price" name="Sale_Price" value="" style="width:350px;"><br>

  <label for="count">จำนวนในคลัง : &nbsp &nbsp &nbsp</label>
  <input type="text" id="count" name="Stock_Quantity" value="" style="width:350px;" ><br>

  <label for="count">รหัสประเภทสินค้า : </label>
  <input type="text" id="producttypeid" name="ProductType_ID" value="" style="width:350px;" ><br>

  <label for="count">ชั้นวางสินค้า : &nbsp &nbsp&nbsp &nbsp</label>
  <input type="text" id="shelfno" name="Shelf_No" value="" style="width:350px;" ><br><br>

  <button class="button button1">บันทึก</button>

  
  <!-- <input type="submit" style="width:100px; "  value="บันทึก"><br> -->
</form>

                 
               <a href="searchproduct.php">
                <button class="button button2">ยกเลิก</button> 
                 
                

        </div>


</body>
</html>