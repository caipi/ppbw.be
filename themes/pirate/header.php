<?php if(!defined('PLX_ROOT')) exit; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php $plxShow->defaultLang() ?>" lang="<?php $plxShow->defaultLang() ?>">

<head>

	<title><?php $plxShow->pageTitle(); ?></title>

	<meta http-equiv="Content-Type" content="text/html; charset=<?php $plxShow->charset(); ?>" />
	<?php $plxShow->meta('description') ?>
	<?php $plxShow->meta('keywords') ?>
	<?php $plxShow->meta('author') ?>

	<link rel="icon" href="<?php $plxShow->template(); ?>/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/styles.css" media="screen" />
	<!--[if IE]>
		<link rel="stylesheet" type="text/css" href="<?php $plxShow->template(); ?>/ie.css" media="screen" />
	<![endif]-->
	<?php $plxShow->templateCss() ?>

	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

</head>

<body>
<section id="page">
	<div id="news">Rencontre des pirates ce <b>vendredi 13 juillet à 19h30</b> sur la place des Doyens à Louvain-La-Neuve.  <b>Feel welcome!</b></div>

        <a href="/"><img src="/data/images/Logo-bw.png" alt="logo du ppbw"/></a>
    
        <hgroup>
                <h1 class="pageheader">« Nous sommes tous des pirates ! » Le Parti Pirate, la démocratie du troisième millénaire!</h1>
        </hgroup>
    
        <nav class="clear"> <!-- The nav link semantically marks your main site navigation -->
                <ul>
                        <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
                </ul>    
        </nav>