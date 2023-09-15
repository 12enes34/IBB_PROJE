<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Alışveriş Kartı</title>
    <link rel="stylesheet" href="style_index2.css" />
</head>
<body>
<header>
    <div class="header">
        
        <div class="logo">
        <img id="logojpg" src="images/noun-istanbul-3587 (1).png" alt="Logo">
                
               

          
        </div>
        <div class="logo2">
        <p class="logoWrite">İSTANBUL BÜYÜKŞEHİR BELEDİYESİ</p>
        </div>
        <div class="logo3">


            




        </div>
    </div>
</header>


<div class="logo">

                
               

            
        </div>
        <div class="logo2">
            
        </div>
        <div class="logo3">


</div>

    <div class="container">
        <?php
            $conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
            session_start();

            $query = "SELECT * FROM ilce ;";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo '<form id="kartForm" action="index3.php" method="post">';
                echo '<input type="hidden" name="veri" id="veriInput">';
                while ($row = mysqli_fetch_assoc($result)){
                    $ilce_isim = $row["IlceAdi"];
                    echo '<div class="box" value="'.$ilce_isim.'" onclick="submitForm(\''.$ilce_isim.'\')"><img src="" alt=""><img class="imgdiv" src="'.$row["kartFotoURL"].'" alt=""><p class="p_tag">'.$row["IlceAdi"].'</p> <img src="'.$row["SASRaporURL"].'" class="imgdiv2" alt=""></div>';
                }
                echo '</form>';
            }
            ?>
        <script>
                    function submitForm(veri) {
                        document.getElementById("veriInput").value = veri;
                        document.getElementById("kartForm").submit();
                    }
                </script>    
        
 
        
    

    <script>
        function submitForm(veri) {
            document.getElementById("veriInput").value = veri;
            document.getElementById("kartForm").submit();
        }
    </script>
        <a href="index3.php"></a>
    </div>
    
</body>
</html>
