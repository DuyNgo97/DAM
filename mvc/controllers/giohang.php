<?php
    class giohang extends controller{
        public function sayhi(){
            //model

            $b = $this -> model ('danhmuc');
            $sp = $this -> model('sanpham');
            $cart = $this ->model('giohangMD');
            //view
            $taikhoan = strtolower($_SESSION['user']);
            $this -> view('cart',[
                "user" => 'giohang',
                "arrDM" => $b -> getDM(),
                "cart" => $cart -> selectSP($taikhoan),
            ]);
        }

        public function cart($id){

            $id_sp = $id;
            $sp = $this -> model('sanpham');

            $produtc = json_decode($sp -> select_one($id_sp));


            if(empty($_SESSION['cart']) || !array_key_exists($id,$_SESSION['cart'])){
                $produtc[0]['soluong'] = 1; 
                $_SESSION['cart'][$id] = $produtc[0];
            }else{
                $_SESSION['cart'][$id]['soluong'] += 1;
                // $_SESSION['cart'][$id] = $produtc[0];
            }
            
            // var_dump($produtc);
            // var_dump($_SESSION['cart']);
            header('location:http://localhost/dam/giohang');          
        }

        public function delete($id){
            unset($_SESSION['cart'][$id]);
            header('location:http://localhost/dam/giohang');
        }

        public function update(){
            var_dump($_POST);
            foreach ($_POST['sl'] as $key => $arr) {
                // echo $key .'-'.$arr.'<br>';
                $_SESSION['cart'][$key]['soluong'] = $arr; 
            }
            header('location:http://localhost/dam/giohang');
        }

        public function thanhtoan(){
            // var_dump($_SESSION['cart']);
            //model

            $b = $this -> model ('danhmuc');
            $sp = $this -> model('sanpham');
            // $cart = $this ->model('giohangMD');
            $user = $this -> model('user');
            //view
            $taikhoan = strtolower($_SESSION['user']);
            $this -> view('cart',[
                "user" => 'gh',
                "arrDM" => $b -> getDM(),
                "US" => $user -> selectOne($_SESSION['idUS']),
                // "cart" => $cart -> selectSP($taikhoan),
            ]);
        }

        public function guimail(){
            $this -> view('cartview',[]);
        }

    }
?>