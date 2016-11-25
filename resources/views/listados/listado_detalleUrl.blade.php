<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading"><h1>Listado Detallado de URL Seleccionada</h1> </div>
<?php 

if( count($listado) > 0){
?>
	
<table id="tabla_detalle" class="table table-bordered table-striped" cellspacing="0" width="100%">
       
        <thead>
            <tr>
             <th style="width:10px">Id</th>
                <th>Direccion IP</th>
                <th>Fecha de Visita</th>                
            </tr>
        </thead>
<tbody>


<?php 
	$item = 0;
   foreach($listado as $reg){  
	   $item++;
?>

 <tr role="row" class="odd">
    <td> <?= $item; ?> </td>
	<td> <?= $reg->direccionip;  ?></td>
	<td> <?= $reg->created_at; ?></td>		
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
<br/><div ><label style='color:#FA206A'>...No se ha encontrado ninguna URL visitada...</label>  </div> 

<?php
}
?>
</div>
<div><button class="btn btn-default" onclick="cerrarPopup();"  title="Cerrar"><i class="fa fa-times"></i>Cerrar</button></div>