{* Template Name:文章页文章内容 *}
<?php echo'404';die();?>
{template:post-breadcrumb}
<div class="am-g am-g-fixed">
    <div class="post-content-info">
        <div class="doc-am-g">
            <div class="am-u-md-9">
                <div class="doc-am-g box am-margin-bottom am-article-bd">
                    <div class="am-u-md-12 ">

                        <span class="post-title">{$article.Title}</span>
                        <div class="post-introduce">
                                <div class="am-g">
                                    <div class="am-u-sm-4">
                                        <span class="post-author"><i class="czs-code-file-l"></i>{$article.Author.StaticName}</span>
                                    </div>
                                    <div class="am-u-md-4"><span class="post-category"><i class="czs-container-l"></i>{$article.Category.Name}</span></div>
                                    <div class="am-u-md-4"><span class="post-date"><i class="czs-time-l"></i>{$article.Time('Y-m-d')}</span></div>
                                </div>
                        </div>
                        <hr>
                        {$article.Content}

                        <div class="am-u-sm-12 pay-and-share">
                            <button
                                    type="button"
                                    class="am-btn am-btn-danger am-round"
                                    data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 330, height: 365}" style="align-content: center;">
                                赞赏
                            </button>


                            <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-1">
                                <div class="am-modal-dialog">
                                    <div class="am-modal-hd">选择打赏方式
                                        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                                    </div>
                                    <div data-am-widget="tabs"
                                         class="am-tabs am-tabs-default"
                                    >
                                        <ul class="am-tabs-nav am-cf">
                                            <li class="am-active"><a href="[data-tab-panel-0]">支付宝</a></li>
                                            <li class=""><a href="[data-tab-panel-1]">微信</a></li>
                                        </ul>
                                        <div class="am-tabs-bd">
                                            <div data-tab-panel-0 class="am-tab-panel am-active">
                                                <img src="{php}echo $zbp->config('pipyou')->alipay_code;{/php}" alt="" height="200">
                                            </div>
                                            <div data-tab-panel-1 class="am-tab-panel ">
                                                <img src="{php}echo $zbp->config('pipyou')->weixin_code;{/php}" alt="" height="200">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button
                                    type="button"
                                    class="am-btn am-btn-danger am-round"
                                    data-am-modal="{target: '#doc-modal-2', closeViaDimmer: 0, width: 330, height: 365}" style="align-content: center;">
                                分享
                            </button>


                            <div class="am-modal am-modal-no-btn" tabindex="-1" id="doc-modal-2">
                                <div class="am-modal-dialog">
                                    <div class="am-modal-hd">选择分享方式
                                        <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close>&times;</a>
                                    </div>
                                    <div class="am-g">
                                        <div class="am-u-sm-12">
                                            <div class="four-share">
                                                <a href="https://service.weibo.com/share/share.php?title={$article.Title}&amp;url={$article.Url}&amp;source={$name}&amp;pic=" title="分享到新浪微博" class="xf_weibo" target="_blank"><span></span></a>
                                                <a href="https://connect.qq.com/widget/shareqq/index.html?url={$article.Url}&amp;showcount=0&amp;desc=&amp;summary=&nbsp; &nbsp;{$article.Intro}&amp;title={$article.Title}-{$name}&amp;source={$name}&amp;pics=" title="分享给QQ好友" class="xf_qqqq" target="_blank"><span></span></a>
                                                <a href="https://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?url={$article.Url}&amp;title={$article.Title}-{$name}&amp;source={$name}&amp;summary=&nbsp; &nbsp;{$article.Intro}&amp;pics=" title="分享到QQ空间" class="xf_qzone" target="_blank"><span></span></a>
                                                <a href="https://share.v.t.qq.com/index.php?c=share&amp;a=index&amp;title={$article.Title}-{$name}&amp;url={$article.Url}&amp;source={$name}&amp;pic=" title="分享到腾讯微博" class="xf_txweibo" target="_blank"><span></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                    <div class="am-g">
                                        <div class="am-u-sm-12">
                                            {pipyou_share_qrcode()}
                                            <p class="qrcode-tip">微信扫一扫，分享朋友圈</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>

                        <div class="am-u-sm-12 article_copyright am-margin-bottom" style="{if $article.Metas.IsOriginal ==0}display: none;{/if}">
                            <ul>
                                <li><b>版权所属：</b>{$name}</li>
                                <li><b>本文地址：</b>{$article.Url}</li>
                                <li><b>版权声明：</b>原创文章，转载时必须以链接形式注明原始出处及本声明。</li>
                            </ul>
                        </div>
                        {if $article.Tags}
                        <div class="am-u-md-12 tags">
                            <ul>
                                <li><b><i class="czs-tag-l"></i>标签：</b></li>
                                {foreach $article.Tags as $values}
                                <li class="am-margin-bottom"><a href="{$values.Url}">{$values.Name}</a></li>
                                {/foreach}
                            </ul>
                        </div>
                        {/if}
                    </div>
                </div>

                <!--相关文章-->
                <div class="am-u-sm-12 box am-margin-bottom">
                    <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
                        <h2 class="am-titlebar-title ">
                            相关文章
                        </h2>

                        <nav class="am-titlebar-nav">
                            <a href="{$article.Category.Url}" class="">more &raquo;</a>
                        </nav>
                    </div>


                    <ul class="am-gallery am-avg-sm-3
  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }" >
                        {foreach GetList(8,$article.Category.ID) as $related}
                        <li>
                            <div class="am-gallery-item">
                                <a href="{$related.Url}" class="">
                                    <img src="{if $article->Metas->pic}{$related->Metas->pic}{elseif pipyou_get_cimages($related) }{pipyou_get_cimages($related)}{/if}"  alt="{$related.Title}" style="height: 130px;"/>
                                    <h3 class="am-gallery-title">{$related.Title}</h3>
                                    <div class="am-gallery-desc">{$related.Time('Y-m-d')}</div>
                                </a>
                            </div>
                        </li>
                        {/foreach}
                    </ul>

                </div>
               <!--上一篇文章下一篇文章-->
                <div class="am-u-sm-12 box am-margin-bottom">
                    <div class="am-g am-g-fixed am-margin-top">
                        <div class="am-u-md-6"><p class="am-fl am-text-xs">上一篇文章</p></div>
                        <div class="am-u-md-6"><p class="am-fr am-text-xs" >下一篇文章</p></div>
                    </div>
                    <div class="am-g am-g-fixed">
                        {if $article.Prev}<div class="am-u-md-6"><a class="am-fl am-link-muted" href="{$article.Prev.Url} "><p>{$article.Prev.Title}</p></a></div>{/if}
                        {if $article.Next}<div class="am-u-md-6"><a class="am-fr am-link-muted" href="{$article.Next.Url} "><p>{$article.Next.Title}</p></a></div>{/if}
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
    </div>
</div>

