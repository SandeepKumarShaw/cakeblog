<h1>Topics</h1>
<table>
	<tr>
		<td>Title</td>
		<td>User ID</td>
		<td>Publisher</td>
		<td>Created</td>
		<td>Modified</td>
	</tr>
<?php
	foreach ($topics as $topic) 
	{
?>	
		<tr>
			<td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $topic['Topic']['id'])); ?></td>
			<td><?php echo $topic['Topic']['user_id']; ?></td>
			<td><?php echo $topic['Topic']['visible']; ?></td>
			<td><?php echo $topic['Topic']['created']; ?></td>
			<td><?php echo $topic['Topic']['modified']; ?></td>
		</tr>
<?php
	}
	unset($topic);	
?>
</table>