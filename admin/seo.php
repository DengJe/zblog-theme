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
        <?php pipyou_SubMenu(2);?>
    </div>
    <form action="save.php?act=seo" method="post" enctype="multipart/form-data">
        <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
        <table style="padding:0px;margin:0px;width:100%;">
            <tbody>
            <tr>
                <td>
                    <p><b>网站SEO标题</b></p>
                </td>
                <td>
                    <textarea name="seo_title" id="" cols="60" rows="3"><?php echo $zbp->Config('pipyou')->seo_title;?></textarea>
                </td>
                <td>
                   <p>填写网站SEO副标题</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>网站SEO副标题</b></p>
                </td>
                <td>
                    <textarea name="seo_subtitle" id="" cols="60" rows="3"><?php echo $zbp->Config('pipyou')->seo_subtitle;?></textarea>
                </td>
                <td>
                    <p>填写网站SEO副标题</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p><b>网站SEO关键词</b></p>
                </td>
                <td>
                    <textarea name="seo_keyword" id="" cols="60" rows="3"><?php echo $zbp->Config('pipyou')->seo_keyword;?></textarea>
                </td>
                <td>
                    <p>填写网站SEO关键词</p>
                </td>
            </tr>
            <tr>
                <td><p><b>网站SEO描述</b></p></td>
                <td>
                    <textarea name="seo_describe" id="" cols="60" rows="3"><?php echo $zbp->Config('pipyou')->seo_describe;?></textarea>
                </td>
                <td><p>填写网站SEO描述</p></td>
            </tr>
            <tr>
                <td><p><b>操作</b></p></td>
                <td><input type="submit" value="更新"></td>
                <td></td>
            </tr>
            </tbody>
        </table>
    </form>
</div>

<?php
require './footer.php';
?>
