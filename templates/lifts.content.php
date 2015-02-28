<?php
\OCP\Util::addScript('strengthtrainer', 'jquery.dataTables.min');
\OCP\Util::addScript('strengthtrainer', 'lift');
\OCP\Util::addStyle('strengthtrainer', 'jquery.dataTables.min');
\OCP\Util::addStyle('strengthtrainer', 'style');
?>

<div>
    <h1>Lifts</h1>
    <table id="lifts-table">
	<thead>
            <tr><th></th></tr>
	</thead>
        <?php foreach($_['lifts'] as $lift) { ?>
            <tr>
		<td><?php p($lift->getName()); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
