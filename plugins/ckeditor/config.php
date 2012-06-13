<?php if(!defined('PLX_ROOT')) exit; ?>
<?php

# Control du token du formulaire
plxToken::validateFormToken($_POST);

if(!empty($_POST)) {

	$dir = realpath(PLX_ROOT.$_POST['uplDir']);
	if(!is_dir($dir)) {
		plxMsg::Error($plxPlugin->getLang('L_ERROR_INVALID_DIR'));
	} else {
		$plxPlugin->setParam('uplDir', $_POST['uplDir'], 'cdata');
		$plxPlugin->saveParams();
		# pour le fichier kcfinder/config.php
		$_SESSION['ckeditor_uplDir'] = $_POST['uplDir'];
	}
	header('Location: parametres_plugin.php?p=ckeditor');
	exit;
}

?>

<h2><?php echo $plxPlugin->getInfo('title') ?></h2>
<?php
?>
<form id="form_ckeditor" action="parametres_plugin.php?p=ckeditor" method="post">
	<fieldset>
		<p class="field"><label for="id_uplDir"><?php echo $plxPlugin->lang('L_UPLOAD_DIR') ?>&nbsp;:</label></p>
		<?php plxUtils::printInput('uplDir',plxUtils::strCheck($plxPlugin->getParam('uplDir')),'text','40-255') ?>
		<a class="help" title="<?php echo L_HELP_SLASH_END ?>">&nbsp;</a><strong>ex: data/</strong>
		<p>
			<?php echo plxToken::getTokenPostMethod() ?>
			<input type="submit" name="submit" value="<?php $plxPlugin->lang('L_SAVE') ?>" />
		</p>
	</fieldset>
</form>
