<div><img class="iconimg" src="./img_LMK/anhquanly.png" alt="">Quản lý loại hàng</div>
<hr>
<div class="title_mod"><img class="iconimg" src="./img_LMK/themoi.png"/>Thêm loại hàng</div>
<div class="content_mod">
    <form name="newloaihang" id="formadd" method="post" enctype="multipart/form-data" action="./elements_LMK/mloaihang/loaiangAct.php?reqact=addnew">
        <table>
            <tr>
                <td>Tên loại hàng:</td>
                <td><input type="text" name="tenloaihang"></td>
            </tr>
            <tr>
                <td>Tên hình ảnh:</td>
                <td><input type="text" name="tenhinhanh"></td>
            </tr>
            <tr>
                <td>Hình ảnh:</td>
                <td><input type="file" name="fileimage"></td>
            </tr>
            <tr>
                <td><input type="submit" id="btnsubmit" value="Tạo mới"></td>
                <td><input type="reset" value="Làm lại"><b id="noteForm"></b></td>
            </tr>
        </table>
    </form>
</div>
<hr>
<?php
require './elements_LMK/mod/loaihangCls.php';
?>
<div class="title_mod"><img class="iconimg" src="./img_LMK/list.png"/>Danh sách loại hàng</div>
<div class="content_mod">
    <?php
    $obj = new loaihang();
    $list_loaihang = $obj->LoaihangGetAll();
    $length = count($list_loaihang);
    ?>
    <p>Trong bảng có<b><?php echo $length;?></b></p>
    <?php
    if ($length > 0) {
        ?>
        <table border="1">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Tên loại hàng</th>
                    <th><img src="./img_LMK/themoi.png" class="iconimg"></th>
                    <th><img src="./img_LMK/hinhanh.png" class="iconimg"></th>
                    <th><img src="./img_LMK/tool.png" class="iconimg"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($list_loaihang as $v) {
                ?>
                    <tr>
                        <td><?php echo $v->idloaihang;?></td>
                        <td><?php echo $v->tenloaihang;?></td>
                        <td><?php echo $v->tenhinhanh;?></td>
                        <td><img class="imgtable" src="data:image/png;base64,<?php echo ($v->hinhanh);?>" alt=""></td>
                        <td>
                            <?php
                            if (isset($_SESSION['ADMIN'])) {
                            ?>
                                <a href="./elements_LMK/mloaihang/loaiangAct.php?reqact=deleteloaihang&idloaihang=<?php echo $v->idloaihang; ?>">
                                    <img class="iconimg" src="./img_LMK/anhxoa.png" alt="">
                                </a>
                            <?php
                            }
                            else {
                            ?>
                                <img class="iconimg" src="./img_LMK/anhxoa.png" alt="">
                            <?php
                            }
                            ?>
                            <temploaihang class="btnupdateloaihang" value="<?php echo $v->idloaihang;?>">
                                <img class="iconimg" src="./img_LMK/khoiphuc.png" alt="">
                            </temploaihang>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    <?php
    }
    ?>
</div>