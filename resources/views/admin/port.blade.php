@extends('admin.layout')
@section('contenu')


      @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Opération réussite</h4>
                {{ Session::get('success') }}
      </div>
      @endif
      @if($errors->any())
      <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-close"></i>Opération échoué</h4>
                @foreach($errors->all() as $error)
                <h4>{{ $error }}</h4>
                @endforeach
      </div>
      @endif
      
<h1 class="Title" >
           Employés port
          </h1>
          <br>
      <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">
                <button class="btn btn-block btn-success btn-xs" data-toggle="modal" data-target="#modal-client">Ajouter un nouveau employé du port</button>
              </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody>
                  <tr>
                  <th style="widowsdth: 70px">ID</th>
                  <th style="widowsdth: 70px">Nom d'utilisateur</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Email</th>
                   <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                @foreach($employes as $employe)
                <tr>
                  <td>{{ $employe->id }}</td>
                  <td>{{ $employe->username }}</td>
                  <td>{{ $employe->nom }}</td>
                  <td>{{ $employe->prenom }}</td>
                  <td>{{ $employe->email }}</td>

                      <td>
              <button type="button" class="btn btn-block btn-info ">Modifier</button>
                  </td>
                  <td>
              <button type="button" class="btn btn-block btn-danger ">Supprimer</button>
                  </td>

                  
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
                <h4 class="modal-title">Ajouter un nouveau employé du port</h4>
              </div>

              
              <div class="modal-body">
                <form enctype="multipart/form-data" method="post" action="insererEmploye">
                {{ csrf_field() }}
            <div class="form-group">
                  <label class="col-lg-3">Nom d'utilisateur</label>
                  <div class="col-lg-9">
                  <input name="username" type="text" class="form-control" placeholder="Entrer le nom d'utilisateur">
                  </div>
                </div>
                <br><br>
                <div class="form-group">
                  <label class="col-lg-3">Nom</label>
                  <div class="col-lg-9">
                  <input name="name" type="text" class="form-control" placeholder="Entrer le nom de l'employé">
                  </div>
                </div>
               <br><br>
                <div class="form-group">
                  <label class="col-lg-3">Prénom</label>
                  <div class="col-lg-9">
                  <input name="prenom" type="text" class="form-control" placeholder="Entrer le prénom de l'employé">
                  </div>
                </div>
                      <br><br>
                            <div class="form-group">
                  <label class="col-lg-3">Email</label>
                  <div class="col-lg-9">
                  <input name="email" type="email" class="form-control" placeholder="Entrer l'email de l'employé">
                  </div>
                </div>
                      <br><br>
                <div class="form-group">
                  <label class="col-lg-3">Mot de passe</label>
                  <div class="col-lg-9">
                  <input name="pass" type="password" class="form-control" placeholder="Entrer le mot de passe de l'employé">
                  </div>
                </div>
                      <br><br>
                <div class="form-group">
                  <label class="col-lg-3">Confirmer mot de passe</label>
                  <div class="col-lg-9">
                  <input name="pass_confirmation" type="password" class="form-control" placeholder="Confirmer le mot de passe de l'employé">
                  </div>
                </div>
                <br><br> 

             
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