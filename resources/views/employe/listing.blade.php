@extends('employe.layout')
@section('contenu')

<h1 class="Title" >
           Importation des listing's
          </h1>
          <br>
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                	<tr>
                  <th style="widowsdth: 70px">ID</th>
                  <th>Client</th>
                  <th>Navire</th>
                  <th>Date</th>
                  <th>Nombre conteneurs</th>
                  <th>Gros</th>
                  <th>Quai</th>
                  <th>Début transfert</th>
                  <th>Fin transfert</th>
                  <th>Générer rapport d'expertise</th>

                </tr>
                @foreach($listing as $l)
                <tr>
                	<td>{{ $l->id }}</td>
                  <td>{{ $l->user['username'] }}</td>
                	<td>{{ $l->navire }}</td>
                  <td>{{ $l->created_at }}</td>
                  <td>{{ $l->nombre_conteneur }}</td>
                  <td>{{ $l->gros }}</td>
                  <td>{{ $l->quai }}</td>
                  <td>29/05/2018</td>
                  <td>31/05/2018</td>
                  <td><a href="/employe/listing/{{ $l->id }}/gererRapport">Générer rapport</a></td>
                      <td>

                	
                </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
            
          </div>
      

  

    <!-- Main content -->
   
        <!-- /.Left col -->
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

        <!-- right col -->
      </div>

<div class="modal fade in" id="modal-client" style="">
 <div class="modal-dialog">
            <div class="modal-content">
              
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Importer un nouveau listing</h4>
              </div>

              
              <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="listing/insererListing">
                {{ csrf_field() }}
                <div class="form-group">
                  <label class="col-lg-3">N° de gros</label>
                  <div class="col-lg-9">
                  <input name="gros" type="number" class="form-control" placeholder="Entrer le numéro de gros">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label class="col-lg-3">Date début transfert</label>
                  <div class="col-lg-9">
                  <input name="date" type="date" class="form-control" placeholder="Entrer la raison social">
                  </div>
                </div>
                <br><br> 
                          <div class="form-group">
                  <label class="col-lg-3">Fichier listing</label>
                  <div class="col-lg-9">
                     <input type="file" class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#modal-client" name="fichier">
                  </div>
                </div>
             
              </div>  
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary" >Enregistrer</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
        </div>
      </div>
      @endsection