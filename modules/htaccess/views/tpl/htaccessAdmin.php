<?php if($this->haveUnsavedChanges) { ?>
	<h4><?php _e('Required data for frontend .htaccess', SLN_LANG_CODE)?></h4>
	<i><?php _e('Path', SLN_LANG_CODE)?>: <?php echo $this->path?></i>
	<?php if(empty($this->requiredHtaccess['content'])) { ?>
		<div class="alert alert-warning"><?php _e('This file should be empty, just make sure that it is empty or not exists at all.', SLN_LANG_CODE)?></div>
	<?php } else { ?>
		<pre class="slnHtaccessPre"><?php echo htmlspecialchars($this->requiredHtaccess['content'])?></pre>
	<?php }?>
	<br />

	<h4><?php _e('Required data for admin .htaccess', SLN_LANG_CODE)?></h4>
	<i><?php _e('Path', SLN_LANG_CODE)?>: <?php echo $this->adminPath?></i>
	<?php if(empty($this->requiredHtaccess['adminContent'])) { ?>
		<div class="alert alert-warning"><?php _e('This file should be empty, just make sure that it is empty or not exists at all.', SLN_LANG_CODE)?></div>
	<?php } else { ?>
		<pre class="slnHtaccessPre"><?php echo htmlspecialchars($this->requiredHtaccess['adminContent'])?></pre>
	<?php }?>
	<br />

	<h4><?php _e('Required data for .htpasswd', SLN_LANG_CODE)?></h4>
	<i><?php _e('Path', SLN_LANG_CODE)?>: <?php echo $this->htpasswdPath?></i>
	<?php if(empty($this->requiredHtaccess['htpasswdContent'])) { ?>
		<div class="alert alert-warning"><?php _e('This file is Ok, no need to worry about it.', SLN_LANG_CODE)?></div>
	<?php } else { ?>
		<pre class="slnHtaccessPre"><?php echo htmlspecialchars($this->requiredHtaccess['htpasswdContent'])?></pre>
	<?php }?>
	<br />
<?php } else { ?>
	<div class="alert alert-success"><?php _e('You have no unsaved changes in your .htaccess', SLN_LANG_CODE)?></div>
<?php }?>


