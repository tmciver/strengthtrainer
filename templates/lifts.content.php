
<div>
    <h1>Lifts</h1>
    <table border="1">
        <tr><th>ID</th><th>Lift Name</th></tr>
        <?php foreach($_['lifts'] as $lift) { ?>
            <tr>
		<td><?php p($lift->getId()); ?></td>
		<td><?php p($lift->getName()); ?></td>
            </tr>
        <?php
        }?>
    </table>
</div>
