<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mükemmel Sayı</title>
    
</head>
<body>
    <div>
    <h1>Asal Sayı</h1>
    <p>Asal sayılar, sadece iki pozitif tam sayı böleni olan doğal sayılardır. Sadece kendisine ve 1 sayısına kalansız bölünebilen 1'den büyük pozitif tam sayılardır. En küçük asal sayı 2'dir. Öklid'den beri asal sayıların sonsuz olduğu bilinir. 
</p>
        
        <form>
            <label>Bir sayı giriniz:</label><br><br>
            <input type="number" id="fname" name="sayi" value="Bir Sayı Giriniz"><br><br>
            <input type="submit" value="Bu sayı asal sayı mı?">
        </form><br>
            <?php 
                
                $degisken = $_GET["sayi"];

                $asal=0; $i=2;
 
                do
                {
                    if ($degisken % $i == 0)
                    {
                        $asal = 1;
                    }
                    $i++;
                }
                while($i<$degisken);
                 
                if ($asal != 1)
                {
                    $sonuc="Sayı Asaldır";
                }
                else if ($degisken == 2)
                {
                    $sonuc="Sayı Asaldır";
                }
                else 
                {
                    $sonuc="Sayı Asaldır Değildir"; 
                }

                echo $degisken;
                echo $sonuc;
                ?>
                
                
                    
            
     </div>

    </body>
</html>