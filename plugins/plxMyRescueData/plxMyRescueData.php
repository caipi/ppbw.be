<?php
/**
 * Plugin plxMyRescueData
 *
 * @version	1.1
 * @date	06/12/2011
 * @author	Stephane F
 **/
class plxMyRescueData extends plxPlugin {

	private $timeout = null;

	/**
	 * Constructeur de la classe
	 *
	 * @param	default_lang	langue par défaut
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function __construct($default_lang) {

        # appel du constructeur de la classe plxPlugin (obligatoire)
        parent::__construct($default_lang);

		# droits pour accèder à la page config.php et admin.php du plugin
		$this->setConfigProfil(PROFIL_ADMIN);

        # déclaration des hooks
        $this->addHook('AdminTopEndHead', 'AdminTopEndHead');
		$this->addHook('AdminArticleFoot', 'AdminArticleFoot');
		$this->addHook('AdminStaticFoot', 'AdminStaticFoot');

		# init des variables
		$this->timeout = $this->getParam('timeout');
		if(empty($this->timeout) OR $this->timeout=='') $this->timeout=15;

    }

	/**
	 * Méthode qui ajoute le fichier css dans le fichier header.php du thème
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function AdminTopEndHead() {
		echo "\n";
		echo '<script type="text/javascript" src="'.PLX_PLUGINS.'plxMyAutosave/sisyphus/jquery-1.7.1.min.js"></script>'."\n";
		echo '<script type="text/javascript" src="'.PLX_PLUGINS.'plxMyAutosave/sisyphus/jquery.jnotify.min.js"></script>'."\n";
		echo '<link rel="stylesheet" type="text/css" href="'.PLX_PLUGINS.'plxMyAutosave/sisyphus/jquery.jnotify.min.css" media="screen" />'."\n";
		echo '<script type="text/javascript" src="'.PLX_PLUGINS.'plxMyAutosave/sisyphus/sisyphus.min.js"></script>'."\n";
	}

	public function AdminArticleFoot() {

		echo '

<script type="text/javascript">
$(function(){
	$("#form_article").sisyphus({
		timeout: '.$this->timeout.',
		onSave: function() {
			$.jnotify("'.$this->getLang('DATA_SAVE').'", 1500);
		},
		onRestore: function() {
			$.jnotify("'.$this->getLang('DATA_RESTORE').'", 1500);
		},
		onRelease: function() {
			$.jnotify("'.$this->getLang('DATA_REMOVE').'", "warning", 1500);
		}
	});
});
</script>

		';

	}

	public function AdminStaticFoot() {
		echo '
<script type="text/javascript">
$(function(){
	$("#form_static").sisyphus({
		timeout: '.$this->timeout.',
		onSave: function() {
			$.jnotify("'.$this->getLang('DATA_SAVE').'", 1500);
		},
		onRestore: function() {
			$.jnotify("'.$this->getLang('DATA_RESTORE').'", 1500);
		},
		onRelease: function() {
			$.jnotify("'.$this->getLang('DATA_REMOVE').'", "warning", 1500);
		}
	});
});
</script>

		';
	}

}
?>