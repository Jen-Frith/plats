<link rel="stylesheet" href="css/app.css">


<div class="panel-body">
    <table class="table table-striped">
        <thead><tr>
            <th>Plat sucré</th>
            <th>Saveur</th>

        </tr></thead>
        <tbody>
            @foreach ($listSucre as $client)
            
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