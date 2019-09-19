<?php


    if(isset($_POST['add_record'])) {
        
    require_once("db.php");

    
	$sql = "INSERT INTO `em` SET matricule=:matricule, nom=:nom, prenom=:prenom, tdate=:date, sal=:sal, tel=:tel, email=:mail";
    $pdo_statement = $db->prepare( $sql );
	$pdo_statement->bindValue(':matricule',$_POST['matricule']);
	$pdo_statement->bindValue(':nom',$_POST['name']);
	$pdo_statement->bindValue(':prenom',$_POST['prename']);
	$pdo_statement->bindValue(':date',$_POST['date']);
	$pdo_statement->bindValue(':sal',$_POST['sal']);
	$pdo_statement->bindValue(':tel',$_POST['tel']);
    $pdo_statement->bindValue(':mail',$_POST['mail']);
    if($pdo_statement->execute()){
        echo "réussie";
        header('location:index.php');
    }
    
	
	
}

$matricule = 0;
$matricul++;

?>
<html>
<head>
<title>EMPLOYER</title>
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
<h1 class="demo-form-heading">Add New Record</h1>
<form name="frmAdd" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    
    <input type="text" name="matricule" value="EM-<?=$matricule ?>" readonly class="center">
        
                <br /><br />
                <?php 
                if(isset($name) and !preg_match("#^[a-zA-Z \-]+$#",$name) and trim($name)) echo "<br /><br /><span>name incorrerecte</span><br />";
                ?>
                <input type="text" name="name" placeholder="name" class="center">
            
                <br /><br />
                <?php  
                if(isset($name) and !preg_match("#^[a-zA-Z \-]+$#",$prename) and trim($prename)) echo "<br /><br /><span>Prename incorrerecte</span><br />";
                ?>
                <input type="text" name="prename" placeholder="Prename" class="center">
            
                <br /><br />
                <?php   
    if (isset($date) and !preg_match('#^([0-9]{2})/([0-9]{2})/([0-9]{4})$#',@$date))
    {
        echo "<br /><br /><span>Date invalide</span><br />";
    }
                
    ?> 
                <input type="text" name="date" placeholder="Date de Naissance: J/M/Y" class="center">
                
                <?php 
            if (isset($sal) && $sal >= 25000 | $sal < 1000001) {
                echo "";
            } else {
                echo "";
            }
                
                ?> 
    <br /><br />
                <input type="text" name="sal" placeholder="[25000 à 1000000]" class="center">
                <br /><br />
                <?php 
                if(isset($tel) && !preg_match("#^[0-9 \-]+$#",$tel)) {
            @$erreur.= "";
        }
        ?>
                <input type="text" name="tel" placeholder="Telephone port" class="center">
                <br /><br />
                <?php
                if(isset($mail) and !preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $mail ) and trim($mail))
                {
                    echo "<br /><br /><span>prename invalide</span><br />";
                } 
                ?>
                <input type="text" name="mail" placeholder="EMAIL" class="center">
                <br /><br />
                
    <div class="demo-form-row">
        <input name="add_record" type="submit" value="Add" class="demo-form-submit">
    </div>
  </form>
</div> 
</body>
</html>