
<div>
    <h3>Lifts</h3>
    <table>
        <tr><th>ID</th><th>Lift Name</th></tr>
        <?php foreach($_ as $lift) { ?>
            <tr><?php p($lift->getId() ?></tr>
            <tr><?php p($lift->getName() ?></tr>
    </table>
</div>