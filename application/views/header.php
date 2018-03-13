<!DOCTYPE>
<html>
    <head>
        <meta charset="UTF-8" />
        <title><?php echo $titulo; ?></title>
        <link rel="stylesheet" href="<?php base_url('assets/css/style.css') ?>">
    </head>
    <body>
<div>
	<ul>
		<li> <a href="<?php echo base_url(); ?>"> Home </a> </li>
		<li> <a href="<?php echo base_url('clientes'); ?>"> Clientes </a> </li>
		<li> <a href="<?php echo base_url('sobre'); ?>">  Sobre </a> </li>
		<li> <a href="<?php echo base_url('servicos'); ?>"> Servicos </a> </li>
		<li> <a href="<?php echo base_url('contato'); ?>"> contato </a> </li>
	</ul>
</div>