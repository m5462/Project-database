<?php include 'connectaddemployee.php' ; ?>
<?php
 $id = $_POST['Emp_ID'];
 $f_name = $_POST['Emp_Firstname'];
 $l_name = $_POST['Emp_Lastname'];
 $tel = $_POST['Emp_Tel'];
 $salary = $_POST['Emp_Salary'];
 mysqli_query($connect, "INSERT INTO employee (Emp_ID,Emp_Firstname,Emp_Lastname,Emp_Tel,Emp_Salary)
                            VALUES ('$id' , '$f_name' , '$l_name' ,'$tel' , '$salary')");


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