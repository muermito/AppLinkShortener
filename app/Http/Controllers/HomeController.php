<?php


namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Links;
use App\Historials;

/**
 * Description of HomeControllers
 *
 * @author Eddy
 */
class HomeController extends BaseController
{
	public function index()
	{		
		$link = new Links;
		$link->id=0;
		$link->url = "";
		$link->codigo = "";
		return view('index')
		->with("link", $link);
		
	}
	
	public function registraVisita($id)
	{
		$ipAdress = Links::GetIpAdress();	
		$entity = new Historials;
		$entity->links_id = $id;
		$entity->direccionip = $ipAdress;
		$entity->save();
				
	}
	
	
	public function crearLink(Request $request)
	{
		$url = $request->input('url');
		
		$objUrl = Links::where('url', $url)->first();
		// si existe el url
		if ($objUrl){
			
			echo "<script languaje=’javascript’>alert('Ya existe URL !')</script>";			 			
			return view('index')
				 ->with("link", $objUrl);	
		}
		else //nuevo link
		{
			//creamos un nuevo codigo
            do {
                // generar aleatoriamente el codigo corto de 6 digitos				
				$codigo = str_random(5);				
            }while(Links::where('codigo',$codigo)->count() > 0);
			$link  = new Links;
			$link->url = $url;
			$link->codigo = $codigo;
			$link->save();
			
			return view('index')
				 ->with("link", $link);				 								
		}
	}
	
	public function listado_historico()
	{
		$listado = Links::all();		
		$historial = Historials::GetListHistorial()->get();		
		
		foreach($listado as $reg){ 
			$reg->cantVisitas = 0;
			foreach ($historial as $regHistorial){				
				if ($reg->id == $regHistorial->links_id){
					$reg->cantVisitas = $regHistorial->CantVisitas;
				}				
			}
		}		
		return view('listados.listado_historico')
				 ->with("listado", $listado);				 		
	}
	
	public function mostrarDetalleURL($id)
	{
		$listDetalleUrl = Historials::Where('links_id', $id)->get();		
		return view('listados.listado_detalleUrl')
		->with("listado", $listDetalleUrl);
		
	}
}
