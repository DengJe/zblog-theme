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
        <?php pipyou_SubMenu(0);?>
    </div>
    <table style="padding:0px;margin:0px;width:100%;">
        <tbody>
        <tr>
            <th>项目</th>
            <th>说明</th>
        </tr>
        <tr>
            <td>
                <p><b>侧栏说明</b></p>
            </td>
            <td>
                <ul>
                    <li>首页-默认侧栏</li>
                    <li>分类 - 侧栏2</li>
                    <li>文章页 - 侧栏3</li>
                    <li>页面 - 侧栏4</li>
                    <li>其它-侧栏5</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td><p><b>关于皮皮柚主题</b></p></td>
            <td><p>主题售后服务QQ:1308497934 <br></p>
            主题一次购买永久更新，有什么建议及bug反馈联系QQ或访问皮皮柚博客留言 <br>
                <a href="http://www.pipyou.com">皮皮柚www.pipyou.com</a>
            </td>
        </tr>
        <tr>
            <td><p><b>网站导航栏</b></p></td>
            <td><p>

                    <?php echo htmlspecialchars("<li class=\"am-dropdown\" data-am-dropdown>"); ?><br>
                    <?php   echo htmlspecialchars("<a class=\"am-dropdown-toggle\" data-am-dropdown-toggle href=\"javascript:;\">"); ?><br>
                    <?php   echo htmlspecialchars("<span class=\"nav-text\">下拉</span> <span class=\"am-icon-caret-down\"></span>"); ?><br>
                    <?php   echo htmlspecialchars("</a>"); ?><br>
                    <?php   echo htmlspecialchars("<ul class=\"am-dropdown-content\">"); ?><br>
                    <?php   echo htmlspecialchars("<li><a href=\"#\">去月球</a></li>"); ?><br>
                    <?php   echo htmlspecialchars("<li class=\"am-active\"><a href=\"#\">去火星</a></li>"); ?><br>
                    <?php   echo htmlspecialchars("<li><a href=\"#\">还是回地球</a></li>"); ?><br>
                    <?php   echo htmlspecialchars("</ul>"); ?><br>
                    <?php   echo htmlspecialchars("</li>"); ?></p></td>
        </tr>
        <tr>
            <td><p><b>关于文章原创申明</b></p></td>
            <td><p>管理员需要在新建或编辑文章时开启或者关闭，默认是关闭的。</p></td>
        </tr>
        <tr>
            <td><p><b>导读页面</b></p></td>
            <td><p>需要管理员新建页面并选择guide模板，然后在网站设置里添加分类ID</p></td>
        </tr>
        <tr>
            <td><p><b>关于图标</b></p></td>
            <td><p>为了更美观和更佳的显示效果，皮皮柚主题的图标配置采用了草莓图标库。</br>
                    使用方法：</br>
                    图标(标准)
                    <?php echo htmlspecialchars('<i class="czs-caomei"></i>'); ?>  草莓图标库官网
                    </br>
                    <b><a href="http://chuangzaoshi.com/icon/">草莓官网图标参考</a></b>
                </p></td>
        </tr>
        <tr>
            <td><p><b>图册下方导航条</b></p></td>
            <td><p>

                    <?php echo htmlspecialchars("<li class=\"am-dropdown\" data-am-dropdown>"); ?><br>
                    <?php   echo htmlspecialchars("<a class=\"am-dropdown-toggle\" data-am-dropdown-toggle href=\"javascript:;\">"); ?><br>
                    <?php   echo htmlspecialchars("<span class=\"nav-text\">下拉</span> <span class=\"am-icon-caret-down\"></span>"); ?><br>
                    <?php   echo htmlspecialchars("</a>"); ?><br>
                    <?php   echo htmlspecialchars("<ul class=\"am-dropdown-content\">"); ?><br>
                    <?php   echo htmlspecialchars("<li><a href=\"#\">去月球</a></li>"); ?><br>
                    <?php   echo htmlspecialchars("<li class=\"am-active\"><a href=\"#\">去火星</a></li>"); ?><br>
                    <?php   echo htmlspecialchars("<li><a href=\"#\">还是回地球</a></li>"); ?><br>
                    <?php   echo htmlspecialchars("</ul>"); ?><br>
                    <?php   echo htmlspecialchars("</li>"); ?></p></td>
        </tr>
        </tbody>
    </table>
</div>