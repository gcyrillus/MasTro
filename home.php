<?php include __DIR__.'/header.php'; ?>
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
		<div class="clamp"><?php $plxShow->artChapo(); ?></div>

	</article>
	<?php endwhile; ?>
	<nav class="pagination text-center"><?php $plxShow->pagination(); ?></nav>
	<?php $plxShow->artFeed('rss',$plxShow->catId(), '<aside><span><a href="#feedUrl" title="#feedTitle">#feedName</a></span></aside>'); ?>

<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>
