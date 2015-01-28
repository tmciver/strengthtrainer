<div>
    <h1>Lifts</h1>
    <table id="liftstable">
        <tr><th>Lift Name</th></tr>
        <?php foreach($_['lifts'] as $lift) { ?>
            <tr>
		<td><?php p($lift->getName()); ?></td>
            </tr>
        <?php
        }?>
	<tr class="last"><td><input type="text" id="liftname"><input type="button" value="Add" id="addliftbutton"></td></tr>
    </table>
</div>
