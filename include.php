<?php
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions/pipyou_function.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions/common.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions/Add_Filter_Plugin.php';
require dirname(__FILE__) . DIRECTORY_SEPARATOR . 'functions/module.php';
RegisterPlugin("pipyou", "ActivePlugin_pipyou");

function ActivePlugin_pipyou()
{
    global $zbp;
    Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','pipyou_AddMenu');
    Add_Filter_Plugin('Filter_Plugin_Edit_Response3','pipyou_Original');
    Add_Filter_Plugin('Filter_Plugin_ViewPost_Template','pipyou_imgalt');
    Add_Filter_Plugin('Filter_Plugin_Edit_Response3','pipyou_article_format');

}

//新增主题按钮
function pipyou_AddMenu(&$m){
    global $zbp;
    //MakeTopMenu中的参数分别为 目标页面请求权限,链接文字,链接URL地址,链接窗口（默认为_self）,构造的li标签id
    $m[]=MakeTopMenu("root","主题配置",$zbp->host . "zb_users/theme/pipyou/admin/index.php","","");
}



function pipyou_SubMenu($id){
    $arySubMenu = array(
        0 => array('主题说明', 'index', 'left', false),
        1 => array('网站设置', 'config', 'left', false),
        2 => array('SEO设置', 'seo','left',false),
        3 => array('幻灯片设置', 'slide', 'left', false),
        4 => array('上传幻灯片', 'uploads_slide', 'left',false),
        5 => array('广告管理', 'advertising','left',false),
        6 => array('主题个性化','diy','left',false)
    );
    foreach($arySubMenu as $k => $v){
        echo '<a href="'.$v[1].'.php" '.($v[3]==true?'target="_blank"':'').'><span class="m-'.$v[2].' '.($id==$k?'m-now':'').'">'.$v[0].'</span></a>';
    }
}

function InstallPlugin_pipyou() {
    global $zbp;
    pipyou_widget_about();//关于我

    //配置初始化
    if(!$zbp->Config('pipyou')->HasKey('version')){
        //幻灯片数据
        $slide = array('status'=>1,'format'=>1,
            'article_id'=>'1,2',
            'slide_img'=>array(array('img'=>$zbp->host.'zb_users/theme/pipyou/style/images/random/4.jpg','title'=>'名称','url'=>'www.pipyou.com'),
                array('img'=>$zbp->host.'zb_users/theme/pipyou/style/images/random/2.jpg','title'=>'名称','url'=>'www.pipyou.com'),
                array('img'=>$zbp->host.'zb_users/theme/pipyou/style/images/random/4.jpg','title'=>'名称','url'=>'www.pipyou.com')),
            'img_one'=>array('img'=>$zbp->host."zb_users/theme/pipyou/style/images/random/2.jpg",'url'=>$zbp->host,'title'=>'标题1'),
            'img_two'=>array('img'=>$zbp->host."zb_users/theme/pipyou/style/images/random/3.jpg",'url'=>$zbp->host,'title'=>'标题2'),
            'img_three'=>array('img'=>$zbp->host."zb_users/theme/pipyou/style/images/random/4.jpg",'url'=>$zbp->host,'title'=>'标题3'));
        $zbp->config('pipyou')->version = '1.0';
        $zbp->config('pipyou')->theme_name = '皮皮柚';
        $zbp->config('pipyou')->slide = $slide;
        $zbp->config('pipyou')->ad_one_status = 0;
        $zbp->config('pipyou')->ad_two_status = 0;
        $zbp->config('pipyou')->guide_status = 1;
        $zbp->config('pipyou')->home_article_format = 1;
        $zbp->config('pipyou')->bgColor_one ="#f5f3f3";
        $zbp->config('pipyou')->bgColor_two ="#f5f3f3";
        $zbp->SaveConfig('pipyou');
    }


}
