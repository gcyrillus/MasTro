<?php include __DIR__.'/header.php'; ?>
					<article class="article">
						<header>
							<h2>
								<?php $plxShow->lang('ERROR'); ?>
							</h2>
						</header>
						<p>
							<?php $plxShow->erreurMessage(); ?>
						</p>
					</article>
<?php include __DIR__.'/sidebar.php'; ?>
<?php include __DIR__.'/footer.php'; ?>

