<?php
    class sanphamchung extends controller{
        public function sayhi($trang){
            $b = $this -> model ('danhmuc');
            $sp = $this -> model('sanpham');
            //view
            $this -> view("spct",
            [   
                "title" => "SẢN PHẨM CHUNG",
                "phantrang" => "phantrang",
                "user" => "sanphampage",
                "arrDM" => $b -> getDM(),
                "arrSP" => $sp -> selectPTSP($trang),
                "slsp" => $sp -> numrowAll(),
                "trang" => $trang,
                "function" => "sayhi",  
            ]
            );
        }

        public function home(){
            $b = $this -> model ('danhmuc');
            $sp = $this -> model('sanpham');
            //view
            $this -> view("spct",
            [   
                "title" => "SẢN PHẨM CHUNG",
                "phantrang" => "phantrang",
                "user" => "sanphampage",
                "arrDM" => $b -> getDM(),
                "arrSP" => $sp -> selectSP(),
                "slsp" => $sp -> numrowAll(),
                // "trang" => $trang,
                "function" => "sayhi",  
            ]
            );
        }

        public function sanphamDM($id_dm,$trang){
            //model

            $b = $this -> model ('danhmuc');
            $sp = $this -> model('sanpham');

            //view
            $this -> view("spct",
            [   
                "title" => "SẢN PHẨM CHUNG",
                "user" => "sanphampage",
                "phantrang" => "phantrang2",
                "arrDM" => $b -> getDM(),
                "arrSP" => $sp -> selectSPDM($id_dm,$trang),
                "slsp" => $sp -> numrowDM($id_dm),
                "trang" => $trang,
                "function" => "sanphamDM/",
                "id_dm" => $id_dm,
            ]
            );
        }

        public function sanphamTH($thuonghieu,$trang){
            //model

            $b = $this -> model ('danhmuc');
            $sp = $this -> model('sanpham');

            //view
            $this -> view("spct",
            [   
                "title" => "SẢN PHẨM CHUNG",
                "user" => "sanphampage",
                "phantrang" => "phantrang2",
                "arrDM" => $b -> getDM(),
                "arrSP" => $sp -> selectSPTH($thuonghieu,$trang),
                "slsp" => $sp -> numrowTH($thuonghieu),
                "trang" => $trang,
                "function" => "sanphamTH/",
                "id_dm" => $thuonghieu,
            ]
            );
        }

        public function sanphamGT($GT,$trang){
            //model

            $b = $this -> model ('danhmuc');
            $sp = $this -> model('sanpham');

            //view
            $this -> view("spct",
            [   
                "title" => "SẢN PHẨM CHUNG",
                "user" => "sanphampage",
                "phantrang" => "phantrang2",
                "arrDM" => $b -> getDM(),
                "arrSP" => $sp -> selectSPGT($GT,$trang),
                "slsp" => $sp -> numrowGT($GT),
                "trang" => $trang,
                "function" => "sanphamGT/",
                "id_dm" => $GT,
            ]
            );
        }

        public function timkiemsp(){
            if(isset($_POST['btn-timkiem'])){
                //model
                $tensp = $_POST['ten_sp'];
                $b = $this -> model ('danhmuc');
                $sp = $this -> model('sanpham');
                //view
                $this -> view("spct",
                [   
                "title" => "SẢN PHẨM CHUNG",
                "user" => "sanphampage",
                "arrDM" => $b -> getDM(),
                "arrSP" => $sp -> findSP($tensp),
                "slsp" => $sp -> slfind($tensp),
                ]
                );
            }else{
                echo "fail";
            }
        }
    }
?>