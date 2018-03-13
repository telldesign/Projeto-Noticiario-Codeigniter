<?php $this->load->view('header');?>

<p> Contato </p>

<div>
	<?php 
		if($formerror):
			echo '<p>' .$formerror. '</p>';
		endif;
		echo form_open('pagina/contato');
		echo form_label('Seu nome', 'nome');
		echo form_input('nome'); 
		echo form_label('Seu email', 'email');
		echo form_input('email');
		echo form_label('Assunto', 'assunto');
		echo form_input('assunto');
		echo form_label('Mensagem', 'mensagem');
		echo form_input('mensagem');
		echo form_submit('enviar', 'Enviar', array('class' => 'botao'));
		echo form_close('');
	?>
</div>

<?php $this->load->view('footer');?>