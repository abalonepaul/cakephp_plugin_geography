<div class="countries index">
	<h2><?php echo __('Countries'); ?></h2>
	<table class="table table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('abbreviation'); ?></th>
			<th><?php echo $this->Paginator->sort('active'); ?></th>			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($countries as $country): ?>
	<tr>
		<td><?php echo h($country['BillingCountry']['id']); ?>&nbsp;</td>
		<td><?php echo h($country['BillingCountry']['name']); ?>&nbsp;</td>
		<td><?php echo h($country['BillingCountry']['abbreviation']); ?>&nbsp;</td>
		<td><?php echo h($country['BillingCountry']['active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $country['BillingCountry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $country['BillingCountry']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $country['BillingCountry']['id']), null, __('Are you sure you want to delete # %s?', $country['BillingCountry']['id'])); ?>
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

	<div class="pagination">
	<ul>
	<?php
		echo $this->Paginator->prev('< ', array('tag'=>'li'), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => '', 'tag'=>'li', 'currentTag'=>'a', 'currentClass'=>'active'));
		echo $this->Paginator->next(' >', array('tag'=>'li'), null, array('class' => 'next disabled'));
	?>
	</ul>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Country'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
	</ul>
</div>
