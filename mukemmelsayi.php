<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mükemmel Sayı</title>
    
</head>
<body>
    <div>
    <h1>Mükemmel Sayı</h1>
    <p>Mükemmel sayı, kendisi hariç tüm tam bölenlerinin toplamı yine kendisine eşit olan sayıdır.<br> Örneğin; 6 sayısı 1,2 ve 3 rakamlarına tam bölünür. Bu rakamları topladığımızda yine toplam 6 eder.</p>
        
        <form>
            <label>Bir sayı giriniz:</label><br><br>
            <input type="number" id="fname" name="sayi" value="Bir Sayı Giriniz"><br><br>
            <input type="submit" value="Bu sayı mükemmel sayı mı?">
        </form><br>
            <?php 
                
                $degisken = $_GET["sayi"];

                for($i=1; $i<=($degisken/2); $i++)
                    if ($degisken%$i==0)
                        $bolenler[]=$i;

                echo "<u>$degisken sayısının tam bölenleri:</u><br>";
                
                for ($i=0;@$bolenler[$i];$i++)
                    echo $bolenler[$i],"<br>";
                    echo "<br>";

                    $toplam=array_sum($bolenler);
                    if ($toplam == $degisken){
                        echo "Bu sayı mükemmel sayıdır.";
                    }
                    else {
                        echo "Bu sayı mükemmel sayı değildir.";
                    }
                    echo "<br>";
                    
            ?>