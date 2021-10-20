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





$query = "SELECT * FROM evenementen";
$data = $connect->query($query);
echo '<table width="70%" border="1" cellpadding="5" cellspacing="5">
<tr>
<th>naam</th>
<th>genre</th>
<th>datum</th>
<th>locatie</th>
<th>begintijd</th>
<th>eindtijd</th>
<th>Edit</th>
</tr>';


foreach ($data as $row)
{
    echo '<tr>
    <td>'.$row["naam"].'</td>
    <td>'.$row["genre"].'</td>
    <td>'.$row["datum"].'</td>
    <td>'.$row["locatie"].'</td>
    <td>'.$row["begintijd"].'</td>
    <td>'.$row["eindtijd"].'</td>
    <td><a href="?id=' . $row['id'] . '">Edit</a></td>
    </tr>';

}
echo '</table>';
?>



