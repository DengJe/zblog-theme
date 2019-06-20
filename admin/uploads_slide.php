<?php
require '../../../../zb_system/function/c_system_base.php';
require '../../../../zb_system/function/c_system_admin.php';
$zbp->Load();
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>
    <div id="divMain">
        <div class="divHeader" style="background-image: url(<?php echo $zbp->host ?>'zb_system/image/common/setting_32.png');">主题设置</div>
        <!--主题配置开始-->
        <div class="SubMenu">
            <?php pipyou_SubMenu(4);?>
        </div>
        <div class="content-box-content">
            <form action="save.php?act=update_slide_img" method="post">
                <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
                <table style="padding:0px;margin:0px;width:100%;" class="table_hover table_striped update_slide_img">

                    <tbody>
                    <tr>
                        <th>图片</th>
                        <th>图片文件</th>
                        <th>标题</th>
                        <th>跳转地址</th>
                        <th>操作</th>
                    </tr>
                    <?php
                    //                                $h= json_decode(,true);
                    $homeSliderArray = $zbp->Config('pipyou')->slide['slide_img'];
                    foreach ($homeSliderArray as $key => $value) {
                        ?>

                        <tr style="border: 1px solid red;">
                            <td>
                                <img src="<?php echo $value['img']?>" alt="" height="60" width="100">
                            </td>
                            <td>
                                <input class="uplod_img" type="text" name="slide_img[<?php echo $key ?>][img]" value="<?php echo $value['img'] ?>">
                            </td>
                            <td>
                                <input type="text"  name="slide_img[<?php echo $key ?>][title]" value="<?php echo $value['title'] ?>">
                            </td>
                            <td>
                                <input type="text" name="slide_img[<?php echo $key ?>][url]" value="<?php echo $value['url'] ?>">
                            </td>
                            <td>
                                <span class="delete_slide_img" data="<?php echo $key ?>" style="background-color: red;border: 1px solid red;">删除</span>
                            </td>
                        </tr>
                    <?php } ?>
                        <div style="margin: 10px 0px;display: inline-block;"><span id="add_slide_img" style="color: #ffffff;font-size: 1.1em;height: 29px;padding: 2px 18px 3px 18px;margin: 0 0.5em;background: #3a6ea5;border: 1px solid #3399cc;cursor: pointer;width: 70px;display: inline-block;">新增</span></div>
                    <div style="margin: 10px 0px;display: inline-block;"><button style="color: #ffffff;font-size: 1.1em;height: 29px;padding: 2px 18px 3px 18px;margin: 0 0.5em;background: #3a6ea5;border: 1px solid #3399cc;cursor: pointer;width: 70px;display: inline-block;">更新</button></div>
                    </tbody>
                </table>
            </form>
        </div>
    </div>

<?php
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/theme/'.$zbp->theme.'/admin/js/lib.upload.js"></script>';
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/theme/'.$zbp->theme.'/admin/js/lib.app.js"></script>';

?>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>
