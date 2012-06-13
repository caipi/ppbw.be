<?php
/**
 *
 * Plugin	CKEditor
 * @author	Stephane F
 *
 **/
class ckeditor extends plxPlugin {

	/**
	 * Constructeur de la classe ckeditor
	 *
	 * @param	default_lang	langue par défaut utilisée par PluXml
	 * @return	null
	 * @authors	Stephane F - Francis
	 **/
	public function __construct($default_lang) {

		# Appel du constructeur de la classe plxPlugin (obligatoire)
		parent::__construct($default_lang);

		# droits pour accéder à la page config.php du plugin
		$this->setConfigProfil(PROFIL_ADMIN);

		$this->addHook('AdminTopBottom', 'AdminTopBottom');

		# pas d'éditeur ckeditor pour les pages parametres_edittpl.php et comment.php
		if($this->getParam('uplDir')!='' AND !preg_match('/(parametres_edittpl.php|comment.php)/', basename($_SERVER['SCRIPT_NAME']))) {

			# pour le fichier config.php de kcfinder
			$_SESSION["ckeditor_uplDir"] = $this->getParam('uplDir');

			# déclaration pour ajouter l'éditeur
       		$this->addHook('AdminTopEndHead', 'AdminTopEndHead');
       		$this->addHook('AdminFootEndBody', 'AdminFootEndBody');
			# pour les articles
			$this->addHook('plxAdminEditArticle', 'Abs2Rel');
			$this->addHook('AdminArticleTop', 'Rel2Abs');
			# pour les pages statiques
			$this->addHook('plxAdminEditStatique', 'Abs2Rel');
			$this->addHook('AdminStaticTop', 'Rel2Abs');
			# si affichage des articles coté visiteurs: protection des emails contre le spam
			if(!defined('PLX_ADMIN')) {
				$this->addHook('plxMotorParseArticle', 'protectEmailsArticles');
				$this->addHook('plxShowStaticContent', 'protectEmailsStatics');
			}
		}

	}

