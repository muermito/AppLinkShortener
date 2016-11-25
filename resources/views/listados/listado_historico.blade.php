@extends('layouts.bootstrap')

@section('head')
<meta charset="UTF-8">
<title> Listado Histórico </title>

@stop

@section('content')
<div>              
<?php 

if( count($listado) >0){
?>
	<h1>Listado Histórico de URL registradas</h1>
<table id="tabla_historico" class="table table-bordered table-striped" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             <th style="width:10px">Id</th>
                <th>Url</th>
                <th>Link Shortener</th>
                <th>Nº Visitas</th>                
				<th style="width:80px" class = "td-actions"> Acción</th>              
            </tr>
        </thead>
<tbody>


<?php 

   foreach($listado as $reg){  
?>

 <tr role="row" class="odd">
    <td> <?= $reg->id; ?> </td>
	<td> <?= $reg->url;  ?></td>
	<td> <?= $reg->codigo; ?></td>
	<td> <?= $reg->cantVisitas;  ?></td>	
	<td style="width: 150px; align-content: center">
		<button class="btn btn-primary btn-xs" onclick="mostrarDetalle(<?= $reg->id; ?>);" ><i class="fa fa-fw fa-eye"></i>Ver</button>								
	</td>	
</tr>
<?php        
}
?>
    </table>
    <?php
}
else
{
?>
<br/><div ><label style='color:#FA206A'>...No se ha encontrado ninguna URL...</label>  </div> 

<?php
}
?>
</div>

@stop