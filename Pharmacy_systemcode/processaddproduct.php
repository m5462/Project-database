<?php include 'connectaddproduct.php' ; ?>
<?php
 $code = $_POST['Product_ID'];
 $name = $_POST['Product_Name'];
 $unit = $_POST['Unit'];
 $costunit = $_POST['Cost'];
 $priceunit = $_POST['Sale_Price'];
 $count = $_POST['Stock_Quantity'];
 $producttypeid = $_POST['ProductType_ID'];
 $shelfno = $_POST['Shelf_No'];
 mysqli_query($connect, "INSERT INTO product (Product_ID,Product_Name,Unit,Cost,Sale_Price,Stock_Quantity,ProductType_ID,Shelf_No)
                            VALUES ('$code' , '$name' , '$unit' , '$costunit' , '$priceunit' , '$count' , '$producttypeid' , '$shelfno')");


    if(mysqli_affected_rows($connect) > 0){
        echo "<script>";
                        echo "alert('\" สินค้าถูกเพิ่ม \"');"; 
                        echo "window.history.back()";
                    echo "</script>";
    }else{
        echo 'Member not added';
        echo mysqli_error($connect);
    }
?>