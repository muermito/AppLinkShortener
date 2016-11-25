@extends('layouts.bootstrap')

@section('head')
<meta charset="UTF-8">
<title> Link Shortener </title>

@stop

@section('content')
<h1 class="title"> Gerenar Link Shortener</h1>	
			<form action="crearLink" method="post">
				{!! csrf_field() !!}
				
				<input type="url" name="url" placeholder="Ingrese la url..." value="<?= $link->url; ?>">
				<input type="submit" value="Generar">
				<imput type='label'> Link Shortener = <a href="<?= $link->url; ?>" onclick="registraVisita(<?= $link->id; ?>);" target="_blank"><?= $link->codigo; ?> </a></imput>
			</form>	
@stop
