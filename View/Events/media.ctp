<div class="row-fluid">
	<div class="span12">
		<?php 
		if($this->Session->check('Message.flash')) {
			echo $this->Session->flash();
		}

		echo $this->Form->create('Event', array(
				'class' => 'form-horizontal', 
				'type' => 'file',
				'inputDefaults' => array(
					'div' => array(
						'class' => 'control-group'
					),
					'label' => array(
						'class' => 'control-label'
					)

				)
			)
		);
		?>
		<fieldset>
			<legend><i class="icon-pencil"></i> Mídia</legend>
			<?php
			echo $this->Form->hidden('Event.id');
			echo $this->Form->input('Event.name', array(
					'label' => array('text' => 'Nome do Evento: '),
					'class' => 'span12',
					'readonly' => 'readonly'
				) 
			);
			echo $this->Form->input('Media.0.media', array(
					'label' => array('text' => 'Média: '),
					'class' => 'span12',
					'type' => 'file'
				) 
			);
			echo $this->Form->input('Media.1.media', array(
					'label' => array('text' => 'Média: '),
					'class' => 'span12',
					'type' => 'file'
				) 
			);
			echo $this->Form->input('Media.2.media', array(
					'label' => array('text' => 'Média: '),
					'class' => 'span12',
					'type' => 'file'
				) 
			);
			echo $this->Form->input('Media.3.media', array(
					'label' => array('text' => 'Média: '),
					'class' => 'span12',
					'type' => 'file'
				) 
			);

			?>
		</fieldset>

		<div class="control-group">
			(*) Campos obrigatórios.
		</div>

		<div class="control-group">
	    	<div class="form-actions">
				<?php
				echo $this->Form->button('Salvar', array('type' => 'submit', 'class'=>'btnb tn btn-large btn-primary'));
				?>
				<?php

				?>
			</div>
		</div>
	</div>
	<?php echo $this->Form->end(null); ?>
	</div>
</div>
<div class="row-fluid">
	<div class="span12">


	</div>
</div>
