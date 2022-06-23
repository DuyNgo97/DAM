<?php
    class user extends db{
        function dangky($name,$diachi,$taikhoan,$email,$password){
            $check = false;
            $sql = "INSERT INTO `user`(`ten_user`, `diachi`, `email`, `taikhoan`, `password`,`vaitro`) 
                    VALUES ('$name','$diachi','$email','$taikhoan','$password','USER')";
            if(mysqli_query($this -> conn,$sql)){
                $check = true;
            }
            return json_encode($check);
        }

        function dangnhap($taikhoan,$password){
            $check = false;
            $sql = "SELECT * FROM `user` WHERE `taikhoan` = '$taikhoan' and `password` = '$password'";
            if($a = mysqli_query($this->conn,$sql)){
                if(mysqli_num_rows($a) != 0){
                    $check = true; 
                }
            }
            return json_encode($check);
        }

        // function selectUS(){
        //     $sql = ""
        // }

        public function vaitro($taikhoan){
            $sql = "SELECT * FROM `user` WHERE `taikhoan` = '$taikhoan'";
            $result = mysqli_query($this -> conn,$sql);
            if($result){
                $arr = mysqli_fetch_all($result);
            }
            return json_encode($arr);
        }
        
        

        public function Getuser($id){
            $sql = "Select * from user order by $id";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function selectOne($id){
            $sql = "SELECT * FROM `user` WHERE `id_user` = $id";
            $result = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function EditUser($id){
            $sql = "SELECT * FROM `user` WHERE `id_user` = '$id'";
            $result = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($result);
            return json_encode($arr);
        }

        public function update($id,$ten,$diachi,$taikhoan,$password,$email,$vaitro){
            $check = false;
            $sql = "UPDATE `user` 
            SET `ten_user`='$ten',`diachi`='$diachi',`email`='$email',`taikhoan`='$taikhoan',`password`='$password',`vaitro`='$vaitro'
             WHERE `id_user`='$id'";
            if(mysqli_query($this -> conn,$sql)){
               $check = true; 
            }
            return json_encode($check);
        }
        
        public function deleteUS($id){
            $check = false;
            $sql = "DELETE FROM `user` WHERE `id_user` = '$id'";
            if(mysqli_query($this -> conn,$sql)){
                $check = true;
            }
            return json_encode($check);
        }

        public function addUser($taikhoan,$email,$password,$vaitro){
            $check = false;
            $sql = "INSERT INTO `user`(`taikhoan`, `email`, `password`,`vaitro`) VALUES ('$taikhoan','$email','$password','$vaitro')";
            // $result = mysqli_query($this -> conn, $sql);
            if(mysqli_query($this -> conn, $sql)){
                $check = true;
            }
            return json_encode($check);
        }
    }
?>  