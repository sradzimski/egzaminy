<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>
    <div id="baner">
        <h1>Zdjęcia</h1>
    </div>
<div id="lewy">
    <h2>Tematyka zdjęć</h2>
    <ol>
        <li>Zwierzęta</li>
        <li>Krajobrazy</li>
        <li>Miasta</li>
        <li>Przyroda</li>
        <li>Samochody</li>

    </ol>
</div>
<div id="medium">
    <!-- skrypt 1 -->
         <?php
     $dbconnect=mysqli_connect('172.16.6.243','galeria','Dupa1234','galeria');
    $zapytanie="SELECT zdjecia.plik, zdjecia.tytul, zdjecia.polubienia, autorzy.imie, autorzy.nazwisko FROM zdjecia INNER JOIN autorzy ON zdjecia.autorzy_id=autorzy.id ORDER BY autorzy.nazwisko;";
    $send=mysqli_query($dbconnect,$zapytanie);
    while($row=mysqli_fetch_array($send)){
      echo '<div class="galery">
        <img src="'.$row[0].'" alt="zdjęcie">
        <h3>'.$row[1].'</h3>';
        if($row[2]>40){
            echo '<p>Autor '.$row[3].' '.$row[4].'<br> Wiele osób polubiło ten obraz</p>';
            echo '<a href="'.$row[0].'" download="'.$row[0].'">Pobieranie</a>';
        } else {
            echo '<p>Autor '.$row[3].' '.$row[4].'</p>';
            echo '<a href="'.$row[0].'" download="'.$row[0].'">Pobieranie</a>';  
        }
      
      echo '</div>';  
    }
    mysqli_close($dbconnect);
    ?>
    
</div>
<div id="prawy">
    <h2>Najbardziej lubiane</h2>
    <!-- skrypt 2 -->
     <?php
     $dbconnect=mysqli_connect('172.16.6.243','galeria','Dupa1234','galeria');
 $zapytanie="SELECT zdjecia.plik, zdjecia.tytul FROM zdjecia WHERE zdjecia.polubienia>=100;";
$send=mysqli_query($dbconnect,$zapytanie);
while($row=mysqli_fetch_array($send)){
    echo '<img src="'.$row[0].'" alt="'.$row[1].'">';
}
mysqli_close($dbconnect);
?>
<strong>Zobacz wszystkie nasze zdjęcia</strong>
    
</div>
<div id="stopka">
    <h5>Stronę wykonał: 00000000000</h5>
</div>
</body>
</html>