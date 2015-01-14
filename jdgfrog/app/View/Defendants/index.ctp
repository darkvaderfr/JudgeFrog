<div class="defendants index">
	<h2><?php echo __('Defendants'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('DefendantId'); ?></th>
			<th><?php echo $this->Paginator->sort('Firstname'); ?></th>
			<th><?php echo $this->Paginator->sort('Lastname'); ?></th>
			<th><?php echo $this->Paginator->sort('Gender'); ?></th>
			<th><?php echo $this->Paginator->sort('BirthDate'); ?></th>
			<th><?php echo $this->Paginator->sort('Race'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($defendants as $defendant): ?>
	<tr>
		<td><?php echo h($defendant['Defendant']['DefendantId']); ?>&nbsp;</td>
		<td><?php echo h($defendant['Defendant']['Firstname']); ?>&nbsp;</td>
		<td><?php echo h($defendant['Defendant']['Lastname']); ?>&nbsp;</td>
		<td><?php echo h($defendant['Defendant']['Gender']); ?>&nbsp;</td>
		<td><?php echo h($defendant['Defendant']['BirthDate']); ?>&nbsp;</td>
		<td><?php echo h($defendant['Defendant']['Race']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $defendant['Defendant']['DefendantId'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $defendant['Defendant']['DefendantId'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $defendant['Defendant']['DefendantId']), array(), __('Are you sure you want to delete # %s?', $defendant['Defendant']['DefendantId'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Defendant'), array('action' => 'add')); ?></li>
	</ul>
</div>
