<?php
    class login extends controller{
        function sayhi(){
            //view
            $this -> view('login');
        }

        function dangky(){
        if(isset($_POST['btn-dangky'])){

            $name = $_POST['name'];
            $diachi = $_POST['diachi'];
            $taikhoan = $_POST['taikhoan'];
            $email = $_POST['email'];
            $password = $_POST['password'];

                //model

                $a = $this -> model('user');

                //view
                $this -> view('login',
            [
                "a" => $a -> dangky($name,$diachi,$taikhoan,$email,$password),
            ]);   
        }else{
            //view
            $this -> view('/page/text');
        }
        }

        function dangnhap(){
            if(isset($_POST['btn-dangnhap'])){
                //model
                $a = $this -> model('user');
                $taikhoan = $_POST['taikhoan'];
                $password = $_POST['password'];
                // if($taikhoan == "admin" && $password == "123"){
                //     $_SESSION['user'] = "ADMIN";
                //     $this -> view("admin/admin",
                //     [
                //         "user" => "hello",
                //         "title" => " ",
                //     ]);
                // }
                if(empty($_POST['taikhoan']) || empty($_POST['password'])){
                    $this -> view("login",[
                        "check" => "false",
                    ]
                );
                }else{
                    $result = $a -> dangnhap($taikhoan, $password);
                    if($result == true){
                        $_SESSION['user'] = strtoupper($taikhoan);
                        $abc = $a -> vaitro($taikhoan);
                        // $_SESSION['vaitro'] = json_decode($abc);
                        $this -> view("login", [
                        "check" => $result,
                        "abc" => $abc,
                    ]);
                    }     
                }         
            }
        }

        

        function dangxuat(){
            unset($_SESSION['user']);
            session_destroy();
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
    }
?>