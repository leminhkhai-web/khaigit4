<?php
require_once './administrator/elements_LMK/mod/loaihangCls.php';
?>
<a href="./index.php">
    <div class="itemsmenu">
        <img class="imgmenu" src="./administrator/img_LMK/home1.png">Home
    </div>
</a>
<?php
$obj = new loaihang();
$list_loaihang = $obj->LoaihangGetAll();

if (is_array($list_loaihang) || is_object($list_loaihang)) {

    foreach ($list_loaihang as $v) {
        ?>
        <a href="./index.php?reqView=<?php echo $v->idloaihang; ?>">
            <div class="itemsmenu">
                <img src="data:image/png;base64, <?php echo ($v->hinhanh); ?>" alt="" class="imgmenu">
                <?php echo ($v->tenloaihang); ?>
            </div>
        </a>
        <?php
    }
}
else {
    echo "";
}

?>