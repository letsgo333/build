﻿<?php
/**
 * 关于我们
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<div class="main">
	<div class="article">
		<div class="article-title">
			<?php $this->title() ?>		</div>
		<div class="article-content">
		<?php $this->content(); ?>
</div>
</div>
<?php $this->need('footer.php'); ?>

