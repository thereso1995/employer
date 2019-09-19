<?php
require_once("db.php");
if(!empty($_POST["save_record"])) {
	$pdo_statement=$db->prepare("update em set nom='" . $_POST[ 'nom' ] . "', prenom='" . $_POST[ 'prenom' ]. "', date='" . $_POST[ 'date' ]. "', sal='" . $_POST[ 'sal' ]. "', tel='" . $_POST[ 'tel' ]. "', mail='" . $_POST[ 'mail' ]. "' where id=" . $_GET["id"]);
	$result = $pdo_statement->execute();
	if($result) {
		header('location:index.php');
	}
}
$pdo_statement = $db->prepare("SELECT * FROM em where id=" . $_GET["id"]);
$pdo_statement->execute();
$result = $pdo_statement->fetchAll();
?>
<html>
<head>
<title>PHP PDO CRUD - Edit Record</title>
<style>
body{width:615px;font-family:arial;letter-spacing:1px;line-height:20px;}
.button_link {color:#FFF;text-decoration:none; background-color:#428a8e;padding:10px;}
.frm-add {border: #c3bebe 1px solid;
    padding: 30px;}
.demo-form-heading {margin-top:0px;font-weight: 500;}	
.demo-form-row{margin-top:20px;}
.demo-form-field{width:300px;padding:10px;}
.demo-form-submit{color:#FFF;background-color:#414444;padding:10px 50px;border:0px;cursor:pointer;}
</style>
</head>
<body>
<div style="margin:20px 0px;text-align:right;"><a href="index.php" class="button_link">Back to List</a></div>
<div class="frm-add">
<h1 class="demo-form-heading">Edit Record</h1>
<form name="frmAdd" action="" method="POST">
  <div class="demo-form-row">
	  
	
	  <input type="text" name="id" value="EM-<?php 
           echo @$id ?>" readonly class="center">
       
            <br /><br />
            <?php 
            if(isset($nom) and !preg_match("#^[a-zA-Z \-]+$#",$nom) and trim($nom)) echo "<br /><br /><span>Nom incorrerecte</span><br />";
            ?>
             <input type="text" name="nom" class="demo-form-field" value="<?php echo $result[0]['nom']; ?>" required  />
          
            <br /><br />
            <?php  
            if(isset($nom) and !preg_match("#^[a-zA-Z \-]+$#",$prenom) and trim($prenom)) echo "<br /><br /><span>Prenom incorrerecte</span><br />";
            ?>
            <input type="text" name="prenom" value="<?php echo $result[0]['prenom']; ?>" placeholder="Prenom" class="center">
           
            <br /><br />
            <?php   
if (isset($date) and !preg_match('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#',@$date))
{
    echo "<br /><br /><span>Date invalide</span><br />";
}
            
?> 
            <input type="text" name="date" value="<?php echo $result[0]['date']; ?>" placeholder="Date de Naissance: J/M/Y" class="center">
            
            <?php 
           if ($sal >= 25000 | $sal < 1000001) {
            echo "";
        } else {
            echo "Salaire invalide";
        }
            
            ?> 
<br /><br />
            <input type="text" name="sal" value="<?php echo $result[0]['sal']; ?>" placeholder="[25000 à 1000000]" class="center">
            <br /><br />
            <?php 
            if(!preg_match("#^[0-9 \-]+$#",$tel)) {
        @$erreur.= "";
      }
      ?>
            <input type="text" name="tel" value="<?php echo $result[0]['tel']; ?>" placeholder="Telephone port" class="center">
            <br /><br />
            <?php
            if(isset($mail) and !preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $mail ) and trim($mail))
            {
                echo "<br /><br /><span>Email invalide</span><br />";
            } 
            ?>
            <input type="text" name="mail" value="<?php echo $result[0]['mail']; ?>" placeholder="Email" class="center">
            <br /><br />
  <div class="demo-form-row">
	  <input name="save_record" type="submit" value="Save" class="demo-form-submit">
  </div>
  </form>
</div>
</body>
</html>