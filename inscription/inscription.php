<?php
$bdd = new PDO('mysql:host=54.36.91.62;dbnameftp.cluster027.hosting.ovh.net', 'sdfgann', 'SDFgang08993')
?>


<html>
	<head>
		<title>Connexion</title>
    <meta charset="UTF-8">
</head>
<body>
    <div align="center">
        <h2>inscription</h2>
        <br />
        <form method="POST" action="">
			
       <table>
		   <tr>
	   <td align=right>
		<label for="pseudo">Pseudo :</label> 
       </td>
	   <td >
            <input type="text"
            placeholder="Votre pseudo"
			id="pseudo"
            name="pseudo" />
       </td>
</tr>

<tr>
	   <td align=right >
		<label for="mail">Mail :</label> 
       </td>
	   <td >
            <input type="email"
            placeholder="Votre mail"
			id="mail"
            name="mail" />
       </td>
</tr>

<tr>
	   <td  align=right>
		<label for="mail2"> Confirmation du Mail :</label> 
       </td>
	   <td >
            <input type="email"
            placeholder="Confirmez votre mail"
			id="mail2"
            name="mail" />
       </td>
</tr>

<tr>
	   <td  align=right>
		<label for="mdp"> Mot de passe :</label> 
       </td>
	   <td >
            <input type="password"
            placeholder="Votre mot de passe"
			id="mdp"
            name="mdp" />
       </td>
</tr>

<tr>
	   <td  align=right>
		<label for="mdp2"> Confirmation du mot de passe :</label> 
       </td>
	   <td >
            <input type="password"
            placeholder="Confirmez votre mdp"
			id="mdp2"
            name="mdp2" />
       </td>
</tr>
<tr>
<td> </td>
<td align=center> 
	<br>
	<input type="submit" value="Je m'inscris"/>
</br>
</td>
</tr>
</table>
<br />


        </form>
    </div>
</body>
</html>