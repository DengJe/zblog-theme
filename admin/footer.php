<?php
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.config.php"></script>';
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/plugin/UEditor/ueditor.all.min.js"></script>';
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/theme/'.$zbp->theme.'/admin/js/lib.upload.js"></script>';
echo '<script type="text/javascript" src="'.$zbp->host.'zb_users/theme/'.$zbp->theme.'/admin/js/lib.app.js"></script>';
?>
<?php
require $blogpath . 'zb_system/admin/admin_footer.php';
RunTime();
?>