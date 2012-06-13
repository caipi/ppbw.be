<?php
/**
 * Plugin jQuery
 *
 * @package	PLX
 * @version	1.7.1
 * @date	24/12/2011
 * @author	Stephane F
 **/
class jquery extends plxPlugin {

	/**
	 * Constructeur de la classe jquery
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Stephane F
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);
		
		# Déclarations des hooks
		$this->addHook('ThemeEndHead', 'addJQuery');
		$this->addHook('AdminTopEndHead', 'addJQuery');		
	}

	/**
	 * Méthode qui ajoute l'insertion du fichier javascript de jquery dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/	
	public function addJQuery() {
		echo "\t".'<script type="text/javascript" src="'.PLX_PLUGINS.'jquery/jquery.min.js"></script>'."\n";
	}

}
?>