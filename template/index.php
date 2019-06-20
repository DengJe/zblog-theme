{* Template Name:首页及列表页 *}
<?php echo'404';die();?>
{template:header}
<html>
<body>
{template:post-nav}
{template:post-cms}
{template:footer}
<script>
    $(function () {
        // 调用 公告滚动函数
        setInterval("noticeUp('.notice ul','-35px',500)", 2000);
    });

</script>
</body>
</html>