<?php
\OCP\Util::addScript('strengthtrainer', 'lift');
?>

<div>
    <h1>Lifts</h1>
    <table id="lifts-table">
        <tr><th>Lift Name</th></tr>
	<tr><td><input type="text" id="lift-name"><input type="button" value="Add" id="add-lift-button" class="st-button" /></td></tr>
        <?php foreach($_['lifts'] as $lift) { ?>
            <tr>
		<td><?php p($lift->getName()); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
