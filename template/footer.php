{* Template Name:公共底部 *}
<?php echo'404';die();?>
<div class="am-g-12 footer">
    <div class="am-g am-g-fixed doc-am-g ">
        <div class="am-u-md-4">
            <div class="footer-left am-padding-left">
                <span class="powered">Powered By {$zblogphphtml}.</span>
                <span class="theme">Theme By <a href="http://www.pipyou.com">{$theme}.</a></span></br>
                <span class="copyright">{$copyright}</span>
                <p class="ipc"><a href="http://www.miitbeian.gov.cn/" target="_blank" rel="nofollow">{$zbp->Config('pipyou')->icp}</a></p>
            </div>
        </div>
        <div class="am-u-md-4" >{$zbp->config('pipyou')->footer_code_one;}</div>
        <div class="am-u-md-4" >{$zbp->config('pipyou')->footer_code_two;}</div>

    </div>

</div>
<div data-am-widget="gotop" class="am-gotop am-gotop-fixed" style="width: 50px;">
    <a href="#top" title="" class="am-icon-btn am-icon-arrow-up am-active">
    </a>
</div>
{if $zbp->Config('pipyou')->background_status ==1 }
<script>
    $('body').css({'background': 'url({$zbp->Config("pipyou")->bg_image;}) fixed #DFDFE1',
    'background-size': 'auto',
    '-webkit-background-size': 'cover'});


</script>
{/if}
{if $zbp->Config('pipyou')->opacity_status ==1 }
<script>
    $('.box, .pagebar ,.function ,.footer').css({'background-color': 'rgb(231, 233, 238,.8)'});

</script>
{/if}
{if $zbp->Config('pipyou')->background_color_status ==1 }
<script>
    $('body').css({'background': 'linear-gradient({$zbp->Config("pipyou")->background_color_code;})'});
</script>
{/if}