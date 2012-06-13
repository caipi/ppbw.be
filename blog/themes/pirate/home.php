<?php include(dirname(__FILE__).'/header.php'); ?>

	<section id="articles">

		<article id="blog">
		<div class="articleBody clear">
			<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
				<h2><?php $plxShow->artTitle('link'); ?></h2>
				<p class="art-topinfos"><?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor() ?> - <?php $plxShow->artDate('#num_day #month #num_year(4) #hour:#minute'); ?></p>
				<div class="art-chapo"><?php $plxShow->artChapo(); ?></div>
				<p class="art-infos"><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> - <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?> - <?php $plxShow->artNbCom(); ?></p>
			<?php endwhile; ?>

			<p id="pagination"><?php $plxShow->pagination(); ?></p>
		</div>
		</article>
	</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
</section>
</body>
</html>
