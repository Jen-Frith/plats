<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<link rel="stylesheet" href="css/app.css">
       
    </head>
    <body>

<div id="appBook">
</div>

  <div id="app" class="container">
	<div class="page-header">
		<h1 class="mb-5 pb-5">Let's see what we have</h1>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="mt-5">Add a Dish</h3>
        </div>
        
{{-- <form action="{{route('entreprise.store')}}" method="POST">
    @csrf

    <div class="form-group">
        <label for="bookTitle">Add société:</label>
        <input type="text" id="bookTitle" class="form-control" name="nameEntreprise">
        <input type="submit" class="btn btn-primary ml-2" value="Add Dish">

    </div>

</form> --}}

		<div class="panel-body">
            <form id="form" class="form-inline" action="{{route('client.store')}}" method="POST">
                @csrf
				<div class="form-group">
					<label for="bookTitle">Plat:</label>
					<input type="text" id="bookTitle" class="form-control" name="name">
				</div>
				<div class="form-group">
                    <label for="bookAuthor">Saveurs:</label>

					<select type="text" id="bookAuthor" class="custom-select" name="entreprise_id">
                      @foreach ($entreprises as $entreprise)
                          
                      <option value="{{$entreprise->id}}">{{$entreprise->nameEntreprise}}</option>
                      @endforeach
                     

				</div>

				<input type="submit" class="btn btn-primary ml-2" value="Add Dish">
			</form>
		</div>
	</div>



	<div class="panel panel-default">
		<div class="panel-heading d-flex justify-content-between align-items-center">
         <div> <h3 class="mt-5">Dishes List</h3></div>  
         <div class="mt-4">    
           <a href="{{route('client.listeSucre')}}"> <input type="submit" class="btn btn-primary ml-5" value="Sucré"></a>
           <a href="{{route('client.listeSale')}}">     <input type="submit" class="btn btn-primary ml-2" value="Salé"></a>
        </div>
		</div>
		<div class="panel-body">
			<table class="table table-striped">
				<thead><tr>
					<th>Dish</th>
                    <th>Flavor</th>

				</tr></thead>
				<tbody>
                    @foreach ($clients as $client)
                    
					<tr v-for="book in books">
                        <td>
                        
                        {{$client->name}}	
                        </td>
						<td>
                        <i>{{$client->entreprise->nameEntreprise}}</i>
                        </td>
                        <td>

						</td>
		
					</tr>
                    @endforeach
				</tbody>
			</table>
		</div>
	</div>
  </div>

    </body>
</html>
