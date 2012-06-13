<?php
# ------------------ BEGIN LICENSE BLOCK ------------------
#
# This file is part of PluXml : http://www.pluxml.org
#
# Copyright (c) 2010-2011 Stephane Ferrari and contributors
# Copyright (c) 2008-2009 Florent MONTHEL and contributors
# Copyright (c) 2006-2008 Anthony GUERIN
# Licensed under the GPL license.
# See http://www.gnu.org/licenses/gpl.html
#
# ------------------- END LICENSE BLOCK -------------------

# Définition de l'encodage => PLX_CHARSET : UTF-8 (conseillé) ou ISO-8859-1
define('PLX_CHARSET', 'UTF-8');

# Langue par défaut
define('DEFAULT_LANG', 'fr');

# profils utilisateurs de pluxml
define('PROFIL_ADMIN', 0);
define('PROFIL_MANAGER', 1);
define('PROFIL_MODERATOR', 2);
define('PROFIL_EDITOR', 3);
define('PROFIL_WRITER', 4);

# Gestion des erreurs PHP
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);

# taille redimensionnement des images et miniatures
$img_redim = array('320x200', '500x380', '640x480');
$img_thumb = array('50x50', '75x75', '100x100');

# On sécurise notre environnement si dans php.ini: register_globals = On
if (ini_get('register_globals')) {
	$array = array('_REQUEST', '_SESSION', '_SERVER', '_ENV', '_FILES');
	foreach ($array as $value) {
		if(isset($GLOBALS[$value]))  {
			foreach ($GLOBALS[$value] as $key => $var) {
				if (isset($GLOBALS[$key]) AND $var === $GLOBALS[$key]) {
					unset($GLOBALS[$key]);
				}
			}
		}
	}
}

# Fonction de chargement d'un fichier de langue
function loadLang($filename) {
	if(file_exists($filename)) {
		$LANG = array();
		include_once($filename);
		foreach($LANG as $key => $value) {
			if(!defined($key)) define($key,$value);
		}
	}
}

# Fonction qui retourne le timestamp UNIX actuel avec les microsecondes
function getMicrotime() {
	$t = explode(' ',microtime());
	return $t[0]+$t[1];
}

# Initialisation du timer d'execution
define('PLX_MICROTIME', getMicrotime());
?>