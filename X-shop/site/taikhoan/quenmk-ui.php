<?php
    if(strlen($MESSAGE)){
        echo "<h5>" . $MESSAGE . "</h5>";
    }
?>
<div class="row justify-content-center">
    <form action="quenmatkhau.php" class="col-4 m-4 " method="post">
        <div class="form-group">
                <label for="TaiKhoan">Tài khoản</label>
                <input type="text" class="form-control" id="TaiKhoan" name="TaiKhoan" required>
        </div>
        <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" required>
        </div>
        <button type="submit" class="btn btn-primary" name="btn_forgot">Gửi yêu cầu</button>
    </form>
</div>