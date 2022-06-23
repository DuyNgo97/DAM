<?php
    class giohangMD extends db{
        public function selectGH($taikhoan){
            $sql = "SELECT * FROM `user` 
            WHERE `taikhoan` = '$taikhoan'";
            $result = mysqli_query($this -> conn, $sql);
            $arr = trim(mysqli_fetch_all($result)[0][7],'"');
            return json_encode($arr);
        }

        public function selectSP($taikhoan){
            $cartString = $this -> selectGH($taikhoan);
            $cartString = explode('-',$cartString);
            // $a = trim($cartString);
            // unset($cartString[0]);
            foreach ($cartString as $key => $a) {
                explode(',',$a);
            }
            return json_encode($cartString);     
        }
    }
?>