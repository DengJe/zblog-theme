<?php
require '../../../../zb_system/function/c_system_base.php';
require '../../../../zb_system/function/c_system_admin.php';
$zbp->Load();
require $blogpath . 'zb_system/admin/admin_header.php';
require $blogpath . 'zb_system/admin/admin_top.php';
?>

<div id="divMain">
    <div class="divHeader" style="background-image: url(<?php echo $zbp->host ?>'zb_system/image/common/setting_32.png');">主题个性化</div>
    <!--主题配置开始-->
    <div class="SubMenu">
        <?php pipyou_SubMenu(6);?>
    </div>
    <form action="save.php?act=diy" method="post" enctype="multipart/form-data">
        <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
        <table style="padding:0px;margin:0px;width:100%;">
            <tbody>
            <tr>
                <td>
                    <p><b>网站背景</b></p>
                </td>
                <td>
                    <input type="text" name="bg_image" value="<?php echo $zbp->config('pipyou')->bg_image;?>">
                </td>
                <td>
                    <p>填写图片url地址，如果发现加载缓慢可以使用图床https://sm.ms/</p>
                </td>
            </tr>
            <tr>
                <td><p><b>背景颜色</b></p></td>
                <td>
                    <select name="background_color_code" style="width: 185px;">
                        <option value="to right, #fbc2eb , #A6C1ee" <?php if($zbp->Config('pipyou')->background_color_code =='to right, #fbc2eb , #A6C1ee'){?>selected="selected"<?php }?>>1</option>
                        <option value="to right, #bbd5ff , #e0c3ef" <?php if($zbp->Config('pipyou')->background_color_code =='to right, #bbd5ff , #e0c3ef'){?>selected="selected"<?php }?>>2</option>
                        <option value="to right, #108dc7 , #ef8e38" <?php if($zbp->Config('pipyou')->background_color_code =='to right, #108dc7 , #ef8e38'){?>selected="selected"<?php }?>>3</option>
                        <option value="to right, #7f7fd5 , #86a8e7,#91eae4" <?php if($zbp->Config('pipyou')->background_color_code =='to right, #7f7fd5 , #86a8e7,#91eae4'){?>selected="selected"<?php }?>>4</option>
                    </select>
                </td>
                <td>
                    <ul>
                        <li style="background: linear-gradient(to right, #fbc2eb , #A6C1ee);width: 30px;height: 30px;border-radius: 50%;text-align: center;margin:6px;padding-top: 7px;float:left;"><span>1</span></li>
                        <li style="background: linear-gradient(to right, #bbd5ff , #e0c3ef);width: 30px;height: 30px;border-radius: 50%;text-align: center;margin:6px;padding-top: 7px;float:left;"><span>2</span></li>
                        <li style="background: linear-gradient(to right, #108dc7 , #ef8e38);width: 30px;height: 30px;border-radius: 50%;text-align: center;margin:6px;padding-top: 7px;float:left;"><span>3</span></li>
                        <li style="background: linear-gradient(to right, #7f7fd5 , #86a8e7,#91eae4);width: 30px;height: 30px;border-radius: 50%;text-align: center;margin:6px;padding-top: 7px;float:left;">4</span></li>
                    </ul>
                </td>
            </tr>
            <tr>
                <td><p><b>网站背景图开关</b></p></td>
                <td><input type="text"  name="background_status" class="checkbox" value="<?php echo $zbp->Config('pipyou')->background_status;?>" style="display: none;"></td>
                <td><p>点击开启或关闭</p></td>
            </tr>
            <tr>
                <td><p><b>网站背景颜色开关</b></p></td>
                <td><input type="text"  name="background_color_status" class="checkbox" value="<?php echo $zbp->Config('pipyou')->background_color_status;?>" style="display: none;"></td>
                <td><p>点击开启或关闭</p></td>
            </tr>
            <tr>
                <td><p><b>全局透明开关</b></p></td>
                <td><input type="text"  name="opacity_status" class="checkbox" value="<?php echo $zbp->Config('pipyou')->opacity_status;?>" style="display: none;"></td>
                <td><p>点击开启或关闭</p></td>
            </tr>
            <tr>
                <td><p><b>首页文章列表显示样式</b></p></td>
                <td>列表式：<input type="radio" name="home_article_format" value="1" <?php echo $zbp->Config('pipyou')->home_article_format == 1 ? 'checked':'';?>/>   块状式：<input type="radio" name="home_article_format" value="2" <?php echo $zbp->Config('pipyou')->home_article_format == 2 ? 'checked':'';?>/></td>
                <td><p>点击选择</p></td>
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
