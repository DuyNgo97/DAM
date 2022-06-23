<?php
    class danhmuc extends db{
        public function getDM(){
            $sql = "SELECT * FROM `danhmuc`";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }
        
        public function xoaDM($id){
            $check = false;
            $sql = "DELETE FROM `danhmuc` WHERE `id_dm` = '$id'";
            if(mysqli_query($this->conn,$sql)){
                $check = true;
            }
            return json_encode($check);
        }

        public function addDM($tendm){
            $check = false;
            $sql = "INSERT INTO `danhmuc`(`ten_dm`) VALUES ('$tendm')";
            if(mysqli_query($this->conn,$sql)){
                $check = true;
            }
            return json_encode($check);
        }
    }
?>