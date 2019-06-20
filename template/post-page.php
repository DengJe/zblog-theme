{* Template Name:页面页页面内容 *}
<?php echo'404';die();?>
{template:post-breadcrumb}
<div class="am-g am-g-fixed">
    <div class="am-u-md-9">
        <div class="am-md box am-margin-bottom">
            <div class="am-u-md-12" >
                <h2 class="post-title">{$article.Title}</h2>
                <div class="post-body">{$article.Content}</div>

            </div>
        </div>

            {if !$article.IsLock}
            {template:comments}
            {/if}

    </div>
    <div class="am-u-md-3">

        {template:post-sidebar}

    </div>
</div>