	/**
	 * Méthode qui convertit les liens absolus en liens relatifs
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function Abs2Rel() {

		echo '<?php

		# Préparation des variables
		$abs_path = parse_url($this->racine.$this->aConf["images"]);
		$abs_path_images = $abs_path["path"];
		$rel_path_images = $this->aConf["images"];

		$abs_path = parse_url($this->racine.$this->aConf["documents"]);
		$abs_path_docs = $abs_path["path"];
		$rel_path_docs = $this->aConf["documents"];


		# Les liens absolus commençant par http://www.domaine.com/ sont convertis en liens relatifs
		$content["chapo"] = str_replace($abs_path_images_http_domain, $rel_path_images, $content["chapo"]);
		$content["content"] = str_replace($abs_path_images_http_domain, $rel_path_images, $content["content"]);
		$content["chapo"] = str_replace($abs_path_docs_http_domain, $rel_path_docs,$content["chapo"]);
		$content["content"] = str_replace($abs_path_docs_http_domain, $rel_path_docs, $content["content"]);

		# Les liens absolus commençant simplement par la barre de la racine / sont convertis en liens relatifs
		$content["chapo"] = str_replace($abs_path_images, $rel_path_images, $content["chapo"]);
		$content["content"] = str_replace($abs_path_images, $rel_path_images, $content["content"]);
		$content["chapo"] = str_replace($abs_path_docs, $rel_path_docs, $content["chapo"]);
		$content["content"] = str_replace($abs_path_docs, $rel_path_docs, $content["content"]);

		?>';

	}

	/**
	 * Méthode qui convertit les liens relatifs en liens absolus
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function Rel2Abs() {

		echo '<?php

		# Préparation des variables
		$abs_path = parse_url($plxAdmin->racine.$plxAdmin->aConf["images"]);
		$abs_path_images = $abs_path["path"];
		$rel_path_images = $plxAdmin->aConf["images"];

		$abs_path = parse_url($plxAdmin->racine.$plxAdmin->aConf["documents"]);
		$abs_path_docs = $abs_path["path"];
		$rel_path_docs = $plxAdmin->aConf["documents"];

		# Les liens relatifs sont convertis en liens absolus, pour que les images soient visibles dans CKEditor
		$chapo = str_replace($rel_path_images, $abs_path_images, $chapo);
		$content = str_replace($rel_path_images, $abs_path_images, $content);
		$chapo = str_replace($rel_path_docs, $abs_path_docs, $chapo);
		$content = str_replace($rel_path_docs, $abs_path_docs, $content);

		?>';
	}


	/**
	 * Méthode qui protège les adresses emails contre le spam
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public static function protectEmails($txt) {

		$pattern = "/([\._a-zA-Z0-9-]+)@([\._a-zA-Z0-9-]+)/i";
		$replace = "$1<script type=\"text/javascript\">document.write(\"&#64;\");</script>$2";
		return preg_replace($pattern, $replace, $txt);

	}

	/**
	 * Méthode qui protège les adresses emails contre le spam dans les articles
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function protectEmailsArticles() {

		echo '<?php

			$art["chapo"] = ckeditor::protectEmails($art["chapo"]);
			$art["content"] = ckeditor::protectEmails($art["content"]);

		?>';

	}

	/**
	 * Méthode qui protège les adresses emails contre le spam dans les pages statiques
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function protectEmailsStatics() {

		echo '<?php

			$output = ckeditor::protectEmails($output);

		?>';

	}

	/**
	 * Méthode qui affiche un message si le répertoire d'upload n'est pas définit dans la config du plugin
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function AdminTopBottom() {

		$string = '
		if($plxAdmin->plxPlugins->aPlugins["ckeditor"]["instance"]->getParam("uplDir")=="") {
			echo "<p class=\"warning\">Plugin ckEditor<br />'.$this->getLang("L_ERR_UPLDIR_NOT_DEFINED").'</p>";
			plxMsg::Display();
		}';
		echo '<?php '.$string.' ?>';

	}


	/**
	 * Méthode qui ajoute la déclaration du script javascript de ckeditor
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function AdminTopEndHead() {

		echo '<script type="text/javascript" src="'.PLX_PLUGINS.'ckeditor/ckeditor/ckeditor.js"></script>'."\n";
	}

	/**
	 * Méthode qui ajoute les paramètres d'initialisation pour ckeditor
	 *
	 * @return	stdio
	 * @author	Stephane F
	 **/
	public function AdminFootEndBody() {?>

	<script type="text/javascript">
	<!--
	if(typeof CKEDITOR != 'undefined') {
		var textareas = document.getElementsByTagName("textarea");
		for(var i=0;i<textareas.length;i++) {
			CKEDITOR.replace('id_'+textareas[i].name, {
				width: '97%',
				language: '<?php echo $this->default_lang ?>',
				toolbar :
				[
					['Source','-','Undo','Redo','Cut','Copy','Paste','PasteText','PasteFromWord','-','Find','Replace','-','SelectAll','RemoveFormat'],
					['-','Table','HorizontalRule','Smiley','SpecialChar'],
					'/',
					['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
					['Bold','Italic','Underline','Strike','-','Link','Image','Flash','Unlink','Anchor','-','NumberedList','BulletedList','-','Outdent','Indent','-','Subscript','Superscript','Blockquote'],
					'/',
					['Format','Font','FontSize', 'TextColor','BGColor','-','Maximize', 'ShowBlocks']
				],
				// Link dialog, "Browse Server" button
				filebrowserBrowseUrl : '<?php echo PLX_PLUGINS ?>ckeditor/kcfinder/browse.php?type=files',
				// Image dialog, "Browse Server" button
				filebrowserImageBrowseUrl : '<?php echo PLX_PLUGINS ?>ckeditor/kcfinder/browse.php?type=images',
				// Flash dialog, "Browse Server" button
				filebrowserFlashBrowseUrl : '<?php echo PLX_PLUGINS ?>ckeditor/kcfinder/browse.php?type=flash',
				// Upload tab in the Link dialog
				filebrowserUploadUrl : '<?php echo PLX_PLUGINS ?>ckeditor/kcfinder/upload.php?type=files',
				// Upload tab in the Image dialog
				filebrowserImageUploadUrl : '<?php echo PLX_PLUGINS ?>ckeditor/kcfinder/upload.php?type=images',
				// Upload tab in the Flash dialog
				filebrowserFlashUploadUrl : '<?php echo PLX_PLUGINS ?>ckeditor/kcfinder/upload.php?type=flash',
				// Filebrowser width
				filebrowserWindowWidth : '1000',
				// Filebrowser height
				filebrowserWindowHeight : '700'
			});
		}
	}
	-->
	</script>

	<?php
	}
}
?>
