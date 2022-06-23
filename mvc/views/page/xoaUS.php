<?php
    $string = $_SERVER['REQUEST_URI'];
    // var_dump($string);
    $id = substr($string,21,10);
    // echo $id;
?>
<a href="admin/deleteUS/<?= $id ?>">Xóa</a>
<a href="admin/viewQLND">Hủy</a>