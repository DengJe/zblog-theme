<?php
/**
 * Created by PhpStorm.
 * User: you
 * Date: 2019/1/22
 * Time: 11:16
 */

/*
 * 提取文章内容图片做缩略图没有则获取随机图
 * */
function pipyou_get_cimages($article){
    global $zbp;
    $temp=mt_rand(1,4);
    $pattern="/<[img|IMG].*?src=[\'|\"](.*?(?:[\.gif|\.jpg|\.png]))[\'|\"].*?[\/]?>/";
    $content = $article->Content;
    preg_match_all($pattern,$content,$matchContent);
    if(isset($matchContent[1][0])) {
        $temp = $matchContent[1][0];
    }else {
        $temp = $zbp->host . "zb_users/theme/pipyou/style/images/random/$temp.jpg";
    }
    return  $temp;
}

/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mp | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source https://gravatar.com/site/implement/images/php/
 */
function pipyou_get_gravatar( $email, $s = 80, $d = 'mp', $r = 'g', $img = false, $atts = array() ) {
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $email ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}

/*
 * 摘要
 * */
function pipyou_intro($as,$type,$long,$other) {
    global $zbp;
    $str = '';
    if ($type==0) {
        $str .= trim(SubStrUTF8(TransferHTML($as->Intro,'[nohtml]'),$long)).$other;
    } else {
        $str .= trim(SubStrUTF8(TransferHTML($as->Content,'[nohtml]'),$long)).$other;
    }
    return $str;
}