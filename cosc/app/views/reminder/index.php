<?php require_once '../app/views/templates/header.php'?>

<h2>Reminder Page</h2>

<table class='table table-striped table-condensed'>
	<tr>
		<th>Subject</th>
		<th>description</th>
	</tr>
	
    <?php foreach ($data['list'] as $items){ ?>
        <tr>
            <td><?=$items['subject']?></td>
            <td><?=$items['description']?></td>
			<td><a href="/reminder/remove/<?=$items['id']?>">Remove</a> | 
				<a href="/reminder/<?=$items['id']?>">View</a> | 
				<a href="/reminder/update/<?=$items['id']?>">Update</a>
			</td>
        </tr>
    <?php }?>

</table>
<?php require_once '../app/views/templates/footer.php'?>