
<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
<?php session_start();?>
<?php
include('h.php');
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
  padding-top: 16px
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #302d1e;
  display: block;
}

.sidebar a:hover {
  color: red;
}

.main {
  margin-left: 340px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
.btn-group button {
  background-color: #fef568; /* Green background */
  border: 1px solid black; /* Green border */
  color: white; /* White text */
  padding: 3px 24px; /* Some padding */
  align:right;
  cursor: pointer; /* Pointer/hand icon */
  width: 300%; /* Set a width if needed */
  display: block; /* Make the buttons appear below each other */
}

.btn-group button:not(:last-child) {
  border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: white;
}
</style>
</head>

<body>




<div class="sidebar">
<h2 style="color:White;" img src = ="1.png"><b> &nbsp &nbsp<i class="fa fa-plus fa-3x "></i> &nbspCOM</b></h2>
                <h2 style="color:White;"align="right"></i><b> &nbsp &nbspPHARMARCY</b></h2>
                

<br><br><br>
<div class="list-group">
  <a class="list-group-item" href="main.php"style="background-color:#fef568;" ><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>&nbsp; BACK</a><br>
</div>

  <!-- <a href="index.php"><i class="fa fa-sign-out"></i> LOGOUT</a>


  <a href="searchcustomer.php" ><i class="fa fa-fw fa-users"></i> ข้อมูลลูกค้า</a>
  <a href="searchemployee.php"><i class="fa fa-fw fa-user"></i> ข้อมูลพนักงาน</a>
  <a href="searchposition.php"><i class="fa fa-bars"></i> ตำแหน่งสินค้า</a>
  <a href="menusales.php"><i class="fa fa-book"></i>  ยอดขาย</a> -->
</div>

<div class="main">
<br>
  <h1 style="color:#0077a2;font-size:400%; font-family:JasmineUPC "><b>ยอดขาย</b></h1>
  <div style=" background-color:#0077a2; weidth:5px; height:10px; "></font>&nbsp&nbsp
  <br><br>
  <div class= "btn-group ">
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
<a href="searchdetailsofsalesbill.php  ">
  <button><h2 style="color:black; font-family:JasmineUPC;"  >รายละเอียดการขายต่อ1ใบเสร็จ</h2></button></a>
  <a href="searchtotalofbill.php">
  <button><h2 style="color:black; font-family:JasmineUPC;"  >ยอดเงินรวมต่อ1ใบเสร็จ</h2></button></a>
  <a href="searchtotalsalesofday.php">
  <button><h2 style="color:black; font-family:JasmineUPC;"  >ยอดเงินรวมของการขายสินค้าในแต่ละวัน</h2></button></a>
  <a href="searchproductofleastmost.php">
  <button><h2 style="color:black; font-family:JasmineUPC;"  >สินค้าที่ขายได้มากที่สุดและน้อยที่สุด</h2></button></a>
  <a href="searchproductofday.php">
  <button><h2 style="color:black; font-family:JasmineUPC;"  >สินค้าที่ขายได้ในแต่ละวัน</h2></button></a>

</div>


</div>
</body>
</html> 

<!-- Sidebar -->
<!-- <div class="w3-sidebar w3-Marina w3-bar-block" style="width:25%">

  <h3  class="w3-bar-item"style="color:#6dcff6" >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp COM</h3>
  <h3  class= "w3-bar-item"style="color:#6dcff6">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  PHARMACY</h3><br>
  <a href="index.php" class="w3-bar-item w3-button" style="font-size:200%;" style="font-family:LilyUPC;" >LOG OUT</a>
  <a href="searchproduct.php" class="w3-bar-item w3-button" style="font-size:200%;" >ค้นหาสินค้า</a>
  <a href="searchcustomer.php" class="w3-bar-item w3-button" style="font-size:200%;" >ข้อมูลลูกค้า</a>
  <a href="searchposition.php" class="w3-bar-item w3-button" style="font-size:200%;" >ตำแหน่งสินค้า</a>
  <a href="menusales.php" class="w3-bar-item w3-button" style="font-size:200%;" >ยอดขาย</a>

  
</div>
<section>
    

            <div class="contrainer4">
            <font Face="JasmineUPC" Size = "8.5" align="left" color="#0077a2" ><p><b>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp WELCOME...</b></p>
            <div style=" background-color:#0077a2; weidth:5px; height:10px; "></font>&nbsp&nbsp
                    
                <br><br><br><br>
               
               

        </div>
</section>
</body>
</html>  -->
