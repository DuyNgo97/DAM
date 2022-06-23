<?php
    class home extends controller{
        public function sayhi(){

            //model

            $a = $this -> model('sanpham');
            $b = $this -> model ('danhmuc');

            //view
            $this -> view("home",
            [
                "arrNV" => $a -> sanphambanchay(),
                "arrDM" => $b -> getDM(),
                "sanpham" => $a -> selectSP(),
            ]
            );
        }

        public function sanpham($type){
            //model

            $a = $this -> model('sanpham');
            $b = $this -> model ('danhmuc');

            //view
            $this -> view("home",
            [
                "arrNV" => $a -> sanphambanchay(),
                "arrDM" => $b -> getDM(),
                "sanpham" => $a -> selectSPM($type),
            ]
            );
        }
    }
?>