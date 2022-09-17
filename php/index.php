<?php


$bdd = new PDO('mysql:host=sdfgannsdfgang;dbname=users', 'sdfgannsdfgang', 'SDFgang08993')

?>

<! DOCTYPE html >
   < html  lang = " fr " >
       < tête >
           < meta  charset = " UTF-8 " >
           < meta  name = " viewport " content = " width = device-width, initial-scale = 1.0 " >
           < meta  name = " author " content = " NoS1gnal " />

           
           < titre > Connexion </ titre >
       </ tête >
        < corps >
       
       < div  class = " login-form " >
            <? php 
               if ( isset ( $ _GET [ 'login_err' ]))
               {
                   $ err = htmlspecialchars ( $ _GET [ 'login_err' ]);

                   commutateur ( $ err )
                   {
                       case  'mot de passe' :
                       ?>
                           < div  class = " alert alert-danger " >
                               < strong > Erreur </ strong > mot de passe incorrect
                           </ div >
                       <? php
                       pause ;

                       case  'email' :
                       ?>
                           < div  class = " alert alert-danger " >
                               < strong > Erreur </ strong > email incorrect
                           </ div >
                       <? php
                       pause ;

                       cas  'déjà' :
                       ?>
                           < div  class = " alert alert-danger " >
                               < strong > Erreur </ strong > compte inexistant
                           </ div >
                       <? php
                       pause ;
                   }
               }
               ?> 
           
           < form  action = " connexion.php " method = " post " >
               < h2  class = " text-center " > Connexion </ h2 >       
               < div  class = " form-group " >
                   < input  type = " email " name = " email " class = " form-control " placeholder = " Email " required = " required " autocomplete = " off " >
               </ div >
               < div  class = " form-group " >
                   < input  type = " password " name = " password " class = " form-control " placeholder = " Mot de passe " required = " required " autocomplete = " off " >
               </ div >
               < div  class = " form-group " >
                   < button  type = " submit " class = " btn btn-primary btn-block " > Connexion </ button >
               </ div >   
           </ form >
           < P  class = " text-centre " > < a  href =" inscription.php " > Inscription </ a > </ p >
       </ div >
       < style >
           . login-form {
               largeur :  340 px ;
               marge :  50 px auto;
           }
           . login-form  formulaire {
               marge inférieure :  15 px ;
               arrière -  plan : # f7f7f7 ;
               boîte-ombre :  0 px  2 px  2 px  rgba ( 0 ,  0 ,  0 ,  0.3 );
               rembourrage :  30 px ;
           }
           . login-form  h2 {
               marge :  0  0  15 px ;
           }
           . former de contrôle , . btn {
               hauteur min :  38 px ;
               rayon de la bordure :  2 px ;
           }
           . btn {        
               taille de la police :  15 px ;
               poids de la police : gras;
           }
       </ style >
       </ corps >
</ html >




