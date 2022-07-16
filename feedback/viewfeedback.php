<h2>View Feedback</h2>
<table border='1' id="example" class="table table-striped">
<tr>
<th>feedback id</th>
<th>date</th>
<th>message</th>
</tr>
<?php
     $stmt = $admin->ret("SELECT * FROM `feedback`");
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    ?>
<tr>
<td class="table-success"><?php echo $row['feedbackid']; ?></td>
<td class="table-info"><?php echo $row['date']; ?></td>
<td class="table-info"><?php echo $row['message']; ?></td>
</tr>
<?php } ?>
</table>
