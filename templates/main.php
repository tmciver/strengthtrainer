<?php
\OCP\Util::addScript('strengthtrainer', 'script');
\OCP\Util::addStyle('strengthtrainer', 'style');
?>

<div id="app">
	<div id="app-navigation">
		<?php print_unescaped($this->inc('part.settings')); ?>
	</div>

	<div id="app-content">
		<div id="app-content-wrapper">
            <?php print_unescaped($this->inc('part.content')); ?>
		</div>
	</div>
</div>
