<?php
\OCP\Util::addScript('strengthtrainer', 'jquery.dataTables.min');
\OCP\Util::addScript('strengthtrainer', 'set');
\OCP\Util::addStyle('strengthtrainer', 'jquery.dataTables.min');
\OCP\Util::addStyle('strengthtrainer', 'style');
?>

<div>
    <h1>Sets</h1>
    <table id="sets-table">
	<thead>
            <tr>
		<th>Date</th>
		<th>Lift</th>
		<th>Weight</th>
		<th>Number of Sets</th>
		<th>Number of Reps</th>
		<th></th>
	    </tr>
	</thead>
        <?php foreach($_['sets'] as $set) { ?>
            <tr>
		<td><?php p($set->getDate()); ?></td>
		<td><?php p($set->getLiftName()); ?></td>
		<td><?php p($set->getWeight()); ?></td>
		<td><?php p($set->getNumSets()); ?></td>
		<td><?php p($set->getNumReps()); ?></td>
		<td></td>
            </tr>
        <?php } ?>
    </table>
</div>
