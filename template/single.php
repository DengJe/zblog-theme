{* Template Name:文章页单页 *}
<?php echo'404';die();?>
{template:header}
{template:post-nav}
{if $article.Type==ZC_POST_TYPE_ARTICLE}
{template:post-single}
{else}
{template:post-page}
{/if}


{template:footer}