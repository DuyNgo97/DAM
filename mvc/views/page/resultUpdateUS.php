<?php
    $kq = json_decode($data['kq']);
    // echo $kq;
    if($kq){
        echo "<h1>CẬP NHẬT THÀNH CÔNG</h1>";
    }else{
        echo "<h1>CẬP NHẬT KHÔNG THÀNH CÔNG</h1>";
    }
?>