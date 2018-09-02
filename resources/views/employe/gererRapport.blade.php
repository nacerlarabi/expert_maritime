@extends('employe.layout')
@section('contenu')


<h1 class="Title" >
            RAPPORT D'EXPERTISE DES CONTENEURS RECUS A L'ENTREE DU PORT-SEC SNTR/AGS 
          </h1>
          <br>
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">
                <p>Navire : <b>{{ $listing->navire }}</b> </p>
                <p>N° de gros : <b>{{ $listing->gros }}</b> </p>
                <p>N° de convoi : <b>{{ $listing->nombre_conteneur}}</b></p>
                <div class="input-group">
                    <input type="text" id="SearchInput" onkeyup="SearchFunction()" name="table_search" class="form-control pull-right" placeholder="Entrez le nom du conteneur">
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                </div>  
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="SearchIn" class="table table-bordered">
                <tbody>
                <tr>
                  <th>N°</th>
                  <th>Identification Tcs</th>
                  <th>Type</th>                  
                  <th>Etat du scelle</th>
                  <th>Mat camion</th>
                  <th>Observations</th>
                  <th>Interchange</th>
                  <th>PV Minutes</th>
                  <th>Selectionner</th>
                </tr>
                @for($i=11;$i<count($liste[0]);$i++)
                @if (!(App\Rapport::where([
                ['tcs', '=',$liste[0][$i][2]],
                ['listing_id', '=', $listing->id],
                
                ])->count() > 0))
                <tr>
                  <form method="post" action="/employe/listing/{{$listing->id  }}/ajouterRapport">
                       {{ csrf_field() }} 
                  <td>{{ $liste[0][$i][0] }}</td>
                  <input type="text" name="num" value="{{ $liste[0][$i][0] }}" hidden="hidden" id="cacher">
                  <input type="text" name="art" value="{{ $liste[0][$i][1] }}" hidden="hidden" id="cacher">
                  <td>{{ $liste[0][$i][2] }}</td>
                  <input type="text" name="tcs" value="{{ $liste[0][$i][2] }}" hidden="hidden" id="cacher">
                  <td>{{ $liste[0][$i][3] }}</td>   
                  <input type="text" name="type" value="{{ $liste[0][$i][3] }}" hidden="hidden" id="cacher">
                           
                  <td><input type="text" name="etat" value=""></td>
                  <td><input type="text" name="mat_camion" value=""></td>
                  
                    
                  <td><select name="observation">
                    <option value="RAS">RAS</option>
                    <option value="Endommagé">Endommagé</option>
                  </select></td>
                <td></td>
                <!--  <td><button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-intercharge">Créer interchange</button></td> -->  
                  <td><button type="button" class="btn btn-block btn-default " data-toggle="modal" data-target="#modal-pv">Créer Pv minutes</button></td>
                  <td><button type="submit" class="btn btn-block btn-success btn-lg" data-toggle=""  data-target="#" onclick='document.getElementById("SearchInput").value=""'>TC Suivant</button></td>
                  </form>
                </tr>
                @endif
                @endfor
                
              </tbody></table>
              <div class="box-header with-border">
              <h3 class="box-title">
                <a href="/employe/listing/{{ $listing->id }}/genererRapport" class="btn btn-block btn-success btn-lg" data-toggle="" data-target="#">Valider</a>
              </h3>
            </div>
            </div>
            <!-- /.box-body -->        
          </div>
      

  

    <!-- Main content -->
   
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

        <!-- right col -->
      </div>
     

 <script>
  function SearchFunction(){

    var input, filter, table, tr, td, i;
    input = document.getElementById("SearchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("SearchIn");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++){
      td=tr[i].getElementsByTagName("td")[1];
      if(td){
        if(td.innerHTML.toUpperCase().indexOf(filter) > -1){
          tr[i].style.display = "";
        }else{
          tr[i].style.display = "none";
        }
      } 
    }
  }
  </script>
  <script type="text/javascript">
    function obs(){
      
    }
  </script>
  <script src="/bower_components/jquery/dist/jquery.min.js"></script>
  <script type="text/javascript">
    
    $('#cacher').hide();
  </script>
@endsection