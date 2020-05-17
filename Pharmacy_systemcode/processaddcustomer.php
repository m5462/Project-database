<?php include 'connectaddcustomer.php' ; ?>
<?php
 $id = $_POST['Cus_ID'];
 $f_name = $_POST['Cus_Firstname'];
 $l_name = $_POST['Cus_Lastname'];
 $add_no = $_POST['Cus_Add_No'];
 $add_soi = $_POST['Cus_Add_Soi'];
 $add_road = $_POST['Cus_Add_Road'];
 $add_dis = $_POST['Cus_Add_District'];
 $add_pro = $_POST['Cus_Add_Province'];
 $add_pos = $_POST['Cus_Add_PostalCode'];
 $email = $_POST['Cus_Email'];
 $tel = $_POST['Cus_Tel'];
 mysqli_query($connect, "INSERT INTO customer (Cus_ID,Cus_Firstname,Cus_Lastname,Cus_Add_No,Cus_Add_Soi,Cus_Add_Road,Cus_Add_District,Cus_Add_Province,Cus_Add_PostalCode,Cus_Email,Cus_Tel)
                            VALUES ('$id' , '$f_name' ,'$l_name' , '$add_no' , '$add_soi' , '$add_road' , '$add_dis' , '$add_pro' , '$add_pos' , '$email' , '$tel')");


    if(mysqli_affected_rows($connect) > 0){
        echo "<script>";
                        echo "alert('\" ข้อมูลถูกเพิ่ม \"');"; 
                        echo "window.history.back()";
                    echo "</script>";
    }else{
        echo 'Member not added';
        echo mysqli_error($connect);
    }
?>