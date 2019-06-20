<?php

//关于我
function pipyou_widget_about(){
    global $zbp;
    if(!isset($zbp->modulesbyfilename['pipyou_widget_about']))  //判断博客是否含有模块filename名为hotpost的模块，如果有就不新建
    {
        $html = "<div class=\"function_c\">
        <div class=\"am-container\">
            <img class=\"am-margin-top\" src=\"http://www.wordpress.com/zb_users/theme/pipyou/style/images/random/2.jpg\" alt=\"\" height=\"200\" style=\"width: 100%;\">
        </div>
        <div class=\"am-container\">
            <img class=\"am-img-thumbnail am-circle\" style=\"position: relative;top: -25px;height: 60px;width: 60px;\" src=\"http://www.wordpress.com/zb_users/theme/pipyou/style/images/random/2.jpg\" alt=\"\" >
        </div>
        <div class=\"am-container\">
            <h2>皮皮柚主题</h2>
        </div>
        <div class=\"am-container\">
            <p>皮皮柚主题，致力于不断追求设计感和代码的精简语义化以及SEO友好度。</p>
        </div>
        <div class=\"am-g am-g-fixed\">
            <div class=\"am-u-sm-6\">
                <div class=\"am-text-xl\">{$zbp->cache->all_article_nums}</div>
                <div class=\"am-text-xs\">文章</div>
            </div>
            <div class=\"am-u-sm-6\">
                <div class=\"am-text-xl\">10</div>
                <div class=\"am-text-xs\">页面</div>
            </div>
        </div>
    </div>";
        $t = new Module();
        $t->Name = "关于我";
        $t->FileName = "pipyou_widget_about";
        $t->Source = "pipyou_widget_about";
        $t->SidebarID = 0;
        $t->Content = "";
        $t->IsHideTitle=false;
        $t->HtmlID = "pipyou_widget_about";
        $t->Type = "div";
        $t->MaxLi=5;
        $t->Content = $html;
        $t->Save();
    }
}

