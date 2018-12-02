
<?php

	if($nombreNews==0)
	{

		?>
			<p style="text-align: center">Aucune info</p>

		<?php

	}
	else
	{
		?>


			<p style="text-align: center">Il y a actuellement <?= $nombreNews ?> info(s). En voici la liste :</p>

<table>
  <tr><th>Auteur</th><th>Titre</th><th>Date d'ajout</th><th>Dernière modification</th><th>Action</th></tr>
<?php
foreach ($listeNews as $news)
{
  echo '<tr><td>', $news['auteur'], '</td><td>', $news['titre'], '</td><td>le ', $news['dateAjout']->format('d/m/Y à H\hi'), '</td><td>', ($news['dateAjout'] == $news['dateModif'] ? '-' : 'le '.$news['dateModif']->format('d/m/Y à H\hi')), '</td><td><a href="news-update-', $news['id'], '.html"><img src="/images/update.png" alt="Modifier" /></a> <a href="news-delete-', $news['id'], '.html"><img src="/images/delete.png" alt="Supprimer" /></a></td></tr>', "\n";
}
?>
</table>



		<?php
	}

?>





<?php

if($nombreCommentsSignales > 0)
{
	?>

		<p style="text-align: center">Il y a actuellement <?= $nombreCommentsSignales ?> commentaire(s) signalé(s). En voici la liste :</p>

<table>
	
	<tr><th>Info en question</th><th>Auteur</th><th>Contenu</th><th>Action</th></tr>

	<?php

	foreach ($listeCommentsSignales as $commentsSignales)
	{
		echo "<tr><td><a href=/news-".$commentsSignales['news'].".html>News</a></td><td>".$commentsSignales['auteur']."</td><td>".$commentsSignales['contenu']."</td><td><a href=/admin/comment-maintenir-".$commentsSignales['id'].".html><img src='/images/update.png' alt='Maintenir' /></a><a href=/admin/comment-delete-".$commentsSignales['id'].".html><img src='/images/delete.png' alt='Supprimer' /></a></td></tr>", "\n" ;
	} 
		


	?> 

</table>


	<?php
}
else
{
	?>
		<p style="text-align: center">Aucun commentaire signalé</p>
	<?php

}

?>

