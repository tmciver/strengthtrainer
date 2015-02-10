
<div>
    <h1>Sets</h1>
    <table id="sets-table">
        <tr>
	    <th>Date</th>
	    <th>Lift</th>
	    <th>Weight</th>
	    <th>Number of Sets</th>
	    <th>Number of Reps</th>
	    <th></th>
	</tr>
	<tr>
	    <td><input type="date" id="set-date" value="<?php echo date('Y-m-d'); ?>" /></td>
	    <td>
		<select id="lift-option">
		    <?php foreach($_['lifts'] as $lift) { ?>
			<option value="<?php p($lift->getId()); ?>"><?php p($lift->getName()); ?></option>
		    <?php } ?>
		</select>
	    </td>
	    <td><input type="text" id="weight"/></td>
	    <td><input type="text" id="num-sets"/></td>
	    <td><input type="text" id="num-reps"/></td>
	    <td><input type="button" value="Add" id="add-set-button" class="st-button"/></td>
	</tr>
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
