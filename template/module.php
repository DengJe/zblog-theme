<?php echo'404';die();?>
{if $module.FileName=='zuozhe'}

{elseif $module.FileName=='random_aricle'}
<div class="function" id="{$module.HtmlID}">
    <div class="function_t am-titlebar-default am-titlebar-title"><span class="icon iconfont icon-tubiaozhizuo-" style="font-size: 20px;color: #1E9FFF;">随机文章</div>
    <div class="function_c">
    <ul>
        {$array = pipyou_get_links( 'rand', '10', '' );}
        {foreach $array as $key=>$hotpost}{$i = $key+1}
        <li><i class="am-text-lg {if $i<4}am-text-danger{/if}">{$i}.</i>&nbsp;<a href="{$hotpost.Url}" target="_blank">{$hotpost.Title}</a></li>
        {/foreach}
    </ul>
    </div>
</div>
{elseif $module.FileName=='comment_article'}
<div class="function" id="{$module.HtmlID}">
    <div class="function_t am-titlebar-default am-titlebar-title"><span class="icon iconfont icon-tubiaozhizuo-" style="font-size: 20px;color: #1E9FFF;"></span>热评文章</div>
    <div class="function_c">
        <ul>
            {$array = pipyou_get_links( 'comm', '10', '' );}
            {foreach $array as $key=>$hotpost}{$i = $key+1}
            <li><i class="am-text-lg {if $i<4}am-text-danger{/if}">{$i}.</i>&nbsp;<a href="{$hotpost.Url}" target="_blank">{$hotpost.Title}</a></li>
            {/foreach}
        </ul>
    </div>
</div>

{elseif $module.FileName=='new_article'}
<div class="function" id="{$module.HtmlID}">
    <div class="function_t"><h3><span class="icon iconfont icon-tubiaozhizuo-" style="font-size: 20px;color: #1E9FFF;"></span>最新文章</h3></div>
    <div class="function_c">
        <ul>
            {$array = pipyou_get_links( 'previous', '10', '' );}
            {foreach $array as $key=>$hotpost}{$i = $key+1}
            <li><i class="am-text-lg {if $i<4}am-text-danger{/if}">{$i}.</i>&nbsp;<a href="{$hotpost.Url}" target="_blank">{$hotpost.Title}</a></li>
            {/foreach}
        </ul>
    </div>
</div>
{elseif $module.FileName=='new_comments'}
<div class="function" id="{$module.HtmlID}">
    <div class="function_t am-titlebar-default am-titlebar-title"><span class="icon iconfont icon-tubiaozhizuo-" style="font-size: 20px;color: #1E9FFF;"></span>最新留言</div>
    <div class="function_c">
        {php}
        $comments = $zbp->GetCommentList('*', array(array('=', 'comm_IsChecking', 0)), array('comm_PostTime' => 'DESC'), 8, null);
        {/php}
        {foreach $comments as $comment}
        {php}$clpl = preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(TransferHTML($comment->Content,'[nohtml]'),80)).'');{/php}
        <div class="am-g am-margin-bottom">
            <div class="am-u-md-2">
                <span class="am-margin-left"><img class="am-circle" alt="{$comment.Author.Name}"  src="{$comment.Author.Avatar}" style="width: 48px;height: 48px;"></span>
            </div>
            <div class="am-u-md-10">
                <div class="am-container am-text-truncate ">
                    <span class="am-text-truncate" style="width: 210px"><a class="am-fl" href="{$comment.Post.Url}#cmt{$comment.ID}" target="_blank">{$clpl}</a></span>
                </div>
                <div class="am-container">
                    <span class="am-fl">{$comment.Author.Alias}评论于：{date('Y/m/d',$comment.PostTime)}</span>
                </div>
            </div>
        </div>
        {/foreach}
    </div>
</div>

{else}







{if $module.Type=='ul'}
<div class="function" id="{$module.HtmlID}">
    {if (!$module.IsHideTitle)&&($module.Name)}<div class="function_t"><h4><span class="icon iconfont icon-tubiaozhizuo-" style="font-size: 20px;color: #1E9FFF;"></span>{$module.Name}</h4></div>{/if}
    <div class="function_c"><ul>{$module.Content}</ul></div>
</div>
{/if}
{if $module.Type=='div'}
<div class="function" id="{$module.HtmlID}">
    {if (!$module.IsHideTitle)&&($module.Name)}<div class="function_t"><h4><span class="icon iconfont icon-tubiaozhizuo-" style="font-size: 20px;color: #1E9FFF;"></span>{$module.Name}</h4></div>{/if}
    <div class="function_c">{$module.Content}</div>
</div>
{/if}

{/if}