<?php include __DIR__.'/header.php'; ?>
	<nav class="repertory menu breadcrumb">
		<ul>
			<li><a href="<?php $plxShow->racine() ?>"><?php $plxShow->lang('HOME'); ?></a></li>
			<li><?php $plxShow->tagName(); ?></li>
		</ul>
	</nav>
	<?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
	<article class="article" id="post-<?php echo $plxShow->artId(); ?>">
		<header>
			<span class="art-date">
				<time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>">
					<?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
				</time>
			</span>
			<h2>
				<?php $plxShow->artTitle('link'); ?>
			</h2>
			<div>
				<small>
					<span class="written-by">
						<?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?>
					</span>
					<span class="art-nb-com">
						<?php $plxShow->artNbCom(); ?>
					</span>
				</small>
			</div>
			<div>
				<small>
					<span class="classified-in">
						<?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat() ?>
					</span>
					<span class="tags">
						<?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags() ?>
					</span>
				</small>
			</div>
		</header>
		<?php $plxShow->artThumbnail(); ?>
		<?php $plxShow->artChapo(); ?>
	</article>
	<?php endwhile; ?>
	<nav class="pagination text-center"><?php $plxShow->pagination(); ?></nav>
	<div><?php $plxShow->tagFeed('', '', '<span><a href="#feedUrl" title="#feedTitle">#feedName</a></span>') ?></div>
<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>
