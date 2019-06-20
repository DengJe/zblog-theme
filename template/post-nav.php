<?php echo'404';die();?>
<div class="am-topbar am-topbar-fixed-top am-topbar-opacity">
<header class="am-g am-g-fixed">
    <h1 class="am-topbar-brand">
        <a href="{$host}" class="am-text-ir" style="background: url({php}echo $zbp->Config('pipyou')->logo;{/php}) no-repeat left center;width: 125px;height: 50px;display: block;background-size: 125px 80%;">{$name}</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav navbar">

                {module:navbar}

        </ul>

        <form name="search" method="post" class="am-topbar-form am-topbar-right am-form-inline" role="search" action="{$host}zb_system/cmd.php?act=search">
            <div class="am-form-group">
                {php} if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}{/php}
                <input type="text" name="q" placeholder="搜索">
                <button type="submit" value="搜索">搜索</button>
            </div>
        </form>
        <div class="am-topbar-right">
            <a href="{$host}zb_system/login.php"><img src="{$user.Avatar}" class="am-circle am-margin-top-sm" alt="" height="30" width="30"></a>
        </div>
    </div>

</header>
</div>

