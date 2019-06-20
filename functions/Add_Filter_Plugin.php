<?php
/**
 * Created by PhpStorm.
 * User: you
 * Date: 2019/2/13
 * Time: 15:15
 */

/*
 * 设置原创
 * */
function pipyou_Original(){
    global $zbp,$article;
    $html = '<div id="islock" class="editmod">
                   
                   <label for="edtIsOriginal" class="editinputname">标明原创</label>
                   <input id="edtIsOriginal" name="meta_IsOriginal"  type="text" style="display:none"  value="' .$article->Metas->IsOriginal. '" class="checkbox imgcheck-on">
             </div>';
    echo $html;
}

/*
 * 文章列表显示格式
 * */
function pipyou_article_format(){
    global $zbp,$article;



    echo '<label class="editinputname" style="max-width:65px;text-overflow:ellipsis;">格式</label>
        <select name="meta_article_list_format" style="width:180px;">
        <option  value = "1"'; if ($article->Metas->article_list_format == 1){echo 'selected="selected"';} echo '>大图格式</option >
        <option value = "2"'; if ($article->Metas->article_list_format == 2){echo 'selected="selected"';} echo '>无图格式</option >
        <option value = "3"'; if ($article->Metas->article_list_format == 3){echo 'selected="selected"';} echo '>默认格式</option >';
    '</select >';
}