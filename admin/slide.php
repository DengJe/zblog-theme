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
        <?php pipyou_SubMenu(3);?>
    </div>
    <div class="content-box-content">
        <form action="save.php?act=slide" method="post">
            <?php if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}?>
            <table style="padding:0px;margin:0px;width:100%;" class="table_hover table_striped">
        <tbody>
        <tr>
            <td class="td25">
                <p><b>是否开启图册</b></p>
            </td>
            <td>
                <label><input name="status" type="radio" value="1" <?php echo $zbp->Config('pipyou')->slide['status']== 1 ? "checked":""; ?>/>是 </label>
                <label><input name="status" type="radio" value="0" <?php echo $zbp->Config('pipyou')->slide['status']== 0 ? "checked":""; ?>/>否</label>
            </td>
        </tr>
        <tr>
            <td>
                <b>选择轮播图</b>
            </td>
            <td>
                <label><input name="format" type="radio" value="0" <?php echo $zbp->Config('pipyou')->slide['format']== 0 ? "checked":""; ?>/>从文章选取</label>
                <label><input name="format" type="radio" value="1" <?php echo $zbp->Config('pipyou')->slide['format']== 1 ? "checked":""; ?>/>独立上传 </label>
            </td>
        </tr>
        <tr>
            <td>
                <b>
                    文章id
                </b>
                <note>
                    例如：1,2,3
                </note>
            </td>
            <td>
                <input type="text" name="article_id" value="<?php echo $zbp->Config('pipyou')->slide['article_id'];?>">
            </td>
        </tr>
        <tr>
            <td><p><b>首页右侧第一张图</b></p></td>
            <td>
                <table>
                    <tbody>
                    <tr>
                        <td>
                            图片
                        </td>
                        <td>
                            <img src="<?php echo $zbp->Config('pipyou')->slide['img_one']['img']; ?>" alt="" height="60" width="100">
                        </td>
                    </tr>
                    <tr>
                        <td>图片文件</td>
                        <td>
                            <input type="text"  name="img_one[img]" value="<?php echo $zbp->Config('pipyou')->slide['img_one']['img']; ?>" class="uplod_img">

                        </td>
                    </tr>
                    <tr>
                        <td>标题</td>
                        <td><input type="text" name="img_one[title]" value="<?php echo $zbp->Config('pipyou')->slide['img_one']['title']; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>跳转地址</td>
                        <td><input type="text" name="img_one[url]" value="<?php echo $zbp->Config('pipyou')->slide['img_one']['url']; ?>"></td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td><p><b>首页右侧第二张图</b></p></td>
            <td>
                <table>
                    <tbody>
                    <tr>
                        <td>图片</td>
                        <td><img src="<?php echo $zbp->Config('pipyou')->slide['img_two']['img']; ?>" alt="" height="60" width="100"></td>
                    </tr>
                    <tr>
                        <td>图片文件</td>
                        <td><input type="text"  name="img_two[img]"  name="url" value="<?php echo $zbp->Config('pipyou')->slide['img_two']['img']; ?>" class="uplod_img"></td>
                    </tr>
                    <tr>
                        <td>标题</td>
                        <td><input type="text" name="img_two[title]"  name="url" value="<?php echo $zbp->Config('pipyou')->slide['img_two']['title']; ?>"></td>
                    </tr>
                    <tr>
                        <td>跳转地址</td>
                        <td><input type="text" name="img_two[url]" name="url" value="<?php echo $zbp->Config('pipyou')->slide['img_two']['url']; ?>"></td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td><p><b>首页右侧第三张图</b></p></td>
            <td>
                <table>
                    <tbody>
                    <tr>
                        <td>图片</td>
                        <td><img src="<?php echo $zbp->Config('pipyou')->slide['img_three']['img']; ?>" alt="" height="60" width="100"></td>
                    </tr>
                    <tr>
                        <td>图片文件</td>
                        <td><input type="text"  name="img_three[img]" value="<?php echo $zbp->Config('pipyou')->slide['img_three']['img']; ?>" class="uplod_img"></td>
                    </tr>
                    <tr>
                        <td>标题</td>
                        <td><input type="text" name="img_three[title]" value="<?php echo $zbp->Config('pipyou')->slide['img_three']['title']; ?>"></td>
                    </tr>
                    <tr>
                        <td>跳转地址</td>
                        <td><input type="text" name="img_three[url]" value="<?php echo $zbp->Config('pipyou')->slide['img_three']['url']; ?>"></td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        <tr>
            <td><p><b>操作</b></p></td>
            <td><input type="submit" value="更新"></td>
        </tr>
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