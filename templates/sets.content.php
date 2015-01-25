
<div>
    <h1>Lifts</h1>
    <table border="1">
        <tr><th>ID</th><th>Date</th><th>Lift ID</th><th>Number of Sets</th><th>Number of Reps</th></tr>
        <?php foreach($_['sets'] as $set) { ?>
            <tr>
		<td><?php p($set->getId()); ?></td>
		<td><?php p($set->getDate()); ?></td>
		<td><?php p($set->getLiftId()); ?></td>
		<td><?php p($set->getNumSets()); ?></td>
		<td><?php p($set->getNumReps()); ?></td>
            </tr>
        <?php
        }?>
    </table>
</div>
