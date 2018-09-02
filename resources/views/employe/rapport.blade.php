<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	table{
		border-collapse: collapse;
	}
		td,th{
			border: 1px solid;
		}
	</style>
</head>
<body>


	

              <h3 class="box-title">
                <p>Navire : <b>{{ $listing->navire }}</b> </p>
                <p>N° de gros : <b>{{ $listing->gros }}</b> </p>
                <p>N° de convoi : <b>{{ $listing->nombre_conteneur}}</b></p>
                <p>debut transfert : <b>{{ $listing->debut_transfert}}</b></p>
                <p>fin transfert : <b>{{ $listing->fin_transfert}}</b></p>
            </h3>

            <table  >
            	<tr style="background-color: green">
            		<th>
        			  N°
            		</th>
            		<th>
            			Art
            		</th>
            		<th>
            			Identification TCs
            		</th>
            		<th>
            			Type
            		</th>
            		<th>
            			Observation
            		</th>

            	</tr>

            	@foreach($list as $l)
            	<tr>
            		
            	<td>{{ $l->id }}</td>
            	<td>{{ $l->art }}</td>
            	<td>{{ $l->tcs }}</td>
            	<td>{{ $l->type }}</td>
            	<td>{{ $l->observation }}</td>





            	</tr>
            	@endforeach


            </table>
</body>
</html>