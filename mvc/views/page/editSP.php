<?php
    if(isset($data['sanpham'])){
        $sanpham = json_decode($data['sanpham']);
        $loai = json_decode($data['arrLoai']);
        $danhmuc = json_decode($data['arrDM']);
        // var_dump($sanpham);
        // var_dump($loai);
        // var_dump($danhmuc);
    }
    if(isset($data['kt'])){
        $kt = json_decode($data['kt']);
        if($kt){
            echo '<h1>Cập nhật thành công!</h1>';
        }else{
            echo '<h1>Cập nhật thất bại!</h1>';
        }
    }
?>
<form action="admin/updateSanPham" method="POST" enctype="multipart/form-data">
        <caption>Sửa Sản Phẩm</caption>
        <table>
            <tr>
                <td>ID</td>
                <td><input type="text" name="idsp" readonly='readonly' value="<?= $sanpham[0][0] ?>"></td>
            </tr>
            <tr>
                <td>Tên sản phẩm</td>
                <td><input type="text" name="tensp" value="<?= $sanpham[0][1] ?>"></td>
            </tr>
            <tr>
                <td>Giá sản phẩm</td>
                <td><input type="text" name="giasp" value="<?= $sanpham[0][2] ?>"> VNĐ</td>
            </tr>
            <tr>
                <td>Type</td>
                <td>
                <select name="kieu" id="">
                    <option value="NAM">Nam</option>
                    <option value="NỮ">Nữ</option>
                    <option value="KHÁC">Khác</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Danh mục</td>
                <td>
                <select name="danhmuc" id="">
                <?php
                    foreach ($danhmuc as $key => $arr) { ?>
                    <option value="<?= $arr[0] ?>"><?= $arr[1] ?></option>      
                    <?php }
                ?>
                </select>
                </td>
            </tr>
            <tr>
                <td>Loại</td>
                <td>
                <select name="loai" id="">
                    <?php
                    foreach ($loai as $key => $arr) { ?>
                    <option value="<?= $arr[0] ?>"><?= $arr[1] ?></option>      
                    <?php }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Thương hiệu</td>
                <td>
                    <select name="thuonghieu" id="">
                    <option value="SUNRISE">SUNRISE</option>
                    <option value="RADO">RADO</option>
                    <option value="ORION">ORION</option>
                    <option value="KHÁC">KHÁC</option>
                    <option value="DW">DW</option>
                </select>
                </td>
            </tr>
            <tr>
                <td>Hình cũ</td>
                <td><img src="./public/uploadIMG/<?= $sanpham[0][3] ?>" width="200px" height="100px" alt=""></td>
            </tr>
            <tr style="display: none">
                <td>Link cũ: <input type="text" value="./public/uploadIMG/<?= $sanpham[0][4] ?>" name="hinhcu" placeholder="./public/uploadIMG/<?= $sanpham[0][4] ?>"></td>  
            </tr>
            <tr>
                <td>Hình mới</td>
                <td><input type="file" name="hinhmoi"></td>
            </tr>
            <tr>
                <td>Note</td>
                <td><textarea name="note" id="" cols="50" rows="5"></textarea></td>
            </tr>
            <tr>
                <td align="center" colspan="2"><button type="submit" name="btn-capnhat">Cập Nhật</button></td>
            </tr>
        </table>
</form>