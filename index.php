<?php
require_once("db.php");
?>
<html>
<head>
<title>PHP PDO CRUD</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php	
	$pdo_statement = $db->prepare("SELECT * FROM em ORDER BY id DESC");
	$pdo_statement->execute();
	$result = $pdo_statement->fetchAll();
?>
<div style="text-align:right;margin:20px 0px;"><a href="add.php" class="button_link"><img src="crud-icon/add.png" title="Add New Record" style="vertical-align:bottom;" /> Create</a></div>
<table class="tbl-qa">
  <thead>
	<tr>
	  <th class="table-header" width="20%">Matricule</th>
	  <th class="table-header" width="40%">Nom</th>
	  <th class="table-header" width="20%">Prenom</th>
	  <th class="table-header" width="5%">Date</th>
	  <th class="table-header" width="40%">Salaire</th>
	  <th class="table-header" width="20%">Telephone</th>
	  <th class="table-header" width="5%">Mail</th>
	</tr>
  </thead>
  <tbody id="table-body">
	<?php
	if(!empty($result)) { 
		foreach($result as $row) {
	?>
	  <tr class="table-row">
		<td><?php echo $row["matricule"]; ?></td>
		<td><?php echo $row["nom"]; ?></td>
		<td><?php echo $row["prenom"]; ?></td>
		<td><?php echo $row["date"]; ?></td>
		<td><?php echo $row["sal"]; ?></td>
		<td><?php echo $row["tel"]; ?></td>
		<td><?php echo $row["mail"]; ?></td>
		<td><a class="ajax-action-links" href='edit.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/edit.png" title="Edit" /></a> <a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'><img src="crud-icon/delete.png" title="Delete" /></a></td>
	  </tr>
    <?php
		}
	}
	?>
  </tbody>
</table>
</body>
</html>