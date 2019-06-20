<?php echo'404';die();?>
{if $type!=='index' || $page>'1'}
<div class="am-g am-g-fixed">
    <div class="doc-am-g">
        <div class="am-u-sm-12">
            <ol class="am-breadcrumb" style="margin: 6px 0px;padding: 0em .5em;">
                <li><a href="{$host}"  title="{$name}" target="_blank" class="am-icon-home">首页</a></li>
                    {if $type=='category'||$type=='article'}
                    {php}
                    $html='';
                    function navcate($id){
                    global $html;
                    $cate = new Category;
                    $cate->LoadInfoByID($id);
                    $html ='<li><a href="' .$cate->Url.'" title="' .$cate->Name. '">' .$cate->Name. '</a></li>'.$html;
                    if(($cate->ParentID)>0){navcate($cate->ParentID);}
                    }
                    if($type=='category'){navcate($category->ID);}else{navcate($article->Category->ID);}
                    global $html;
                    echo $html;
                    {/php}{if $type=='article'}
                    <li class="am-active">文章</li>
                    {/if}
                    {elseif $type=='page'}
                    <li class="am-active">页面</li>
                    {else}
                    <li class="am-active">{$title}</li>
                    {/if}

            </ol>
        </div>
    </div>
</div>
{/if}

