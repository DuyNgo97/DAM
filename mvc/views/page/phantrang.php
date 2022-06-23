<?php
//    echo "<h1>".$data['slsp']."</h1>";
//    echo "<h1>".$data['trang']."</h1>";
   $sotrang = ceil($data['slsp']/6);
//    echo "<h1>$sotrang</h1>";
?>

<?php

for ($i=1; $i <= $sotrang; $i++) { ?>

        <a href="sanphamchung/<?= $data['function'] ?>/<?= $i ?>" target="_self"><?= $i ?></a>

<?php } ?>