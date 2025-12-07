<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poziomy Rzek</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner1">
 
    <img src="polska.png" alt="Mapa Polski">

</div>
    <div id="baner2"><h1>Rzeki w województwie dolnośląskim</h1></div>
    <div id="menu">
        <form action="" method="POST">
<input type="radio" name="rzeka" value="all"><span> Wszystkie</span>
<input type="radio" name="rzeka" value="ostrzegawczy"><span>Ponad stan ostrzegawczy</span>
<input type="radio" name="rzeka" value="alarmowy"><span>Ponad stan alarmowy</span>
<input type="submit" name="guzik" value="Pokaż">
        </form>
    </div>
    
    <div id="lewy">
        <h3>Stan na dzień 2022-05-05</h3>
        <table>
            <tr>
                <th>Wodomierz</th>
     <div id="content">           <th>Rzeka</th>
                <th>Ostrzegawycz</th>
                <th>Alarmowy</th>
                <th>Aktualny</th>
            </tr>
<?php
if(isset($_POST['guzik'])){
$dbconnect=mysqli_connect('172.16.6.243','rzeki','Dupa1234','rzeki');

if($_POST['rzeka']=='alarmowy'){
$zapytanie="SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM wodowskazy INNER JOIN pomiary ON pomiary.wodowskazy_id=wodowskazy.id WHERE 
pomiary.dataPomiaru='2022-05-05' AND pomiary.stanWody>wodowskazy.stanAlarmowy;";

} else if($_POST['rzeka']=='ostrzegawczy'){
$zapytanie="SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM wodowskazy INNER JOIN pomiary ON pomiary.wodowskazy_id=wodowskazy.id WHERE 
pomiary.dataPomiaru='2022-05-05' AND pomiary.stanWody>wodowskazy.stanOstrzegawczy;";
} else {
$zapytanie="SELECT wodowskazy.nazwa, wodowskazy.rzeka, wodowskazy.stanOstrzegawczy, wodowskazy.stanAlarmowy, pomiary.stanWody FROM wodowskazy INNER JOIN pomiary ON pomiary.wodowskazy_id=wodowskazy.id WHERE 
pomiary.dataPomiaru='2022-05-05'";
}



$send=mysqli_query($dbconnect,$zapytanie);


?>


                        
<?php
while($row=mysqli_fetch_array($send)){
    echo '
    <tr>
                <td>'.$row[0].'</td>
                <td>'.$row[1].'</td>
                <td>'.$row[2].'</td>
                <td>'.$row[3].'</td>
                <td>'.$row[4].'</td>
            </tr>
    ';

}

mysqli_close($dbconnect);
}
?>

        </table>
    </div>
    <div id="prawy">
    <h3>Informacje</h3>
    <ul>
        <li>Brak ostrzeżeń o burzach z gradem</li>
        <li>Smog w mieście Wrocław</li>
        <li>Silny wiatr w Karkonoszach</li>
    </ul>
    <h3>Średnie stany wód</h3>
    <?php
    $dbconnect=mysqli_connect('172.16.6.243','rzeki','Dupa1234','rzeki');
    $zapytanie="SELECT pomiary.dataPomiaru, AVG(pomiary.stanWody) FROM pomiary GROUP BY pomiary.dataPomiaru;";
$send=mysqli_query($dbconnect,$zapytanie);

while($row=mysqli_fetch_array($send)){
    echo '<p>
        '.$row[0].': '.$row[1].'
    </p>';
}

mysqli_close($dbconnect);


    ?>
    <a href="https://komunikaty.pl">Dowiedz się więcej</a>
    <img src="obraz2.jpg" alt="rzeka" class="obraz">
    </div>


    <div id="stopka">
        <p>Stronę wykonał: 0000000000</p>
    </div>
</body>
</html>