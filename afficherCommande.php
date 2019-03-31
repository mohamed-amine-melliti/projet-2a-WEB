<?PHP
include "../../core/commandec.php";
$commande1C=new commandeC();
$listecommandes=$commande1C->affichercommandes();

//var_dump($listecommandes->fetchAll());
?>
<table border="1" id="myTable2">
<tr>
<td onclick="sortTable(0)">idCmd</td>
<td>dateCmd</td>
<td>prixtot</td>
<td>date_prev</td>
<td>etatCmd </td>
<td>supprimer</td>
<td>modifier</td>
</tr>
<script>
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable2");
  switching = true;
  // Set the sorting direction to ascending:
  dir = "asc"; 
  /* Make a loop that will continue until
  no switching has been done: */
  while (switching) {
    // Start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /* Loop through all table rows (except the
    first, which contains table headers): */
    for (i = 1; i < (rows.length - 1); i++) {
      // Start by saying there should be no switching:
      shouldSwitch = false;
      /* Get the two elements you want to compare,
      one from current row and one from the next: */
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /* Check if the two rows should switch place,
      based on the direction, asc or desc: */
      if (dir == "asc") {
        if (Number(x.innerHTML) > Number(y.innerHTML)) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      } else if (dir == "desc") {
        if (Number(x.innerHTML) < Number(y.innerHTML)) {
          // If so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /* If a switch has been marked, make the switch
      and mark that a switch has been done: */
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      // Each time a switch is done, increase this count by 1:
      switchcount ++; 
    } else {
      /* If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again. */
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}
</script>
<?PHP 
foreach($listecommandes as $row){
	?>
	<tr>
	<td><?PHP echo $row['idCmd']; ?></td>
	<td><?PHP echo $row['dateCmd']; ?></td>
	<td><?PHP echo $row['prixtot']; ?></td>
	<td><?PHP echo $row['date_prev']; ?></td>
	<td><?PHP echo $row['etatCmd']; ?></td>
	<td><form method="POST" action="supprimercommande.php">
	<input type="submit" name="supprimer" value="supprimer">
	<input type="hidden" value="<?PHP echo $row['idCmd']; ?>" name="idCmd">
	</form>
	</td>
	<td><a href="modifiercommande.php?idCmd=<?PHP echo $row['idCmd']; ?>">
	Modifier</a></td>
	</tr>
	<?PHP

}
?>

</table>






