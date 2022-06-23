<?php
   $gm =json_decode($data["arrNV"]);
?>
<div class="content3-message">
   <div class="wrap">
         <div class="box-change">
                        Back
         </div>
         <div class="box-change" onclick="next()">
                        Next
         </div>
         <div class="slideShow">
            <?php
               foreach ($gm as $key => $a) {
                  echo '
                  <div class="box">
                  <!-- div IMG -->
                  <div class="slide-img">
                      <img src="./public/uploadIMG/'.$a[3].'" alt="">
                      <!-- overlay -->

                      <div class="overlay1">
                          <a href="#" class="buy-btn">Buy</a>
                      </div>
                  </div>


                  <!-- detail-box -->
                  <div class="detail-box">
                      <div class="name-product">
                          <a href="">'.$a[1].'</a>
                          <span style="color:red;"> <span style="color:black;";>Thương hiệu:</span> '.$a[5].'</span>
                      </div>

                      <a href="" class="price">'.number_format($a[2],0,'.',',').' VND</a>
                  </div>


              </div>
                  ';
               }
            ?>
         </div>
   </div>
</div>