<?php include(dirname(__FILE__).'/header.php'); ?>

        <section id="articles">

                <article id="blog">
                <div class="articleBody clear">

				<h2><?php $plxShow->artTitle(''); ?></h2>
				<div class="line"></div>
				<p class="art-topinfos"><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> - <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></p>
				<div class="art-chapo"><?php $plxShow->artContent(); ?></div>
				<p class="art-infos"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> - <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?></p>
				<?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
				<?php include(dirname(__FILE__).'/commentaires.php'); ?>
		</div>
                </article>
        </section>



<?php include(dirname(__FILE__).'/footer.php'); ?>