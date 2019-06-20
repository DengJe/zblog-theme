{* Template Name:文章分类导读页面 *}
<?php echo'404';die();?>
{template:header}
<html>
<body>
{template:post-nav}
{template:post-breadcrumb}
<div class="am-g am-g-fixed">
    <div class="am-u-md-8">
        <!--分类模块-->
        <div class="am-g am-g-fixed">
            {php}
                $category_id = $zbp->Config('pipyou')->guide_category_id;
                $cate_id_arr = explode(',',$category_id);
            {/php}
            {foreach $cate_id_arr as $value}
            <div class="am-u-md-6 am-margin-bottom guide-article">
                <div class="box am-padding">
                    <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
                        <h2 class="am-titlebar-title ">
                        </h2>
                        {$categorys[$value].Name}
                        <nav class="am-titlebar-nav">
                            <a href="{$categorys[$value].Url}" class="">more &raquo;</a>
                        </nav>
                    </div>
                    {php}
                    $num = $zbp->Config('pipyou')->guide_list_num;
                    {/php}
                    <ul class="am-text-xs article-guide">
                    {foreach Getlist($num-1,$value,null,null,null,null,array('has_subcate'=>true)) as $i=>$related}
                    {if $i==0}
                        <li class="am-margin-bottom-xs">
                            <div class="box">
                                <a href="{$related.Url}"><img src="{if $related->Metas->pic}{$related->Metas->pic}{elseif pipyou_get_cimages($related) }{pipyou_get_cimages($related)}{/if}" alt="" height="200" class="guide-img" ></a>
                            </div>
                        </li>
                    {else}


                        <li class="am-margin-bottom-xs"> <span class="icon iconfont icon-icon-arrow-right2 " style="color: #1E9FFF;"></span><a href="{$related.Url}" title="{$related.Title}" class="am-text-truncate title-guide">{SubStrUTF8($related.Title,'20')} <div class="am-fr">{$related.time('m-d')}</div></a></li>

                    {/if}
                    {/foreach}
                    </ul>
                </div>
            </div>

            {/foreach}
        </div>
    </div>
    <div class="am-u-md-4">
        {template:post-sidebar}
    </div>
</div>
{template:footer}

</body>
</html>