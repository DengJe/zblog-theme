<?php
/**
 * Created by PhpStorm.
 * User: you
 * Date: 2019/2/3
 * Time: 11:25
 */

//友好时间
function pipyou_TimeAgo( $ptime ) {
    $ptime = strtotime($ptime);
    $etime = time() - $ptime;
    if($etime < 1) return '刚刚';
    $interval = array (
        //12 * 30 * 24 * 60 * 60  =>  '年前 ('.date('Y-m-d', $ptime).')',
        //30 * 24 * 60 * 60       =>  '个月前 ('.date('m-d', $ptime).')',
        //7 * 24 * 60 * 60        =>  '周前 ('.date('m-d', $ptime).')',
        12 * 30 * 24 * 60 * 60  =>  '年前',
        30 * 24 * 60 * 60       =>  '个月前',
        7 * 24 * 60 * 60        =>  '周前',
        24 * 60 * 60            =>  '天前',
        60 * 60                 =>  '小时前',
        60                      =>  '分钟前',
        1                       =>  '秒前'
    );
    foreach ($interval as $secs => $str) {
        $d = $etime / $secs;
        if ($d >= 1) {
            $r = round($d);
            return $r . $str;
        }
    };
}
/*
 * 图片自动添加alt属性
 * */
function pipyou_imgalt(&$template){
    global $zbp;
    $article = $template->GetTags('article');
    $pattern = "/<img(.*?)src=('|\")([^>]*).(bmp|gif|jpeg|jpg|png|swf)('|\")(.*?)>/i";
    $replacement = '<img alt="'.$article->Title.'" src=$2$3.$4$5/>';
    $content = preg_replace($pattern, $replacement, $article->Content);
    $article->Content = $content;
    $template->SetTags('article', $article);
}
/**
 * 重构上传附件
 */
function pipyou_uploads(){
    $_POST['auto_rename'] = true;
    global $zbp;
    foreach ($_FILES as $key => $value) {
        if ($_FILES[$key]['error'] == 0) {
            if (is_uploaded_file($_FILES[$key]['tmp_name'])) {
                $upload = new Upload();
                $upload->Name = $_FILES[$key]['name'];
                if (GetVars('auto_rename', 'POST') == 'on' || GetVars('auto_rename', 'POST') == true) {
                    $temp_arr = explode(".", $upload->Name);
                    $file_ext = strtolower(trim(array_pop($temp_arr)));
                    $upload->Name = date("YmdHis") . time() . rand(10000, 99999) . '.' . $file_ext;
                }
                $upload->SourceName = $_FILES[$key]['name'];
                $upload->MimeType = $_FILES[$key]['type'];
                $upload->Size = $_FILES[$key]['size'];
                $upload->AuthorID = $zbp->user->ID;

                //检查同月重名
                $d1 = date('Y-m-01', time());
                $d2 = date('Y-m-d', strtotime(date('Y-m-01', time()) . ' +1 month -1 day'));
                $d1 = strtotime($d1);
                $d2 = strtotime($d2);
                $w = array();
                $w[] = array('=', 'ul_Name', $upload->Name);
                $w[] = array('>=', 'ul_PostTime', $d1);
                $w[] = array('<=', 'ul_PostTime', $d2);
                $uploads = $zbp->GetUploadList('*', $w);
                if (count($uploads) > 0) {
                    $zbp->ShowError(28, __FILE__, __LINE__);
                }

                if (!$upload->CheckExtName()) {
                    $zbp->ShowError(26, __FILE__, __LINE__);
                }

                if (!$upload->CheckSize()) {
                    $zbp->ShowError(27, __FILE__, __LINE__);
                }

                $upload->SaveFile($_FILES[$key]['tmp_name']);
                $upload->Save();
            }
        }
    }
    if (isset($upload)) {
        CountMemberArray(array($upload->AuthorID), array(0, 0, 0, +1));
    }
    return $upload->Name;
}

/*
 * 生成文章分享二维码
 * */
function pipyou_share_qrcode(){
    global $zbp;
    $url=$zbp->option['ZC_BLOG_HOST']; //二维码内容;
    require_once 'phpqrcode.php';
    $value = $url;         //二维码内容
    $errorCorrectionLevel = 'L';  //容错级别
    $matrixPointSize = 5;      //生成图片大小
    ob_start();
    QRcode::png($value,'logo.png', $errorCorrectionLevel, $matrixPointSize, 2);
    ob_end_clean();
    echo "<img src=\"logo.png\" alt=\"\">";

}
/*
 * 排行榜 随机 最新 热门 留言
 * */
function pipyou_get_links( $type, $num, $tblogcate ) {
    global $zbp, $str, $order;
    //$str = '';
    $str = '';
    if ( $type == 'previous' ) {
        $order = array( 'log_PostTime' => 'DESC' );
    }
    if ( $type == 'hot' ) {
        $order = array( 'log_ViewNums' => 'DESC' );
    }
    if ( $type == 'comm' ) {
        $order = array( 'log_CommNums' => 'DESC' );
    }
    if ( $zbp->db->type == "sqlite" ) {

        if ( $type == 'rand' ) {
            $order = array( 'random()' => '' );
        }
    } else {
        if ( $type == 'rand' ) {
            $order = array( 'rand()' => '' );
        }
    }
    $stime = time();
    $ytime = ( 36 ) * 30 * 24 * 60 * 60;
    $ztime = $stime - $ytime;
    if ( empty( $tblogcate ) ) {
        $where = array( array( '=', 'log_Status', '0' ), array( '>', 'log_PostTime', $ztime ) );
    } else {
        $where = array( array( '=', 'log_Status', '0' ), array( '>', 'log_PostTime', $ztime ), array( '=', 'log_CateID', $tblogcate ) );
    }
    $str = $zbp->GetArticleList( array( '*' ), $where, $order, array( $num ), '' ); //注意 $str

    return $str;
}


