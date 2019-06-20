<?php echo'404';die();?>
        {if $type=='index'&&$page=='1'}
        <!--notice-->
        <div class="am-g am-g-fixed" style="{php}echo $zbp->Config('pipyou')->notice_status == 0 ? 'display: none;':'';{/php}">
            <div class="am-u-md-12">
                <div class="notice">
                    <ul>
                        {php}$notice_arr = explode(',',$zbp->Config('pipyou')->notice_values);{/php}
                        {foreach $notice_arr as $key=>$id}{$post=GetPost((int)$id);}
                        <li><img src="{$zbp->host}zb_users/theme/pipyou/style/images/notice.png" alt="公告" width="20" height="20" style="display: inline-block;"><a href="{$post.Url}" target="_blank" style="color: black;">{$post->Title}</a></li>
                        {/foreach}
                    </ul>
                </div>
            </div>
        </div>

        <div class="am-g am-g-fixed am-margin-top" {if $zbp->Config('pipyou')->slide['status']==0}style="display: none;"{/if}>
        <!--轮播-->
        <div class="slide-img">
            <div class="am-u-md-6">
                <div class="am-slider am-slider-default" data-am-flexslider id="demo-slider-0">
                    <ul class="am-slides" >
                        {if $zbp->Config('pipyou')->slide['format']==1}
                        {foreach $zbp->Config('pipyou')->slide['slide_img'] as $value }
                            <li>
                                <a href="{$value['url']}" target="_blank">
                                <img class="am-radius" src="{$value['img']}" height="335"/>
                                <span class="slide-img-title">{$value['title']}</span>
                                </a>
                            </li>
                        {/foreach}
                        {elseif $zbp->Config('pipyou')->slide['format']==0}
                        {php}$array = explode(',',$zbp->Config('pipyou')->slide['article_id']);{/php}
                        {foreach $array as $key=>$id}{$post=GetPost((int)$id);}
                        <li>
                            <a href="{$post.Url}" target="_blank">
                                <img class="am-radius" src="{if $post->Metas->pic}{$post->Metas->pic}{else}{php}pipyou_get_cimages($post){/php}{/if}" height="335"/>
                                <span class="slide-img-title">{$post->Title}</span>
                            </a>
                        </li>
                        {/foreach}
                        {/if}
                    </ul>
                </div>
            </div>

            <div class="am-u-md-6 am-hide-sm">
                <div class="am-g am-g-fixed">
                    <div class="am-u-md-6" >
                        <div style="overflow: hidden">
                            <a href="{$zbp->Config('pipyou')->slide['img_one']['url']}" target="_blank">
                            <img class="am-radius img-one" src="{$zbp->Config('pipyou')->slide['img_one']['img']}"  alt=""  />
                            <span class="img-one-title">{$zbp->Config('pipyou')->slide['img_one']['title']}</span>
                            </a>
                        </div>
                     </div>
                    <div class="am-u-md-6">
                        <div style="overflow: hidden">
                            <a href="{$zbp->Config('pipyou')->slide['img_two']['url']}" target="_blank">
                            <img class="am-radius img-two" src="{$zbp->Config('pipyou')->slide['img_two']['img']}"  alt=""  />
                            <span class="img-two-title">{$zbp->Config('pipyou')->slide['img_two']['title']}</span>
                            </a>
                    </div>
                    </div>
                </div>
                <div class="am-g am-g-fixed am-margin">
                    <div class="am-u-md-12">
                        <div style="overflow: hidden">
                            <a href="{$zbp->Config('pipyou')->slide['img_three']['url']}" target="_blank">
                                <img class="am-radius img-three" src="{$zbp->Config('pipyou')->slide['img_three']['img']}"  alt=""/>
                                <span class="img-three-title">{$zbp->Config('pipyou')->slide['img_three']['title']}</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {/if}

        {template:post-breadcrumb}

        <!--最新文章-->
        <div class="am-g am-g-fixed" style="{if $zbp->Config('pipyou')->home_article_format == 2}display: none;{/if}">

            <div class="am-u-md-9">
                <!--导航条-->
                <ul class="am-nav am-nav-pills cagtegory-box category-lists am-margin-bottom" style="{if $zbp->Config('pipyou')->category_code_status == 0}display:none;{/if}">
                    {$zbp->Config('pipyou')->category_code;}
                </ul>
                <!--广告 -->
                <div>
                    <div class="doc-am-g shadow-box" {if $zbp->Config('pipyou')->ad_one_status==0}style="display: none"{/if}>
                        {$zbp->config('pipyou')->ad_one;}
                    </div>
                </div>
                {foreach $articles as $article}
                {if $article->Metas->article_list_format ==1}

                <!--大文章列表-->
                <div class="post-article-two box am-margin-bottom">
                    <div class="am-g am-g-fixed">
                        <div class="am-u-sm-12">
                            <div class="pic-box ">
                                <img class="pic" src="{if $article->Metas->pic}{$article->Metas->pic}{elseif pipyou_get_cimages($article) }{pipyou_get_cimages($article)}{/if}" alt="{$article.Title}">
                            </div>
                        </div>
                    </div>
                    <div class="am-g am-g-fixed am-padding">
                        <div class="am-u-md-12 post-title"><a href="{$article.Url}">{if $article.IsTop}<span class="am-badge am-badge-danger am-radius">置顶</span>{/if}{SubStrUTF8($article.Title,25)}</a></div>
                    </div>
                    <div class="am-g am-g-fixed am-padding">
                        <div class="am-u-md-12 post-intro"><span class="icon iconfont icon-shangyinhao" style="font-size: 30px;"></span>{pipyou_intro($article,1,200,'...')}<span class="icon iconfont icon-xiayinhao" style="font-size: 30px;"></span></div>
                    </div>
                    <div class="am-g am-g-fixed am-padding">
                        <div class="am-u-sm-8">
                            <div class="info am-hide-md-down">
                                <span><i class="czs-time-l"></i>{$article.Time('Y-m-d')}</span>
                                <span> <i class="czs-eye-l"></i>{$article.ViewNums}</span>
                                <span><i class="czs-comment-l"></i>{$article.CommNums}</span>
                            </div>
                        </div>
                        <div class="am-u-sm-4"><div class="post-category am-fr"><a href="{$article.Category.Url}"><span class="czs-bookmark-l" style="color: #ef8d0f;"></span>{$article.Category.Name}</a></div></div>
                    </div>
                </div>
                {elseif $article->Metas->article_list_format ==2 }
                <div class="box post-article-three am-margin-bottom am-padding">
                    <div class="am-g am-g-fixed">
                        <div class="am-u-md-12 am-text-xl post-title"><a href="{$article.Url}">{if $article.IsTop}<span class="am-badge am-badge-danger am-radius">置顶</span>{/if}{SubStrUTF8($article.Title,25)}</a></div>
                    </div>
                    <div class="am-g am-g-fixed">
                        <div class="am-u-md-12 post-author"><span class="post-category"><a href="{$article.Category.Url}"><i class="czs-user" style="color: black;"></i>{$article.Author.Name}</a></span></div>
                    </div>
                    <div class="am-g am-g-fixed">
                        <div class="am-u-md-12 am-padding post-intro">{pipyou_intro($article,1,130,'...')}</div>
                    </div>
                    <div class="am-g am-g-fixed">
                        <div class="am-u-sm-6 am-fl" ><span class="post-category"><a href="{$article.Category.Url}"><span class="czs-bookmark-l" style="color: #ef8d0f;"></span>{$article.Category.Name}</a></span></div>
                        <div class="am-u-sm-6 am-hide-md-down">
                            <div class="am-fr">
                                <span><i class="czs-time-l"></i>{$article.Time('Y-m-d')}</span>
                                <span> <i class="czs-eye-l"></i>{$article.ViewNums}</span>
                                <span><i class="czs-comment-l"></i>{$article.CommNums}</span>
                            </div>
                        </div>
                    </div>
                </div>

                {elseif $article->Metas->article_list_format ==3 }
                <!--默认文章列表-->
                <div class="doc-am-g">
                    <div class="post-article  box">
                        <div class="am-u-md-4">
                            <img class="pic" src="{if $article->Metas->pic}{$article->Metas->pic}{elseif pipyou_get_cimages($article) }{pipyou_get_cimages($article)}{/if}" alt="{$article.Title}">
                        </div>
                        <div class="am-u-md-8">
                            <div class="am-g doc-am-g">
                                <div class="am-u-md-12 post-title"><a class="am-text-truncate" href="{$article.Url}">{if $article.IsTop}<span class="am-badge am-badge-danger am-radius">置顶</span>{/if}{SubStrUTF8($article.Title,25)}</a></div>
                            </div>
                            <div class="am-g doc-am-g">
                                <div class="am-u-md-12 post-intro">{pipyou_intro($article,1,120,'...')}</div>
                            </div>
                            <div class="am-g doc-am-g">
                                <div class="am-u-sm-6 am-fl" ><span class="post-category"><a href="{$article.Category.Url}"><span class="czs-bookmark-l" style="color: #ef8d0f;"></span>{$article.Category.Name}</a></span></div>
                                <div class="am-u-sm-6 am-hide-md-down">
                                    <div class="am-fr">
                                        <span><i class="czs-time-l"></i>{$article.Time('Y-m-d')}</span>
                                        <span> <i class="czs-eye-l"></i>{$article.ViewNums}</span>
                                        <span><i class="czs-comment-l"></i>{$article.CommNums}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {else}
                <!--默认文章列表-->
                <div class="doc-am-g">
                    <div class="post-article  box">
                        <div class="am-u-md-4">
                            <img class="pic" src="{if $article->Metas->pic}{$article->Metas->pic}{elseif pipyou_get_cimages($article) }{pipyou_get_cimages($article)}{/if}" alt="{$article.Title}">
                        </div>
                        <div class="am-u-md-8">
                            <div class="am-g doc-am-g">
                                <div class="am-u-md-12 post-title"><a class="am-text-truncate" href="{$article.Url}">{if $article.IsTop}<span class="am-badge am-badge-danger am-radius am-padding-xs am-margin-right">置顶</span>{/if}{SubStrUTF8($article.Title,25)}</a></div>
                            </div>
                            <div class="am-g doc-am-g">
                                <div class="am-u-md-12 post-intro">{pipyou_intro($article,1,120,'...')}</div>
                            </div>
                            <div class="am-g doc-am-g">
                                <div class="am-u-sm-6 am-fl" ><span class="post-category"><a href="{$article.Category.Url}"><span class="czs-bookmark-l" style="color: #ef8d0f;"></span>{$article.Category.Name}</a></span></div>
                                <div class="am-u-sm-6 am-hide-md-down">
                                    <div class="am-fr">
                                        <span><i class="czs-time-l"></i>{$article.Time('Y-m-d')}</span>
                                        <span> <i class="czs-eye-l"></i>{$article.ViewNums}</span>
                                        <span><i class="czs-comment-l"></i>{$article.CommNums}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {/if}

                {/foreach}





                <div class="pagebar" style="{if $zbp->Config('pipyou')->home_article_format == 2}display: none;{/if}">{template:pagebar}</div>


            </div>

            <div class="am-u-md-3 am-hide-md-down">
                {template:post-sidebar}
            </div>
        </div>

    <div style="{if $zbp->Config('pipyou')->home_article_format == 1}display: none;{/if}">
       <!--导航条-->
        <div class="am-g am-g-fixed" style="{if $zbp->Config('pipyou')->category_code_status == 0 || $zbp->Config('pipyou')->home_article_format == 1}display:none;{/if}">
            <div class="am-u-md-12">
                <ul class="am-nav am-nav-pills category-lists cagtegory-box">
                   {$zbp->Config('pipyou')->category_code;}
                </ul>
            </div>
        </div>

        <!--广告 -->
        <div class="am-g am-g-fixed">
            <div class="am-u-md-12 shadow-box" {if $zbp->Config('pipyou')->ad_one_status==0}style="display: none"{/if}>
                {$zbp->config('pipyou')->ad_one;}
            </div>
        </div>
       <!--无侧边显示列表格式-->

        <div class="am-g am-g-fixed" style="{if $zbp->Config('pipyou')->home_article_format == 1}display: none;{/if}">
            {foreach $articles as $article}

            <div class="am-u-md-4 am-margin-bottom am-u-end">
                <div class="box am-margin">
                    <div class="am-g" style="height: 200px;">
                        <img style="box-sizing: border-box;height: 200px;width: 100%;" class="pic" src="{if $article->Metas->pic}{$article->Metas->pic}{elseif pipyou_get_cimages($article) }{pipyou_get_cimages($article)}{/if}" alt="{$article.Title}">
                     </div>
                    <div class="am-container">
                        <div class="post-title"><a style="font-size: 18px;" class="am-text-truncate" href="{$article.Url}">{SubStrUTF8($article.Title,25)}</a></div>
                    </div>
                    <div class="am-g doc-am-g">
                        <div class="am-u-md-6">
                            <span class="post-category am-margin-left"><a href="{$article.Category.Url}" style="color: black;"><i class="czs-bookmark-l"></i>{$article.Category.Name}</a></span>
                        </div>
                        <div class="am-u-md-6">
                            <div class="am-fr am-padding-right" style="color: #aaa;">
                                <span><i class="czs-time-l"></i>{$article.Time('Y.m.d')}</span>
                            </div>
                        </div>
                    </div>
                    <div class="am-container">
                        <div class="post-intro">{pipyou_intro($article,1,60,'...')}</div>
                    </div>
                    <div class="am-g doc-am-g am-margin-top">
                        <div class="am-u-md-6">
                            <span class="post-category am-margin-left"><a href="{$article.Category.Url}" style="color: black;font-size: 13px;"><i class="czs-user" style="color: black;"></i>{$article.Author.Name}</a></span>
                        </div>
                        <div class="am-u-md-6">
                            <div class="am-fr am-padding-right" style="color:#aaa;">
                                <span><i class="czs-eye-l"></i>{$article.ViewNums}</span>
                                <span><i class="czs-comment-l"></i>{$article.CommNums}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {/foreach}
        </div>

        <div class="am-g am-g-fixed" style="{if $zbp->Config('pipyou')->home_article_format == 1}display: none;{/if}">
            <div class="am-u-md-12">
                <div class="pagebar">{template:pagebar}</div>
            </div>

        </div>
    </div>

       <!--广告位-->
        <div class="am-g am-g-fixed" {if $zbp->Config('pipyou')->ad_two_status==0}style="display: none"{/if}>
            <div class="am-u-md-12 shadow-box">
                {$zbp->Config('pipyou')->ad_two;}
            </div>
        </div>
        <!--友情链接-->
        <div class="am-g am-g-fixed am-margin-top">
            <div class="am-u-md-12">
                <div class="box link">
                    <div data-am-widget="titlebar" class="am-titlebar am-titlebar-default" >
                        <h2 class="am-titlebar-title ">
                            友情链接
                        </h2>
                    </div>

                    <dd class="friends-link">
                        {module:link}
                    </dd>
                </div>
            </div>
        </div>

