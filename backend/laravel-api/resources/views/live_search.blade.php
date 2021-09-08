<!DOCTYPE html>
<html>
 <head>
  <title>Busqueda de Libros</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 align="center">Busqueda de Libros</h3><br />
   <div class="panel panel-default">
    <div class="panel-heading">Buscar Libros</div>
    <div class="panel-body">
     <div class="form-group">
      <input type="text" name="search" id="search" class="form-control" placeholder="Buscar..." />
     </div>
     <div class="form-group">
        <div class="form-group">
            <select name="filter_autor" id="filter_autor" class="form-control" required>
                <option value="">Filtro por Autor</option>
                    @foreach($autor as $aut)
                    <option value="{{$aut->Autor }}">{{$aut->Autor }}</option>
                    @endforeach
                        </select>
                    </div>
            <select name="filter_gender" id="filter_gender" class="form-control" required>
                <option value="">Filtro por Genero</option>
                    @foreach($genero as $gen)
                    <option value="{{$gen->Genero }}">{{$gen->Genero }}</option>
                    @endforeach
                        </select>
                    </div>
                    <div class="form-group">
            
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>
                        <button type="button" name="reset" id="reset" class="btn btn-default">Reset</button>
                    </div>
     <div class="table-responsive">
      <h3 align="center">Libros Disponibles: <span id="total_records"></span></h3>
      <table class="table table-striped table-bordered">
       <thead>
        <tr>
         <th>Titulo</th>
         <th>Autor</th>
         <th>Genero</th>
         <th>Favorito</th>
        </tr>
       </thead>
       <tbody>
       </tbody>
      </table>
     </div>
    </div>    
   </div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

 fetch_customer_data();
//Funcion para hacer la busqueda en tiempo real y que llene la tabla con los libros disponibles
 function fetch_customer_data(query = '')
 {
     //Muestra la tabla conn los libros correspondientes
  $.ajax({
   url:"{{ route('live_search.action') }}",
   method:'GET',
   data:{query:query},
   dataType:'json',
   success:function(data)
   {
    $('tbody').html(data.table_data);
    $('#total_records').text(data.total_data);
   }
  })
 }
//Live Search
 $(document).on('keyup', '#search', function(){
  var query = $(this).val();
  fetch_customer_data(query);
 });

 $('#filter').click(function(){
        var filter_gender = $('#filter_gender').val();// Retorna el valor seleccionado en Genero
        var filter_autor = $('#filter_autor').val();// Retorna el valor seleccionado en Autor

        if(filter_gender != '' &&  filter_autor == '') // Si hay algo Genero pero no en autor
        {
            fetch_customer_data(filter_gender); // Muestra los resultados de el Genero q buscamos
        }

        if(filter_gender == '' &&  filter_autor != '')// Si hay algo Autor pero no en Genero
        {
            fetch_customer_data(filter_autor);// Muestra los resultados de el Autor q buscamos
        }
        if(filter_gender != '' &&  filter_autor != '') // Si se quiere buscar de 2 filtros diferentes
        {
            alert('Seleccione solo 1 Filtro Porfavor');
        }
    });


//Reset de los filtros
    $('#reset').click(function(){
        $('#filter_gender').val(''); //Resetea el valor de la box de Genero
        $('#filter_autor').val('');//Resetea el valor de la box de Autor
        fetch_customer_data();//Resetea la tabla
    });
});
</script>


