<?php
require '../../../../zb_system/function/c_system_base.php';
require '../../../../zb_system/function/c_system_admin.php';

$zbp->Load();
$params = $_REQUEST;

switch ($params['act']){
    case 'add_slide_img':
        CheckIsRefererValid();
        $slide = $zbp->Config('pipyou')->slide;
        $arr = array('img'=>$zbp->host.'zb_users/theme/pipyou/style/images/random/2.jpg','title'=>'名称','url'=>'www.pipyou.com');
        $key = count($slide['slide_img']);
        $slide['slide_img'][$key] = $arr;
        $zbp->config('pipyou')->slide = $slide;
        $zbp->SaveConfig('pipyou');
        echo 1;
        break;
    case 'delete_slide_img':
        CheckIsRefererValid();
        $key = $params['key'];
        $slide = $zbp->Config('pipyou')->slide;
        unset($slide['slide_img'][$key]);
        $zbp->config('pipyou')->slide = $slide;
        $zbp->SaveConfig('pipyou');
        echo 1;
        break;
    case 'update_slide_img':
        CheckIsRefererValid();
        $slide = $zbp->Config('pipyou')->slide;
        $slide['slide_img'] = $params['slide_img'];
        $zbp->config('pipyou')->slide = $slide;
        $zbp->SaveConfig('pipyou');
        $zbp->SetHint('good','OK');
        Redirect('./uploads_slide.php');

        break;
    case 'slide':
        CheckIsRefererValid();
        //更新图册设置
        $slide = $zbp->Config('pipyou')->slide;
        $slide['img_one']=$params['img_one'];
        $slide['img_two'] = $params['img_two'];
        $slide['img_three'] = $params['img_three'];
        $slide['status'] = $params['status'];
        $slide['format'] = $params['format'];
        $slide['article_id'] = $params['article_id'];
        $zbp->config('pipyou')->slide = $slide;
        $result = $zbp->SaveConfig('pipyou');
        if($result){
            echo "<script>history.go(-1)</script>";
        }else{
            echo json_encode(array('msg'=>'失败','status'=>0));
        }
        break;
    case 'config':
        CheckIsRefererValid();
        $zbp->config('pipyou')->logo = $params['logo'];
        $zbp->config('pipyou')->icp = $params['icp'];
        $zbp->config('pipyou')->notice_status = $params['notice_status'];
        $zbp->config('pipyou')->notice_values = $params['notice_values'];
        $zbp->config('pipyou')->category_code = $params['category_code'];
        $zbp->config('pipyou')->category_code_status = $params['category_code_status'];
        $zbp->config('pipyou')->footer_code_one = $params['footer_code_one'];
        $zbp->config('pipyou')->footer_code_two = $params['footer_code_two'];
        $zbp->config('pipyou')->writer = $params['writer'];
        $zbp->config('pipyou')->alipay_code = $params['alipay_code'];
        $zbp->config('pipyou')->weixin_code = $params['weixin_code'];
        $zbp->config('pipyou')->guide_category_id = $params['guide_category_id'];
        $zbp->config('pipyou')->guide_list_num = $params['guide_list_num'];
        $result = $zbp->SaveConfig('pipyou');
        if($result){
            $zbp->SetHint('good');
            Redirect('./config.php');
        }else{
            echo json_encode(array('msg'=>'失败','status'=>0));
        }
        echo pipyou_uploads();
        break;
    case 'seo':
        CheckIsRefererValid();
        $zbp->config('pipyou')->seo_title = $params['seo_title'];
        $zbp->config('pipyou')->seo_subtitle = $params['seo_subtitle'];
        $zbp->config('pipyou')->seo_keyword = $params['seo_keyword'];
        $zbp->config('pipyou')->seo_describe = $params['seo_describe'];
        $zbp->SaveConfig('pipyou');
        $zbp->SetHint('good');
        Redirect('./seo.php');
        break;
    case 'advertising':
        CheckIsRefererValid();
        $zbp->config('pipyou')->ad_one = $params['ad_one'];
        $zbp->config('pipyou')->ad_one_status =$params['ad_one_status'];
        $zbp->config('pipyou')->ad_two = $params['ad_two'];
        $zbp->config('pipyou')->ad_two_status =$params['ad_two_status'];
        $zbp->SaveConfig('pipyou');
        $zbp->SetHint('good');
        Redirect('./advertising.php');
        break;
    case 'reset':
        CheckIsRefererValid();
        $zbp->DelConfig('pipyou');
        $zbp->SetHint('good','OK');
        Redirect('./extend.php');
        break;
    case 'diy':
        CheckIsRefererValid();
        $zbp->config('pipyou')->bg_image = $params['bg_image'];
        $zbp->config('pipyou')->background_status = $params['background_status'];
        $zbp->config('pipyou')->opacity_status = $params['opacity_status'];
        $zbp->config('pipyou')->background_color_code = $params['background_color_code'];
        $zbp->config('pipyou')->background_color_status = $params['background_color_status'];
        $zbp->config('pipyou')->home_article_format = $params['home_article_format'];
        $zbp->SaveConfig('pipyou');
        $zbp->SetHint('good');
        Redirect('./diy.php');
        break;
    default:
        echo '错误';
}