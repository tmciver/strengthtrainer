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
		    <!-- <pre><?php print_r($_); ?></pre> -->
		    <?php if (array_key_exists('lifts', $_)) {
			print_unescaped($this->inc('lifts.content'));
		    } else if (array_key_exists('sets', $_)) {
			print_unescaped($this->inc('sets.content'));
		    }?>
		</div>
	</div>
</div>
