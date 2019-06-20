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
        <?php pipyou_SubMenu(1);?>
    </div>
    <form action="save.php?act=config" method="post" enctype="multipart/form-data">
        <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
        <table style="padding:0px;margin:0px;width:100%;">
        <tbody>
        <tr>
            <td>
               <p><b>网站LOGO</b></p>
            </td>
            <td>
                <input class="uplod_img" type="text" name="logo" value="<?php echo $zbp->Config('pipyou')->logo;?>">
            </td>
            <td>
                <p>填写网站LOGO</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><b>作者头像</b></p>
            </td>
            <td>
                <input class="uplod_img" type="text" name="writer" value="<?php echo $zbp->Config('pipyou')->writer;?>">
            </td>
            <td>
                <p>填写网站作者头像</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><b>网站备案号ICP</b></p>
            </td>
            <td>
                <input type="text" name="icp" value="<?php echo $zbp->Config('pipyou')->icp;?>">
            </td>
            <td>
                <p>域名备案会有备案号</p>
            </td>
        </tr>
        <tr>
            <td>
                <p><b>公告</b></p>
            </td>
            <td>

                <input type="text" name="notice_values" value="<?php echo $zbp->Config('pipyou')->notice_values;?>">
            </td>
            <td>
                <input type="radio" name="notice_status" value="1" <?php echo $zbp->Config('pipyou')->notice_status == 1 ? 'checked':'';?>/>开启&nbsp;
                <input type="radio" name="notice_status" value="0" <?php echo $zbp->Config('pipyou')->notice_status == 0 ? 'checked':'';?>/>关闭
                <note>填写文章id 例如：1,2,3</note>
            </td>
        </tr>

        <tr>
            <td><p><b>支付宝打赏码</b></p></td>
            <td><input class="uplod_img" type="text" name="alipay_code" value="<?php echo $zbp->Config('pipyou')->alipay_code;?>"></td>
            <td>上传支付宝打赏码</td>
        </tr>
        <tr>
            <td><p><b>微信打赏码</b></p></td>
            <td><input class="uplod_img" type="text" name="weixin_code" value="<?php echo $zbp->Config('pipyou')->weixin_code;?>"></td>
            <td>上传微信打赏码</td>
        </tr>
        <tr>
            <td><p><b>自定义页面(导读)</b></p></td>
            <td><input type="text" name="guide_category_id" value="<?php echo $zbp->Config('pipyou')->guide_category_id;?>"></td>
            <td><p>填写需要显示的分类id用英文‘,’隔开例如：1,2,3</p></td>
        </tr>
        <tr>
            <td><p><b>自定义页面(导读)每种分类显示列表个数</b></p></td>
            <td><input type="number" name="guide_list_num" value="<?php echo $zbp->Config('pipyou')->guide_list_num;?>"></td>
            <td><p></p></td>
        </tr>
        <tr>
            <td><p><b>网站分类导航条</b></p></td>
            <td><textarea name="category_code" rows="12" cols="60"><?php echo $zbp->Config('pipyou')->category_code;?></textarea></td></td>
            <td><p>例如填写代码</br>
                    <?php echo htmlspecialchars('<li><a href="#"><i class="czs-buy"></i>项目</a></li>'); ?></br>
                 <?php echo htmlspecialchars('<li><a href="#">项目</a></li>');?>
                </p></td>
        </tr>
        <tr>
            <td><p><b>网站分类导航条开关</b></p></td>
            <td><input type="text"  name="category_code_status" class="checkbox" value="<?php echo $zbp->Config('pipyou')->category_code_status;?>" style="display: none;"></td>
            <td><p>点击开启或关闭</p></td>
        </tr>
        <tr>
            <td><p><b>网站底部中部位置</b></p></td>
            <td><textarea name="footer_code_one" rows="12" cols="60"><?php echo $zbp->Config('pipyou')->footer_code_one;?></textarea></td>
            <td><p>填写文字或代码</p></td>
        </tr>
        <tr>
            <td><p><b>网站底最右部位置</b></p></td>
            <td><textarea name="footer_code_two" rows="12" cols="60"><?php echo $zbp->Config('pipyou')->footer_code_two;?></textarea></td>
            <td><p>填写文字或代码</p></td>
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


<?php require $blogpath . 'zb_users/theme/pipyou/admin/footer.php'; ?>
