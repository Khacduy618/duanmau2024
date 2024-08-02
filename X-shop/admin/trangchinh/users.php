<table>
    <?php
        foreach ($user as $u) {
            extract($u);
            $hinh = $UPLOAD_URL . $Hinh;
        
    ?>
    <tr>
        <td width="60px">
            <div class="imgBx"><img src="<?=$hinh?>" alt=""></div>
        </td>
        <td>
            <h4><?=$Ho . " " . $Ten ?> <br> <span><?=($GioiTinh == "0")?"Nữ":"Nam";?></span></h4>
        </td>
    </tr>

    <?php
    }
    ?>
</table>