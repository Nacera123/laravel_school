<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

        
       <br>  <br><br><br>

    <table>

        <thead>
            <tr>
            <th>intitule</th>
            <th>detail</th>
            <th>nombre d'heure</th> 

            </tr>
        </thead>
        <tbody>
        @foreach($formationList as $formation)
        <tr>
            
            <td>{{$formation->intitule}}</td>
           
             <td>{{$formation->description}}</td>
             <td>{{$formation->nbre_d_heure}}</td>
            
             </tr> 
             @endforeach            
        </tbody>

        
    </table>



</body>
</html>