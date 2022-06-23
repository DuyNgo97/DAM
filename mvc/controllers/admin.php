<?php
    class admin extends controller{
        public function sayhi(){

            //model
            $a = $this -> model('user');
            //view

            $this -> view("admin",
                ["user"=>"wellcome",
                "title"=>"QUẢN LÝ NGƯỜI DÙNG",
                 "arrUS" => $a -> Getuser('id_user'),   
            ],
        );
        }

        public function viewQLND(){
            //model
            $a = $this -> model('user');
            //view
            $this -> view("admin",
                ["user"=>"quanlyuser",
                "title"=>"QUẢN LÝ NGƯỜI DÙNG",
                 "arrUS" => $a -> Getuser('id_user'),   
            ]);
        }

        public function viewEdit($id){
            // model
            $a = $this -> model('user');
            //view
            $this -> view("admin",
            [
                "user" => "editUser",
                "title" => "CẬP NHẬT USER",
                "arrUS" => $a -> EditUser($id),
            ]);
        }

        public function updateUser(){
            if(isset($_POST['btn-capnhat'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $diachi = $_POST['diachi'];
                $taikhoan = $_POST['taikhoan'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $vaitro = strtoupper($_POST['vaitro']);
                // model
                $a = $this ->model('user');

                //view

                $this -> view("admin",
                [
                    "user" => "resultUpdateUS",
                    "title" => "",
                    "kq" => $a -> update($id,$name,$diachi,$taikhoan,$password,$email,$vaitro),
                ]);
            }
        }

        public function viewXoaUS(){
            //view
            $this -> view("admin",
            [
                "user" => "xoaUS",
                "title" => "",
            ]
            );
        }
        public function deleteUS($id){
            //model
            $a = $this -> model("user");

            //view

            $this -> view("admin",
            [
                "user" => 'quanlyuser',
                "title" => "QUẢN LÝ THÀNH VIÊN",
                "deleteUS" => $a -> deleteUS($id),
                "arrUS" => $a -> Getuser('id_user'),
            ]);
        }

        public function viewaddUser(){

            //model
            $a = $this -> model('user');

            //view

            $this -> view("admin",
                ["user"=>"addUS",
                "title"=>"THÊM THÀNH VIÊN",
                //  "arrUS" => $a -> addUser(),   
            ],
        );
        }
        public function insertUser(){
            if(isset($_POST['btn-submit'])){
                $taikhoan = $_POST['username'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $vaitro = isset($_POST['vaitro'])? $_POST['vaitro'] : "USER";
                //model
                $a = $this -> model('user');
                // view
                $this -> view("admin",
                ["user"=>"addUS",
                "title"=>"THÊM THÀNH VIÊN",
                "kq"=>$a -> addUser($taikhoan,$email,$password,$vaitro),
                ]
            );
            }
        }

        public function viewDanhMuc(){
            //data
            $a = $this -> model("danhmuc");
            //view

            $this -> view("admin",
            [   
                "user" => "quanlydanhmuc",
                "title" => "DANH MỤC SẢN PHẨM",
                "danhmuc" => $a ->getDM(),
            ]
            );
        }

        public function deleteDanhMuc($id){
            //data
            $a = $this -> model("danhmuc");

            //view
            $this -> view("admin",
                [   
                "user" => "quanlydanhmuc",
                "title" => "DANH MỤC SẢN PHẨM",
                // "kq" => $a -> addDM($loaidm,$tendm),
                "check" => $a -> xoaDM($id),
                "danhmuc" => $a -> getDM(),
                ]
                );
        }

        public function addDanhMuc(){
            if(isset($_POST['btn-capnhat'])){
                $tendm = $_POST['tendm'];
                //data
                $a = $this -> model("danhmuc");
                //view

                $this -> view("admin",
                [   
                "user" => "quanlydanhmuc",
                "title" => "DANH MỤC SẢN PHẨM",
                "kq" => $a -> addDM($tendm),
                "danhmuc" => $a -> getDM(),
                ]
                );
            }
        }

        public function ViewAddSanPham(){

            //model

            $danhmuc = $this -> model("danhmuc");
            $loai = $this -> model("loai");

            //view
            $this -> view(
                "admin",
                [
                    "user"=>"themsanpham",
                    "title" => "THÊM SẢN PHẨM",
                    "arrDM" => $danhmuc -> getDM(),
                    "arrLoai" => $loai -> getLoai(),
                ]
            );
        }

        public function AddSanPham(){
            if(isset($_POST['btn-capnhat'])){
                $tensp = $_POST['tensp'];
                // $giacu = number_format($_POST['giacu'],0,'.',',');
                $giasp = $_POST['giasp'];
                $src = $_FILES['image']['name'];
                $note = $_POST['note'];
                $kieu = strtoupper($_POST['kieu']);
                $thuonghieu = $_POST['thuonghieu'];
                $danhmuc = $_POST['danhmuc'];
                $loai = $_POST['loai'];
                $file_path = "./public/uploadIMG/".$src;
                $size = $_FILES['image']['size'];
                $tmp = $_FILES['image']['tmp_name'];
                //model

                    $danhmuc1 = $this -> model("danhmuc");
                    $loai1 = $this -> model("loai");
                    $a = $this -> model("sanpham");
                    // $file_path = $a -> src($img);
                

                //view
                    $this -> view("admin",
                        [
                            "user"=>"themsanpham",
                            "title" => "THÊM SẢN PHẨM",
                            "erro" => $a -> erro($src,$file_path,$size),
                            "check" => $a -> moveIMG($tmp,$file_path,$src,$size,$tensp,$giasp,$loai,$danhmuc,$thuonghieu,$note,$kieu),
                            "arrDM" => $danhmuc1 -> getDM(),
                            "arrLoai" => $loai1 -> getLoai(),
                        ]);
            }
        }
        
        public function viewquanlysanpham(){
                
            //model

            $a = $this -> model('sanpham');

            //view
            $this -> view("admin",
            [
                "title"=> "QUẢN LÝ SẢN PHẨM",
                "user" => "quanlysanpham",
                "sanpham" => $a -> selectSP(),
            ]);
        }

        public function viewEditSanPham($id){

            //model

            $a = $this -> model('sanpham');
            $danhmuc1 = $this -> model("danhmuc");
            $loai1 = $this -> model("loai");

            //view
            $this -> view("admin",
            [
                "title"=> "QUẢN LÝ SẢN PHẨM",
                "user" => "editSP",
                "arrDM" => $danhmuc1 -> getDM(),
                "arrLoai" => $loai1 -> getLoai(),
                "sanpham" => $a -> select_one($id),
            ]);
        }

        public function updateSanPham(){
            if(isset($_POST['btn-capnhat'])){
            $idsp = $_POST['idsp'];
            $tensp = $_POST['tensp'];
            $giasp = $_POST['giasp'];
            $kieu = isset($_POST['kieu'])?$_POST['kieu']: "KHÁC";
            $danhmuc = $_POST['danhmuc'];
            $loai = $_POST['loai'];
            $thuonghieu = $_POST['thuonghieu'];
            $src = $_FILES['hinhmoi']['name'];
            $note = $_POST['note'];
            $tmp = $_FILES['hinhmoi']['tmp_name'];
            $size = $_FILES['hinhmoi']['size'];
            $file_path = "./public/uploadIMG/".$src;
            $hinhcu = $_POST['hinhcu'];
            //model

            $danhmuc1 = $this -> model("danhmuc");
            $loai1 = $this -> model("loai");
            $a = $this -> model('sanpham');

            //view
            $this -> view("admin",
            [
                "title" => "CẬP NHẬT SẢN PHẨM",
                "user" => "editSP",
                "arrDM" => $danhmuc1 -> getDM(),
                "arrLoai" => $loai1 -> getLoai(),
                "sanpham" => $a -> select_one($idsp),
                "kt" => $a -> updateSP($idsp,$tensp,$giasp,$src,$loai,$danhmuc,$kieu,$thuonghieu,$note,$tmp,$file_path,$hinhcu),
            ]);
            }     
        }

        public function deleteSanPham($id){
            //model 
            $a = $this-> model('sanpham');
            //view
            $this -> view("admin",
            [   
                "title" => "",
                "user" => "quanlysanpham",
                "kqXoa" => $a -> xoasp($id),
                "sanpham" => $a -> selectSP(),
            ]);
            
        }
    }
?>