<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <title>Site Laser Gun</title>

  <link rel="stylesheet" href="..\style.css">
</head>

<body background="../img/fond2.jpg">>
  <?php include("../include/bodyphp.php") ?>
</body>

  <?php
    require_once("../php/connexion.php");
    $conn1=connexionBDD();

    require_once("../php/fonctionBDD.php");

    include("../include/menuadmin.php")
  ?>

  <section class="containerS">
    <div class="itemS">
      <H2>Uploader les scores de parties précédentes :</H2>
      <br/>
        <form action="admin.php" method="post" enctype="multipart/form-data">
          <label for="fileUpload">Fichier :</label>
            <input type="file" name="images[]" multiple accept=".png,.jpg,.jpeg" >
            <input type="submit" name="submit" value="Upload">
        </form>
        <br/>
    </div>
  </section>

<?php
$files = $_FILES;



if (empty($files)) {
    die("Aucune image !");
}


// l'images : type de format et name le nom du fichier 

$file_count = count($files['images']['name']);

for ($i = 0; $i < $file_count; $i++) {
    $filename = $files['images']['name'][$i];

    if (move_uploaded_file($files['images']['tmp_name'][$i], '/var/www/RT/1projet2/upload/'  .'score.jpg')) {
        echo "Upload ok !";
    } else {
        echo "Upload failed for " . $filename;
    }

    $path = '/RT/1projet2/upload/' . $filename;

}
?>
 

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

</main>

<?php include("../include/footerphp.php") ?>
</body>
</html>
