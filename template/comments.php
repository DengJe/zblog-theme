{* Template Name:所有评论模板 *}
<?php echo'404';die();?>
<div class="am-u-sm-12 box">
{if $socialcomment}
{$socialcomment}
{else}

{if $article.CommNums>0}


{/if}

<label id="AjaxCommentBegin"></label>
<!--评论框-->
{template:commentpost}
<!--评论输出-->
<div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
    <h2 class="am-titlebar-title ">
        评论列表
    </h2>


</div>

{foreach $comments as $key => $comment}

{template:comment}

{/foreach}

<!--评论翻页条输出-->
<div class="pagebar commentpagebar">
{template:pagebar}
</div>
<label id="AjaxCommentEnd"></label>



{/if}
</div>