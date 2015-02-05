<div>
    <h1>Lifts</h1>
    <table id="liftstable">
        <tr><th>Lift Name</th></tr>
	<tr><td><input type="text" id="liftname"><input type="button" value="Add" id="addliftbutton" class="st-button" /></td></tr>
        <?php foreach($_['lifts'] as $lift) { ?>
            <tr>
		<td><?php p($lift->getName()); ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
