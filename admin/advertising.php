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
        <?php pipyou_SubMenu(5);?>
    </div>
    <form action="save.php?act=advertising" method="post" enctype="multipart/form-data">
        <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
        <table style="padding:0px;margin:0px;width:100%;">
            <tbody>
            <tr>
                <th>AD编号</th>
                <th>广告代码</th>
                <th>是否开启</th>
                <th>说明</th>
            </tr>
            <tr>
                <td>
                    <p><b>联盟广告js代码</b></p>
                </td>
                <td>
                    <textarea name="ad_one" id="" cols="60" rows="6"><?php echo $zbp->Config('pipyou')->ad_one;?></textarea>
                </td>
                <td><input type="text"  name="ad_one_status" class="checkbox" value="<?php echo $zbp->Config('pipyou')->ad_one_status;?>" style="display: none;"></td>
                <td>
                    <p>首页最新文章位置</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>联盟广告js代码</b></p>
                </td>
                <td>
                    <textarea name="ad_two" id="" cols="60" rows="6"><?php echo $zbp->Config('pipyou')->ad_two;?></textarea>
                </td>
                <td>
                    <input type="text"  name="ad_two_status" class="checkbox" value="<?php echo $zbp->Config('pipyou')->ad_two_status;?>" style="display: none;">
                </td>
                <td>
                    <p>首页底部</p>
                </td>
            </tr>
            <tr>
                <td><p><b>操作</b></p></td>
                <td><input type="submit" value="更新"></td>
                <td></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </form>
</div>

<?php
require './footer.php';
?>
