<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LiveSearch extends Controller
{
    function index()
    {
      //Se extrae de la tabla libros todos los Generos y Autores que esten en esta
      $autor = DB::table('libros')
      ->select('Autor')
      ->groupBy('Autor')
      ->orderBy('Autor', 'ASC')
      ->get();
      
      $genero = DB::table('libros')
      ->select('Genero')
      ->groupBy('Genero')
      ->orderBy('Genero', 'ASC')
      ->get();
 return view('live_search', compact('genero','autor')); // Los regresa a la vista como variables

     
    }
    //Recibe los datos de la tabla de base de datos y los ordena 
    function action(Request $request)
    {
     
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('libros')
         ->where('Titulo', 'like', '%'.$query.'%')
         ->orWhere('Autor', 'like', '%'.$query.'%')
         ->orWhere('Genero', 'like', '%'.$query.'%')
         ->orWhere('Favorito', 'like', '%'.$query.'%')
         ->orderBy('id', 'asc')
         ->get();
         
      }
      else
      {
       $data = DB::table('libros')
         ->orderBy('id', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $output .= '
        <tr>
         <td>'.$row->Titulo.'</td>
         <td>'.$row->Autor.'</td>
         <td>'.$row->Genero.'</td>
         <td>'.$row->Favorito.'</td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">No se encontro el libro solicitado</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
     
    }
    
}
?>