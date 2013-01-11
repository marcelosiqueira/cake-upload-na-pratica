<div class="row-fluid">
	<ul class="breadcrumb">
		<li class="active"><i class="icon-home"></i> Eventos</li>
	</ul>
</div>
<div class="row-fluid">
	<div class="span12">
		<?php
		if($this->Session->check('Message.flash')) {
			echo $this->Session->flash();
		}
		?>

		<h2 class="span10"><i class="icon-home"></i> <?php echo __('Eventos'); ?></h2>
		<span class="pull-right">
			<?php 
			echo $this->Html->link(
				'<i class="icon-pencil"></i> Novo Evento', 
				array('action' => 'add'),
				array('class'=>'btn', 'escape'=>false, 'title'=> 'Novo Evento')
			); 
			?>
		</span>

		<table class="table table-striped table-bordered table-condensed" cellpadding="0" cellspacing="0">
		<tr>
				<th><?php echo $this->Paginator->sort('name', 'Nome'); ?></th>
				<th><?php echo $this->Paginator->sort('place', 'Local'); ?></th>
				<th><?php echo $this->Paginator->sort('startdate', 'Data'); ?></th>
				<th><?php echo $this->Paginator->sort('is_moderate', 'Moderado?'); ?></th>
				<th><?php echo $this->Paginator->sort('created', 'Criado'); ?></th>
				<th class="span4"><?php echo __('Actions'); ?></th>
		</tr>
		<?php
		foreach ($events as $event): ?>
		<tr>
			<td><?php echo h($event['Event']['name']); ?>&nbsp;</td>
			<td><?php echo h($event['Place']['name']); ?>&nbsp;</td>
			<td><?php echo h(date("d/m/Y H:i", strtotime($event['Event']['startdate']))); ?>&nbsp;</td>
			<td><?php echo h($event['Event']['is_moderate'] == 1 ? 'Sim' : 'Não'); ?>&nbsp;</td>
			<td><?php echo h(date("d/m H:i", strtotime($event['Event']['created']))); ?>&nbsp;</td>
			<td class="actions">
				<?php 
				echo $this->Html->link(
					'<i class="icon-picture"></i> Mídia', 
					array('action' => 'media', $event['Event']['id']),
					array('escape'=>false, 'title'=> 'Enviar Imagens e Videos')
				);
				?>
				<?php 
				echo $this->Html->link(
					'<i class="icon-edit"></i> Alterar', 
					array('action' => 'edit', $event['Event']['id']),
					array('escape'=>false, 'title'=> 'Alterar')
				); 
				?>
				<?php 
				echo $this->Form->postLink(
					'<i class="icon-trash"></i> Remover', 
					array('action' => 'delete', $event['Event']['id']), 
					array('escape'=>false, 'title'=> 'Remover'), 
					__('Are you sure you want to delete %s?', $event['Event']['name'])
				); 
				?>
			</td>
		</tr>
		<?php endforeach; ?>
		</table>

		<p>
			<?php
			echo $this->Paginator->counter(array(
			'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
			));
			?>
		</p>

		<?php if ($this->Paginator->hasPrev() || $this->Paginator->hasNext()) { ?>

		<div class="pagination pagination-centered">
			<ul>
			<?php
				echo $this->Paginator->prev(
					'<span><< </span>', 
					array(), 
					null, 
					array('escape' => false, 'class' => 'disabled', 'tag' => 'li')
				);

				echo $this->Paginator->numbers(
					array('before' => '<span>', 'after' => '</span>', 'separator' => '', 'tag' => 'li', 'currentClass' => 'active')
				);

				echo $this->Paginator->next(
					'<span> >></span>', 
					array(), 
					null, 
					array('escape' => false, 'class' => 'disabled', 'tag' => 'li')
				);
			?>
			</ul>
		</div>
		<?php } ?>
		
	</div>
</div>
