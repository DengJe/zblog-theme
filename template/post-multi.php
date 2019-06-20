{* Template Name:列表页普通文章 *}
<?php echo'404';die();?>
<!--最新文章-->
<div class="am-g am-g-fixed" >
    <div class="am-u-sm-9">
        <div data-am-widget="list_news" class="am-list-news am-list-news-default" >

            <div class="am-list-news-bd">
                <ul class="am-list">



                    <!--缩略图在标题左边-->
                    <li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-left">
                        <div class="am-u-sm-4 am-list-thumb">
                            <a href="http://www.douban.com/online/11614662/" class="">
                                <img src="http://s.amazeui.org/media/i/demos/bing-2.jpg" alt="{$article.Title}"/>
                            </a>
                        </div>

                        <div class=" am-u-sm-8 am-list-main">
                            <h3 class="am-list-item-hd"><a href="http://www.douban.com/online/11614662/" class="">{$article.Title}</a></h3>

                            <div class="am-list-item-text">{$article.Intro}</div>

                        </div>
                    </li>


                </ul>
            </div>

        </div>
    </div>
    <div class="am-u-sm-3">{template:post-sidebar}</div>
</div>
