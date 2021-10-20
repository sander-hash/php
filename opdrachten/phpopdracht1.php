<?php
$host="localhost";
$username="root";
$password="";
$database="phpopdracht";

try{
$connect = new PDO ("mysql:host=$host;dbname=$database", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo 'Database connected';

}


catch (PDOException $error)
{
    $error->getMessage();
}

$status = "";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $naam = $_POST['naam'];
  $genre = $_POST['genre'];
  $datum = $_POST['datum'];
  $locatie = $_POST['locatie'];
  $begintijd = $_POST['begintijd'];
  $eindtijd = $_POST['eindtijd'];

  if(empty($naam) || empty($genre) || empty($datum) || empty($locatie) || empty($begintijd) || empty($eindtijd)) {
    $status = "All fields are compulsory.";
  } else {
    if(strlen($naam) >= 255 || !preg_match("/^[a-zA-Z-'\s]+$/", $naam)) {
      $status = "Please enter a valid name";
    } else {

      $sql = "INSERT INTO evenementen (naam, genre, datum, locatie, begintijd, eindtijd) VALUES (:naam, :genre, :datum, :locatie, :begintijd, :eindtijd)";

      $stmt = $connect->prepare($sql);
      
      $stmt->execute(['naam' => $naam, 'genre' => $genre, 'datum' => $datum, 'locatie' => $locatie, 'begintijd' => $begintijd, 'eindtijd' => $eindtijd]);

      $status = "Je evenement is ingeplant!";
      $naam = "";
      $genre = "";
      $datum = "";
      $locatie = "";
      $begintijd = "";
      $eindtijd = "";
    }
  }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Contact Us</title>
</head>

<body>

  <div class="container">
    <h1>Inschrijven</h1>

    <form action="" method="POST" class="main-form">
      <div class="form-group">
        <label for="naam">Naam</label>
        <input type="text" name="naam" id="naam" class="gt-input"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $naam ?>">
      </div>

      <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" name="genre" id="genre" class="gt-input"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $genre ?>">
      </div>

      <div class="form-group">
        <label for="datum">Datum</label>
        <input type="date" name="datum" id="datum" class="gt-input"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $datum ?>">
      </div>


      <div class="form-group">
        <label for="begintijd">Begintijd</label>
        <input type="time" name="begintijd" id="begintijd" class="gt-input"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $begintijd ?>">
      </div>

      <div class="form-group">
        <label for="eindtijd">eindtijd</label>
        <input type="time" name="eindtijd" id="eindtijd" class="gt-input"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $eindtijd ?>">
      </div>
    
      <div class="form-group">
        <label for="locatie">Locatie</label>
        <input type="text" name="locatie" id="locatie" class="gt-input"
          value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $locatie ?>">
      </div>

      <input type="submit" class="gt-button" value="Submit">

      <div class="form-status">
        <?php echo $status ?>
      </div>
    </form>
  </div>


</body>

</html>