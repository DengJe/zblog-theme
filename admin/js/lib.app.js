$(document).ready(function(){
    $('#add_slide_img').click(function () {
        $.ajax({
            type:'POST',
            url:'save.php?act=add_slide_img',
            dataType:'json',
            data: $("form").serialize(),
            cache: false,
            async : false,
            success:function (res) {
                console.log(res);
                if(res == 1){
                    location.reload();
                }
                console.log('请求成功！');
            },
            error:function (res) {
                console.log('请求失败！');

            }
        })
    });
    //删除轮播图
    $('.delete_slide_img').click(function (options) {
        $.ajax({
            type:'POST',
            url:'save.php?act=delete_slide_img',
            dataType:'json',
            cache: false,
            async : false,
            data:{key:$(this).attr('data'),csrfToken:$("input[name='csrfToken']").val()},
            success:function (res) {
                console.log(res);
                if(res == 1){
                    location.reload();
                }
                console.log('请求成功！');
            },
            error:function (res) {
                console.log('请求失败！');
            }
        })

    });
});