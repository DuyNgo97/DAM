<?php
    class loai extends db{
        public function getLoai(){
            $sql ="SELECT * FROM `loai`";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }
    }
?>