<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside>
		<h3><?php $plxShow->lang('CATEGORIES'); ?></h3>
		<ul class="cat-list unstyled-list">
			<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>
	</aside>
	
	<aside>
		<h3><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
		<ul class="lastart-list unstyled-list">
			<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul>
	</aside>

	<aside>
		<h3><?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
		<ul class="lastcom-list unstyled-list">
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		</ul>
	</aside>
	
	<aside>
		<h3><?php $plxShow->lang('ARCHIVES'); ?></h3>
		<ul class="arch-list unstyled-list">
			<?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
		</ul>
	</aside>
	
	<div>
		<details><summary><?php $plxShow->lang('TAGS'); ?></summary>		
			<div><?php $plxShow->tagList(' <a class="#tag_status tag #tag_size" href="#tag_url" title="#tag_name">#tag_name</a>', 15); ?></div>
		</details>
	</div>