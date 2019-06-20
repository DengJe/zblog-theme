{* Template Name:公共头部 *}
<?php echo'404';die();?>
<!DOCTYPE html>
<html lang="{$lang['lang_bcp47']}">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<meta name="generator" content="{$zblogphp}" />
	<meta name="renderer" content="webkit">
    {if $type=='article'}
    <title>{$title}_{$article.Category.Name}_{$name}</title>
    <meta name="keywords" content="{foreach $article.Tags as $tag}{$tag.Name},{/foreach}">
    {php}$description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),100)).'...');{/php}
    <meta name="description" content="{$description}">
    {elseif $type=='page'}
    <title>{$title}_{$name}</title>
    <meta name="keywords" content="{$title},{$name}">
    {php}$description = preg_replace('/[\r\n\s]+/', ' ', trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),100)).'...');{/php}
    <meta name="description" content="{$description}">
    <meta name="author" content="{$article.Author.StaticName}">
    {elseif $type=='index'}
    <title>{$name}{if $page>'1'}_第{$pagebar.PageNow}页{/if}_{$subname}</title>
    <meta name="Keywords" content="{$zbp->Config('pipyou')->seo_keyword}">
    <meta name="description" content="{$zbp->Config('pipyou')->seo_describe}">
    {elseif $type=='category'}
    <title>{$title}_{$name}</title>
    <meta name="Keywords" content="{$title},{$name}">
    <meta name="description" content="{$category.Intro}">
    {else}
    <title>{$title}_{$name}</title>
    <meta name="Keywords" content="{$zbp->Config('pipyou')->seo_keyword}">
    <meta name="description" content="{$zbp->Config('pipyou')->seo_describe}">
    {/if}
	<link rel="stylesheet"  href="{$host}zb_users/theme/{$theme}/style/{$style}.css" type="text/css" media="all"/>
    <link rel="stylesheet"  href="{$host}zb_users/theme/{$theme}/source/assets/css/amazeui.css" type="text/css" media="all"/>
    <link rel="stylesheet"  href="{$host}zb_users/theme/{$theme}/source/assets/css/app.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/source/assets/css/fontawesome.css" type="text/css" media="all">
    <link rel="stylesheet" href="{$host}zb_users/theme/{$theme}/source/caomei/style.css" type="text/css" media="all" >
    <script src="{$host}zb_system/script/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/zblogphp.js" type="text/javascript"></script>
	<script src="{$host}zb_system/script/c_html_js_add.php" type="text/javascript"></script>
	<script src="{$host}zb_users/theme/{$theme}/script/custom.js" type="text/javascript"></script>
    <script src="{$host}zb_users/theme/{$theme}/source/assets/js/amazeui.js" type="text/javascript"></script>
    <script src="{$host}zb_users/theme/{$theme}/source/assets/js/app.js" type="text/javascript"></script>
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
{$header}
{if $type=='index'&&$page=='1'}
	<link rel="alternate" type="application/rss+xml" href="{$feedurl}" title="{$name}" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$host}zb_system/xml-rpc/?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$host}zb_system/xml-rpc/wlwmanifest.xml" />
{/if}
</head>
