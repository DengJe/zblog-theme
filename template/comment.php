{* Template Name:单条评论 *}
<?php echo'404';die();?>
<ul class="am-comments-list am-comments-list-flip" id="cmt{$comment.ID}">
    <li class="am-comment"> <!-- 评论容器 -->
        <a href="{$comment.Author.HomePage}">
            <img class="am-comment-avatar" src="{$comment.Author.Avatar}" alt=""/> <!--评论者头像 -->
        </a>
        <div class="am-comment-main"> <!-- 评论内容容器 -->
            <header class="am-comment-hd">
                <div class="am-comment-meta"> <!-- 评论元数据 -->
                    <a href="{$comment.Author.HomePage}" class="am-comment-author">{$comment.Author.StaticName}</a> <!-- 评论者 -->
                    评论于<time datetime="">&nbsp;{$comment.Time()}</time>
                </div>
            </header>
            <div class="am-comment-bd">
                {$comment.Content}
                {foreach $comment.Comments as $comment}
                {template:comment}
                {/foreach}
                <blockquote><span class="am-badge am-badge-warning am-radius"><a href="#comment" onclick="return zbp.comment.reply('{$comment.ID}')" style="color: white;">回复该评论</a></span></blockquote>
            </div> <!-- 评论内容 -->
            <footer class="am-comment-footer"></footer>
        </div>
    </li>
</ul>