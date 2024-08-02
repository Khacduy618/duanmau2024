<?php
require_once '../../global.php';
    if(strlen($MESSAGE)){
        echo '<h5>'.$MESSAGE.'</h5>';
    }
?>
<div class="row justify-content-center">
    <form action="capnhatTK.php" class="row m-4 container box" method="post" enctype="multipart/form-data">
        <div class="left-upload-img">
            <div class="img-upload">
                <div class="img">
                    <div class="font">
                        <img src="<?=$UPLOAD_URL.$_SESSION['nguoidung']['Hinh']?>" alt="">
                    </div>
                    <div class="back">
                        <img src="<?=$UPLOAD_URL.$_SESSION['nguoidung']['Hinh']?>" alt="">
                    </div>
                </div>
            </div>
            <div class="upload-file">
                <input type="file" class="input-file" name="Hinh" id="upload-img">
                <label for="upload-img">Upload your picture</label>
            </div>
            
        </div>
        <div class="right-input-info-update-info">
            <div class="info-person">
                <div class="form-group">
                    <label for="first-name">Họ:</label>
                    <input type="text" class="form-control" name="Ho" value="<?=$_SESSION['nguoidung']['Ho']?>" id="first-name" required>
                </div>
                <div class="form-group">
                <label  for="middle-name">Tên:</label>
                <input type="text" class="form-control" name="Ten" value="<?=$_SESSION['nguoidung']['Ten']?>" id="middle-name" required>
                </div>    
                <div class="form-group">    
                    <label  for="last-name">Email:</label>
                    <input type="email" class="form-control" name="Email" value="<?=$_SESSION['nguoidung']['Email']?>" id="last-name" required>
                </div>
                <div class="form-group">    
                    <label  for="SDT">Số điện thoại:</label>
                    <input type="text" class="form-control" name="SDT" value="<?=$_SESSION['nguoidung']['SDT']?>" id="SDT" required>
                </div>
                <div class="form-group">    
                    <label  for="DiaChi">Địa chỉ:</label>
                    <input type="text" class="form-control" name="DiaChi" value="<?=$_SESSION['nguoidung']['DiaChi']?>" id="DiaChi" required>
                </div>
                <div class="form-group">
                    <label for="GioiTinh">Giới tính:</label>
                    <div class="row col-lg-4 justify-content-between">
                            <div class="row col-6 align-items-center justify-content-between">
                                <input  id="GioiTinh1" type="radio" name="GioiTinh"
                                <?php if (isset($_SESSION['nguoidung']['GioiTinh']) && $_SESSION['nguoidung']['GioiTinh']=="1") echo "checked";?>
                                value="1">
                                <label class="m-0" for="GioiTinh1">Nam</label>
                            </div>
                            <div class="row col-5 align-items-center justify-content-between">
                                <input id="GioiTinh2" type="radio" name="GioiTinh"
                                <?php if (isset($_SESSION['nguoidung']['GioiTinh']) && $_SESSION['nguoidung']['GioiTinh']=="0") echo "checked";?>
                                value="0">
                                <label class="m-0" for="GioiTinh2">Nữ</label>
                            </div>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <div class="update">
                    <input class="btn btn-success" type="submit" name="update-tk" >
                </div>
            </div>
        </div>
          <input type="hidden" name="Quyen_ID" value="<?=$_SESSION['nguoidung']['Quyen_ID']?>">
          <input type="hidden" name="TaiKhoan" value="<?=$_SESSION['nguoidung']['TaiKhoan']?>">
          <input type="hidden" name="MatKhau" value="<?=$_SESSION['nguoidung']['MatKhau']?>">
          <input type="hidden" name="TrangThai" value="<?=$_SESSION['nguoidung']['TrangThai']?>">
          <input type="hidden" name="MaND" value="<?=$_SESSION['nguoidung']['MaND']?>">
    </form>
</div>