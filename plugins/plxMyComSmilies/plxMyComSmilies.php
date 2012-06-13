<?php
/**
 * Plugin plxMyComSmilies
 *
 * @package	PLX
 * @version	1.1
 * @date	02/01/2012
 * @author 	Stephane F
 **/
class plxMyComSmilies extends plxPlugin {

	public $smilies = array(
			':)' => 'smile.png',
			':-)' => 'smile.png',
			'=)' => 'smile.png',
			':|' => 'neutral.png',
			'=|' => 'neutral.png',
			':(' => 'sad.png',
			'=(' => 'sad.png',
			':D' => 'big_smile.png',
			'=D' => 'big_smile.png',
			':o' => 'yikes.png',
			':O' => 'yikes.png',
			';)' => 'wink.png',
			':/' => 'hmm.png',
			':P' => 'tongue.png',
			':p' => 'tongue.png',
			':lol:' => 'lol.png',
			':mad:' => 'mad.png',
			':rolleyes:' => 'roll.png',
			':cool:' => 'cool.png'
		);

	/**
	 * Constructeur de la classe
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @author	Stephane F
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);

		# Déclarations des hooks
		$this->addHook('plxMotorParseCommentaire', 'plxMotorParseCommentaire');
		$this->addHook('ThemeEndHead', 'ThemeEndHead');
		$this->addHook('IndexEnd', 'IndexEnd');

	}

	/**
	 * Méthode qui ajoute la barre des smileys
	 *
	 * @return	stdio
	 * @author	Stephane F.
	 *
	 **/
	public function IndexEnd() {

		echo '<?php
		$toolbar="";
		foreach($plxMotor->plxPlugins->aPlugins["plxMyComSmilies"]["instance"]->smilies as $txt => $img) {
			$toolbar .= "<img onclick=\"addSmiley(\'".$txt."\')\" src=\"".$plxMotor->urlrewrite($plxMotor->aConf["racine_plugins"]."plxMyComSmilies/smilies/".$img)."\" width=\"15\" height=\"15\" alt=\"\" title=\"".$txt."\" />";
		}
		$output = preg_replace("/<textarea.+name=[\'\"]content[\'\"]/i", $toolbar."$0", $output);
		?>';
	}

	/**
	 * Méthode qui ajoute les déclarations dans la partie <head> du site
	 *
	 * @return	stdio
	 * @author	Stephane F.
	 *
	 **/
	public function ThemeEndHead() {

		echo "\t".'<script type="text/javascript" src="'.PLX_PLUGINS.'plxMyComSmilies/function.js"></script>'."\n";

	}
	/**
	 * Méthode qui remplace les smilies par leur équivalent en image,
	 * basée sur le code de fluxbb (parser.php, function do_smilies)
	 *
	 * @return	stdio
	 * @author	Stephane F.
	 *
	 **/
	public function plxMotorParseCommentaire() {
		if(!strpos($_SERVER['PHP_SELF'],'comment.php')) {
			echo '<?php
			$com["content"] = " ".$com["content"]." ";
			foreach($this->plxPlugins->aPlugins["plxMyComSmilies"]["instance"]->smilies as $smiley_text => $smiley_img) {
				if (strpos($com["content"], $smiley_text) !== false) {
					$com["content"] = preg_replace("%(?<=[>\s])".preg_quote($smiley_text, "%")."(?=[^\p{L}\p{N}])%um", "<img src=\"".PLX_PLUGINS."plxMyComSmilies/smilies/".$smiley_img."\" width=\"15\" height=\"15\" alt=\"".substr($smiley_img, 0, strrpos($smiley_img, "."))."\" />", $com["content"]);
				}
			}
			$com["content"] = substr($com["content"], 1, -1);
			?>';
		}
	}
}
?>