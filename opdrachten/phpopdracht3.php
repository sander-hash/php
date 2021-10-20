<?php
$host="localhost";
$username="root";
$password="";
$database="phpopdracht";

try{
$connect = new PDO ("mysql:host=$host;dbname=$database", $username, $password);
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}

catch (PDOException $error)
{
    $error->getMessage();
}
?>
<?php
$query = "SELECT * FROM evenementen";
$data = $connect->query($query);
foreach ($data as $row)
{
    echo '<tr>
    <td>'.$row["naam"].'</td>
    <td>'.$row["genre"].'</td>
    <td>'.$row["datum"].'</td>
    <td>'.$row["locatie"].'</td>
    <td>'.$row["begintijd"].'</td>
    <td>'.$row["eindtijd"].'</td>
    </tr>';

}
echo '</table>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://unpkg.com/tailwindcss@^2.0/dist/tailwind.min.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table-fixed">
  <thead>

    <tr>
      <th class="w-1/2 ...">Title</th>
      <th class="w-1/4 ...">Author</th>
      <th class="w-1/4 ...">Views</th>
    </tr>

  
  </thead>
  <tbody>
    <tr>
    
      <td>Test</td>
      <td>Adam</td>
      <td>858</td>
    </tr>
    <tr class="bg-blue-200">
      <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
      <td>Adam</td>
      <td>112</td>
    </tr>
    <tr>
      <td>Intro to JavaScript</td>
      <td>Chris</td>
      <td>1,280</td>
    </tr>
  </tbody>
</table>
</body>
</html>