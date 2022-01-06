<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
    <title>Document</title>
</head>
@if(session('success Delete'))
<div class="alert alert-success" role="alert">
    <!-- on écho le message passé à la clé success  -->
    {{session('success Delete')}}
</div>
@endif
@if(session('success Delete compte'))
<div class="alert alert-success" role="alert">
    {{session('success Delete compte')}}
</div>
@endif

@if(session('success Delete utilisateur'))
<div class="alert alert-success" role="alert">
    {{session('success Delete utilisateur')}}
</div>
@endif
<body>


    <center><h1>bienvenue dans ton espace admin</h1></center>

    <h2>TABLE UTILISATEURS</h2><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID UTILISATEUR</th>
                <th scope="col">NOM</th>
                <th scope="col">PRENOM</th>
                <th scope="col">AGE</th>
                <th scope="col">ADRESSE</th>
                <th scope="col">TELEPHONE</th>
                <th scope="col">ID COMPTE</th>
                <th scope="col">CREATED AT</th>
                <th scope="col">UPDATED AT</th>
                
                <th scope="col">Modifer</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($utilisateurList as $utilisateur)

            <tr>
                <td>{{$utilisateur->id_utilisateur}}</td>
                <td>{{$utilisateur->nom}}</td>
                <td>{{$utilisateur->prenom}}</td>
                <td>{{$utilisateur->age}}</td>
                <td>{{$utilisateur->adresse}}</td>
                <td>{{$utilisateur->telephone}}</td>
                <td>{{$utilisateur->id_compte}}</td>
                <td>{{$utilisateur->created_at}}</td>
                <td>{{$utilisateur->updated_at}}</td>

                <td>
                    <form action="" method="GET">
                        <button class="btn btn-info">Modifier</button>
                    </form>
                </td>
                <td>

                
                    
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$utilisateur->id_utilisateur}}">Supprimer</button>
                            

                    <div class="modal fade" id="{{$utilisateur->id_utilisateur}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression du compte de {{$utilisateur->id_utilisateur}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Confirmez-vous supprimer le compte de {{$utilisateur->nom}} {{$utilisateur->prenom}} ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

                                    
                                    <form action="{{route('delete_utilisateur', ['id' => $utilisateur->id_utilisateur])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
        
                </td>
            </tr>

            @endforeach
        </tbody>
    </table><br><br>

    <h2>TABLE COMPTE</h2><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID COMPTE</th>
                <th scope="col">TYPE</th>
                <th scope="col">LOGIN</th>
                <th scope="col">PASSWORD</th>
                <th scope="col">SECRET QUESTION</th>
                <th scope="col">ANSWER</th>
                <th scope="col">CREATED AT</th>
                <th scope="col">UPDATED AT</th>
                
                <th scope="col">Modifer</th>
                <th scope="col">Supprimer</th>

            </tr>
        </thead>
        <tbody>
            @foreach($compteList as $compte)

            <tr>
                <td>{{$compte->id_compte}}</td>
                <td>{{$compte->type}}</td>
                <td>{{$compte->login}}</td>
                <td>{{$compte->password}}</td>
                <td>{{$compte->secret_question}}</td>
                <td>{{$compte->answer}}</td>
                <td>{{$compte->created_at}}</td>
                <td>{{$compte->updated_at}}</td>

                <td>
                    <form action="" method="GET">
                        <button class="btn btn-info">Modifier</button>
                    </form>
                </td>
                <td>
                    
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$compte->login}}">Supprimer</button>
                            

                    <div class="modal fade" id="{{$compte->login}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression de {{$compte->login}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-toto">
                                    Confirmez-vous supprimer {{$compte->login}} ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

                                    
                                    <form action="{{ route('delete_compte', ['id' => $compte->id_compte]) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                            
    

                </td>
            </tr>

            @endforeach
        </tbody>
    </table><br><br>





    <h2>TABLE FORMATION</h2><br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID FORMATION</th>
                <th scope="col">INTITULE</th>
                <th scope="col">DESCRIPTION</th>
                <th scope="col">HEURES</th>
                <th scope="col">IMAGE</th>
                <th scope="col">CREATED AT</th>
                <th scope="col">UPDATED AT</th>
                
                <th scope="col">Modifer</th>
                <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody>
            @foreach($formationList as $form)

            <tr>
                <td>{{$form->id_formation}}</td>
                <td>{{$form->intitule}}</td>
                <td>{{$form->description}}</td>
                <td>{{$form->nbre_d_heure}}</td>
                <td>{{$form->image}}</td>
                <td>{{$form->created_at}}</td>
                <td>{{$form->updated_at}}</td>

                <td>
                    <form action="" method="GET">
                        <button class="btn btn-info">Modifier</button>
                    </form>
                </td>
                <td>
                    
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$form->intitule}}">Supprimer</button>
                        

                    <div class="modal fade" id="{{$form->intitule}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-titi">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression de {{$form->intitule}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-titi">
                                    Confirmez-vous supprimer {{$form->intitule}} ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>

                                    
                                    <form action="{{route('delete_formation', ['id' => $form->id_formation])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>

    
    
    
    
    
    
    <br><br>

    </table>

</body>
</html>