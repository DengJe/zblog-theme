{* Template Name:评论发布框 *}
<?php echo'404';die();?>
<div class="post" id="divCommentPost">
    <h4>发表评论:</h4><a rel="nofollow" id="cancel-reply" href="#comment" style="display:none;"><small>取消回复</small></a>
    <p class="posttop"><a name="comment">{if $user.ID>0}{$user.StaticName}:{/if}</a><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"></a></p>
	<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
    {php} if (function_exists('CheckIsRefererValid')) {echo '<input type="hidden" name="csrfToken" value="' . $zbp->GetCSRFToken() . '">';}{/php}
    <input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.StaticName}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
{else}
    <div class="am-g">
        <div class="am-u-md-4">
            <div class="doc-am-g">
                <div class="am-u-md-12">
                    <p><label for="inpName">{$lang['msg']['name']}(*)</label><input type="text" name="inpName" id="inpName" class="am-form-field am-radius" placeholder="昵称"  value="{$user.StaticName}" size="28" tabindex="1" /> </p>
                </div>
            </div>
        </div>
        <div class="am-u-md-4">
            <div class="doc-am-g">
                <div class="am-u-md-12">
                    <p><label for="inpEmail">{$lang['msg']['email']}</label><input type="text" name="inpEmail" id="inpEmail" class="am-form-field am-radius" value="{$user.Email}" size="28" tabindex="2" /> </p>
                </div>
            </div>
        </div>
        <div class="am-u-md-4">
            <div class="doc-am-g">
                <div class="am-u-md-12">
                    <p> <label for="inpHomePage">{$lang['msg']['homepage']}</label><input type="text" name="inpHomePage" id="inpHomePage" class="am-form-field am-radius" value="{$user.HomePage}" size="28" tabindex="3" /></p>
                </div>
            </div>
        </div>
    </div>
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
        <div class="am-g">
            <div class="am-u-md-4">
                <div class="doc-am-g">
                    <div class="am-u-md-12">
                <p>
                <label for="inpVerify">{$lang['msg']['validcode']}(*)</label><input type="text" name="inpVerify" id="inpVerify" class="am-form-field am-radius" value="" size="28" tabindex="4" />
                <img style="width:{$option['ZC_VERIFYCODE_WIDTH']}px;height:{$option['ZC_VERIFYCODE_HEIGHT']}px;cursor:pointer;" src="{$article.ValidCodeUrl}" alt="" title="" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
                </p>
                    </div>
                </div>
            </div>
        </div>
{/if}

{/if}
	<p><label for="txaArticle">{$lang['msg']['content']}(*)</label></p>
	<p><textarea name="txaArticle" id="txaArticle"  cols="55" rows="5" tabindex="5" ></textarea></p>
	<p><input name="sumbit" type="submit" tabindex="6" value="提交" onclick="return zbp.comment.post()" class="button" /></p>
	</form>
</div>