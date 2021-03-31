<?php
include("variable.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Facture</title>
    <noscript>Vous ne pouvez pas voir cette page.</noscript>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <section class="centre">
        <h2>Facture</h2>
    </section>
        <figure class="centre">
            <img src="pommes.png" alt="Logo aux bonnes pommes" width="40%" height="auto">
        </figure>
            <div class="centre">
                <p><strong>FACTURE N° : </strong>
                FR-<?php echo(mt_rand(0,9).mt_rand(0,9).mt_rand(0,9)); ?></p>
                <p><strong>DATE :</strong>
                <?php echo(date("d/m/Y")); ?></p>
                <p><strong>COMMANDE N° :</strong>
                <?php echo(mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9)."/".date("Y")); ?></p>
                <p><strong>ÉCHÉANCE :</strong>
                <?php echo date("d/m/Y", strtotime("+2 month")); ?></p>
            <div>
</header>
<main>
    <section class="flex">
        <div>
        <h3>De</h3>
        <?php
                echo($entreprise["nom"]."</br>");
                echo($entreprise["adresse"]."</br>");
                echo($entreprise["ville"]."</br>");
                echo($entreprise["tel"]."</br>");
                echo($entreprise["mail"]."</br>");
        ?>
       </div>
       <div> 
        <h3>Facturé à</h3>
        <?php
                echo($client["nom"]."</br>");
                echo($client["adresse"]."</br>");
                echo($client["ville"]."</br>");
                echo($client["tel"]."</br>");
                echo($client["mail"]."</br>");
        ?>
        </div>
    </section></br>
    <section>
    <table border="1" align="center" width="80%" cellspacing="0" cellpadding="10" text-align="center";>
    	<tr>
	        <?php
        	for ($i = 0; $i < count($entete); $i++)
        	{
	        	echo("<th>".$entete[$i]."</th>");
	        }
	        ?>
	    </tr>
	    <tr>
	         <?php
	        for ($i = 0; $i < count($produit); $i++)
	        {
		        echo("
		        <tr>
	    		<td><strong>".$produit[$i]["nom"]."</strong></td>
		    	<td>".$produit[$i]["ref"]."</td>
                <td>".$produit[$i]["qte"]."</td>
                <td>".$produit[$i]["pu"]."</td>
                <td>".$produit[$i]["total"]."</td>
	         	</tr>
	    	    ");
	        }
            ?>
        </tr>
    </table></br>
    </section>
    <table  border="1" align="center" width="30%" cellspacing="0" cellpadding="10";>
        <tr>
            <th>Sous-total</th>
            <td><?php echo($tarif); ?></td>
        </tr>
        <tr>
            <th>Taux de taxe</th>
            <td>20%</td>
        </tr>
        <tr>
            <th>Taxe totale</th>
            <td><?php echo($tarif*0.2); ?></td>
        </tr>
        <tr>
            <th>Prix TTC</th>
            <td><?php  echo($tarif*0.2+$tarif)." €"; ?></td>
        </tr>
    </table>
</main>
<footer>
    <p>La présente facture sera payable au plus tard le : <?php echo date("d/m/Y", strtotime("+2 month")); ?>.
    Passé ce délai, sans obligation d'envoie d'une relance, conformément à l'article L441-6 du Code de Commerce, il sera appliqué une pénalité calculée à un taux annuel de 10%. Une indemnité forfaitaire pour frais de recouvrement de 40€ sera aussi exigible. 
    Pas d'escompte pour paiement anticipé.</p>
</footer>
</body>
</html>