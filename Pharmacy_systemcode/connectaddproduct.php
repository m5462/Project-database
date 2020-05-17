<?php
    $connect = mysqli_connect('localhost', 'root', '','pharmacy');
    if(mysqli_connect_error($connect)){
        echo 'Fail to connect';
    }