<?php
    class sanpham extends db{
        function sanphambanchay(){
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,a.image,a.type_sp,a.thuonghieu,a.note_sp
            FROM sanpham a
            INNER JOIN loai b
            ON a.id_loai = b.id_loai
            WHERE b.ten_loai = 'Sản phẩm bán chạy'";
            $a = mysqli_query($this -> conn,$sql);
            $arr = mysqli_fetch_all($a);
            return json_encode($arr);
        }

        public function select_one($id){
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,a.image,b.ten_loai,c.ten_dm,a.type_sp,a.thuonghieu,a.note_sp
            FROM sanpham a
            INNER JOIN loai b
            ON a.id_loai = b.id_loai
            INNER JOIN danhmuc c
            ON a.id_dm = c.id_dm
            WHERE a.id_sp = '$id'";
            $query = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($query);
            return json_encode($arr);
        }

        public function selectSP(){
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,a.image,b.ten_loai,c.ten_dm,a.type_sp,a.thuonghieu,a.note_sp
            FROM sanpham a
            INNER JOIN loai b
            ON a.id_loai = b.id_loai
            INNER JOIN danhmuc c
            ON a.id_dm = c.id_dm
            ORDER BY a.id_dm
            ";
            $query = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($query);
            return json_encode($arr);
        }

        public function selectPTSP($trang){
            $sosp = "6";
            $begin = ($trang - 1)*$sosp;
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,a.image,b.ten_loai,c.ten_dm,a.type_sp,a.thuonghieu,a.note_sp
            FROM sanpham a
            INNER JOIN loai b
            ON a.id_loai = b.id_loai
            INNER JOIN danhmuc c
            ON a.id_dm = c.id_dm
            ORDER BY a.id_dm
            LIMIT $begin,$sosp
            ";
            $query = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($query);
            return json_encode($arr);
        }

        public function selectSPDM($danhmuc,$trang){
            $sosp = "6";
            $begin = ($trang - 1)*$sosp;
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,a.image,b.ten_loai,c.ten_dm,a.type_sp,a.thuonghieu,a.note_sp
            FROM sanpham a
            INNER JOIN loai b
            ON a.id_loai = b.id_loai
            INNER JOIN danhmuc c
            ON a.id_dm = c.id_dm
            WHERE c.id_dm = '$danhmuc'
            ORDER BY a.id_dm
            LIMIT $begin,$sosp";
            $query = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($query);
            return json_encode($arr);
        }

        public function selectSPTH($thuonghieu,$trang){
            $sosp = "6";
            $begin = ($trang - 1)*$sosp;
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,a.image,b.ten_loai,c.ten_dm,a.type_sp,a.thuonghieu,a.note_sp
            FROM sanpham a
            INNER JOIN loai b
            ON a.id_loai = b.id_loai
            INNER JOIN danhmuc c
            ON a.id_dm = c.id_dm
            WHERE a.thuonghieu = '$thuonghieu'
            ORDER BY a.id_dm
            LIMIT $begin,$sosp";
            $query = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($query);
            return json_encode($arr);
        }
        
        public function selectSPGT($gioitinh,$trang){
            $sosp = "6";
            $begin = ($trang - 1)*$sosp;
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,a.image,b.ten_loai,c.ten_dm,a.type_sp,a.thuonghieu,a.note_sp
            FROM sanpham a
            INNER JOIN loai b
            ON a.id_loai = b.id_loai
            INNER JOIN danhmuc c
            ON a.id_dm = c.id_dm
            WHERE a.type_sp = '$gioitinh'
            ORDER BY a.id_dm
            LIMIT $begin,$sosp
            ";
            $query = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($query);
            return json_encode($arr);
        }

        public function selectSPM($type){
            $sql = "SELECT a.id_sp,a.ten_sp,a.gia_sp,a.image,b.ten_loai,c.ten_dm,a.type_sp,a.thuonghieu,a.note_sp
            FROM sanpham a
            INNER JOIN loai b
            ON a.id_loai = b.id_loai
            INNER JOIN danhmuc c
            ON a.id_dm = c.id_dm
            WHERE a.type_sp = '$type'";
            $query = mysqli_query($this -> conn, $sql);
            $arr = mysqli_fetch_all($query);
            return json_encode($arr);
        }

        public function moveIMG($tmp,$file_path,$src,$size,$tensp,$giasp,$loai,$danhmuc,$thuonghieu,$note,$kieu){
            $kt =$this -> checkIMG($src,$file_path,$size);
            if($kt){
                if(move_uploaded_file($tmp,$file_path)){
                    $this -> insertSanPham($tensp,$giasp,$src,$thuonghieu,$note,$kieu,$loai,$danhmuc);
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }

        public function insertSanPham($tensp,$giasp,$src,$thuonghieu,$note,$kieu,$loai,$danhmuc){
            // $giasp = number_format($giasp,0,'.',',');
            $sql = "INSERT INTO `sanpham`(`ten_sp`, `gia_sp`, `image`, `id_loai`, `id_dm`, `type_sp`, `thuonghieu`, `note_sp`) VALUES ('$tensp',$giasp,'$src',$loai,$danhmuc,'$kieu','$thuonghieu','$note')";
            mysqli_query($this -> conn,$sql);
        }

        public function checkIMG($src,$file_path,$size){
            $check = true;
            // kiểm tra file "jpg jpeg gif"  bằng pathinfo() và in_array($kiemtra,arr[]);

            $nameType = strtolower(pathinfo($src,PATHINFO_EXTENSION));
            // echo $nameType;

            $arr_nameType = ['jpg','jpeg','gif'];
            if(!in_array($nameType,$arr_nameType)){
                @array_push($erro,"Không đúng định dạng file");
                $check = false;
            }

            // Kiểm tra dung lượng

            if($size > 5000000){
                array_push($erro,"Kích thước quá lớn");
                $check = false;

            }

            // Kiểm tra có phải file có bị trùng không file_exits(đường dẫn file trong thư mục mới)

            if(file_exists($file_path)){
                @array_push($erro,"File đã tồn tại");
                $check = false;

            }
            
            return $check;
        }

        public function erro($src,$file_path,$size){
            $arr =[];
            $nameType = strtolower(pathinfo($src,PATHINFO_EXTENSION));
            // echo $nameType;

            $arr_nameType = ['jpg','jpeg','gif'];
            if(!in_array($nameType,$arr_nameType)){
                array_push($arr,"Không đúng định dạng file");
            }

            // Kiểm tra dung lượng

            if($size > 5000000){
                array_push($arr,"Kích thước quá lớn");

            }

            // Kiểm tra có phải file có bị trùng không file_exits(đường dẫn file trong thư mục mới)

            if(file_exists($file_path)){
                array_push($arr,"File đã tồn tại");

            }
            return json_encode($arr);
        }

        public function updateSP($idsp,$tensp,$giasp,$src,$loai,$danhmuc,$kieu,$thuonghieu,$note,$tmp,$file_path,$hinhcu){
            $kt = false;
            if(isset($hinhcu)){
                @unlink($hinhcu);
            }
            if(move_uploaded_file($tmp,$file_path)){
                $sql = "UPDATE `sanpham`
                SET `ten_sp`='$tensp',`gia_sp`=$giasp,`image`='$src',`id_loai`=$loai,`id_dm`=$danhmuc,`type_sp`='$kieu',`thuonghieu`='$thuonghieu',`note_sp`='$note'
                WHERE `id_sp` = '$idsp'";
                if(mysqli_query($this-> conn,$sql)){
                    $kt = true;
                }
            }
            return json_encode($kt);
        }

        public function xoasp($id){
            $check = false;
            $sql = "DELETE FROM `sanpham` WHERE `id_sp` = $id";
            if(mysqli_query($this->conn,$sql)){
                $check = true;
            }
            return json_encode($check);
        }

        public function find($ten_sp){
            $sql = "SELECT * FROM `sanpham` ";
        }

        public function numrowAll(){
            $sql = "SELECT * FROM `sanpham`";
            $num = mysqli_num_rows(mysqli_query($this -> conn,$sql));
            return $num;
        }

        public function numrowDM($dm){
            $sql = "SELECT * FROM `sanpham` where id_dm = '$dm'";
            $num = mysqli_num_rows(mysqli_query($this -> conn,$sql));
            return $num;
        }

        public function numrowTH($thuonghieu){
            $sql = "SELECT * FROM `sanpham` where thuonghieu = '$thuonghieu'";
            $num = mysqli_num_rows(mysqli_query($this -> conn,$sql));
            return $num;
        }

        public function numrowGT($GT){
            $sql = "SELECT * FROM `sanpham` where type_sp = '$GT'";
            $num = mysqli_num_rows(mysqli_query($this -> conn,$sql));
            return $num;
        }

        public function findSP($tensp){
            $sql = "SELECT * FROM `sanpham` where `ten_sp` like'%$tensp%'";
            return json_encode(mysqli_fetch_all(mysqli_query($this -> conn, $sql)));
        }

        public function slfind($tensp){
            $sql = "SELECT * FROM `sanpham` where `ten_sp` like'%$tensp%'";
            $num = mysqli_num_rows(mysqli_query($this -> conn,$sql));
            return $num;
        }
    }
?>