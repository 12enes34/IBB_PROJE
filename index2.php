<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Alışveriş Kartı</title>
    <style>
        .container {
            width: 75%;
            margin:auto;
            text-align: center;
            text-align-last: center;
            margin-top:25px; 
        }

        .box {
            display:inline-block;
            width: 350px;
            height: 450px;
            background-color: #ffffff;
            border: 2px solid;
            margin-left: 10px;
            margin-right:10px;
            margin-bottom: 10px;
            margin-top: 10px;
            text-align: center;
            transition: transform 0.3s; /* Hover'da geçiş efekti */

        }

        .box:hover {
            transform: scale(1.1); /* Hover'da büyütme efekti */
        }

        .imgdiv {
            width: 300px;
            height: 250px;
            border: 2px solid blue;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .imgdiv2 {
            width: 300px;
            height: 100px;
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .p_tag {
            margin: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: fantasy;
            font-size: 45px;
        }
        
        header {
	        position: relative;
            background-color: #3E3659;
            padding: 20px;
	        z-index: 3;
            font-family: Arial, sans-serif
        }

        header img {
            width: 20px;
            height: auto;
            margin-top: 0px;
        }

        body, html {
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>
    <header style="z-index: 3;background-color: #438abc;">
        <div class="header">
            <div class="logo" style="display: inline-block;  padding: 10px;">
                <img id="logo" src="images/noun-istanbul-3587 (1).png" style="width: 128px; background-color: #438abc;" alt="Logo">
            </div>
            <div style="display: inline-block; padding: 10px; vertical-align: top;">
                <p style="font-weight: bold; font-size: 56px;color: #000;">İSTANBUL BÜYÜKŞEHİR BELEDİYESİ</p>
            </div>
        </div>
    </header>
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
