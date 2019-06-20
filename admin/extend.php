<?php
require '../../../../zb_system/function/c_system_base.php';
require '../../../../zb_system/function/c_system_admin.php';
$zbp->Load();
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>

    <!--<link rel="stylesheet" rev="stylesheet" href="../source/assets/css/admin.css" type="text/css" media="all"/>-->

    <div id="divMain">
    <div class="divHeader" style="background-image: url(<?php echo $zbp->host ?>'zb_system/image/common/setting_32.png');">主题设置</div>
    <!--主题配置开始-->
    <div class="SubMenu">
        <?php pipyou_SubMenu(10);?>
    </div>
    <table style="padding:0px;margin:0px;width:100%;">
        <tbody>
        <tr>
            <td>
                <p><b>重置主题</b></p>
            </td>
            <td>
                <a href="./save.php?act=reset" style="background-color: red;line-height: 90px;color: white;padding: 10px;">点击重置主题</a>
            </td>
            <td>
                <p>重置当前主题</p>
            </td>
        </tr>
        </tbody>
    </table>
    </div><?php
/**
 * Created by PhpStorm.
 * User: you
 * Date: 2019/2/14
 * Time: 15:10
 */