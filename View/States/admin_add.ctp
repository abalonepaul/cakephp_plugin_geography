<div class="regions form">
<?php echo $this->Form->create('Region'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Region'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('abbreviation');
		echo $this->Form->input('country_id', array('selected' => 204));
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Regions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
