<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gelenVeri = $_POST["veri"];   

    }
    
    ?>

<?php
                $conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
                $query = "SELECT * FROM ilce WHERE IlceAdi = '$gelenVeri';";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)){
                        $gelenVeri2=$row["ID"];
                    }
                }
            ?>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

          .banner {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			background-color:rgb(237, 227, 240);
			color: white;
			padding: 0px; 
			text-align: center;
			font-size: 10px;
            z-index: 1;
            height: 120px;
            width: 1000px;
            display:block;
            margin: auto;
            border-radius: 5%;
            }


        .Ilce_png {
            height: 540px;
        }
        .Ilce_Verileri {
            flex: 1;
            
            
        }
        .Harita {
            flex: 1;
           
            
        }

        .scrollable-div {
            
            height: 200px;
            overflow: auto;


            border: white solid 3px;


            padding: 10px;
            text-align: center;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            max-height: 100px;
            
            
        }

      
            .scrollable-div::-webkit-scrollbar {
            width: 12px; /* Kaydırma çubuğunun genişliği */
        }

        scrollable-div::-webkit-scrollbar-thumb {
            background-color: #4CAF50; /* Kaydırma çubuğu rengi */
            
        }

        scrollable-div::-webkit-scrollbar-track {
            background-color: #f1f1f1; /* Kaydırma çubuğu arka plan rengi */
        }


        .park-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .park {
            padding: 10px 20px;
            background-color: rgb(62, 102, 85); /* Yeşil renk */
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-bottom: 5px;
            min-width: 150px;
            color: black; /* Öğe metin rengi */

        }

        .kultürel {
            padding: 10px 20px;
            background-color: rgb(157, 109, 105); /* Yeşil renk */
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-bottom: 5px;
            min-width: 150px;
            color: black; /* Öğe metin rengi */

        }
        
        .sosyal_tesis {
            padding: 10px 20px;
            background-color: rgb(140, 52, 120); /* Yeşil renk */
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            margin-bottom: 5px;
            min-width: 150px;
            color: black; /* Öğe metin rengi */
            
        }
        a {
        text-decoration: none;
        }
        
        body{
            margin: 0;
        }

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
        $query = "SELECT * FROM ilce WHERE IlceAdi = '$gelenVeri';";
        $result = mysqli_query($conn, $query);
        if ($result) {
            while ($row = mysqli_fetch_assoc($result)){
                echo '.header {
                    position: relative;
                    z-index: 3;
                    background-color: #438abc;
                    background-image: url("'.$row["bannerFotoURL"].'");
                    background-size: cover;
                    background-position: center;
                    color: white;
                    padding: 20px;
                    opacity: 0.5;
                    min-height: 170px;
                    z-index: -1;
                    
                }';
            }
        }
        ?>
        .deneme1{
         
            position: fixed;
            top: 10px;
            width: 100%;
            height: 200px;
            
            
        }

        #map {
      min-height: 300px;
      max-height: 370px;
      width: 96%;
        }


        
    </style>
</head>
<body>
<header>
    <div class="header">
        
        <div class="logo" style="display: inline-block;  padding: 10px;">

                
               

          
        </div>
        <div style="display: inline-block; padding: 10px; vertical-align: top;">
     
        </div>
        <div style="display: inline-block; padding: 10px;">


            




        </div>
    </div>
</header>
<div class="deneme1">

<div class="logo" style="display: inline-block;  padding: 10px;">

                
               

            <img id="logo" src="images/noun-istanbul-3587 (1).png" style="width: 128px;" alt="Logo">
        </div>
        <div style="display: inline-block; padding: 10px; vertical-align: top;">
            <p style="font-weight: bold; font-size: 56px;color: #000; ">İSTANBUL BÜYÜKŞEHİR BELEDİYESİ</p>
        </div>
        <div style="display: inline-block; padding: 10px;">


</div>


    <div style="display: flex;min-height: 850px;" >
    
        <div style="flex: 1;width: 200px;">
            

            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
                $query = "SELECT * FROM ilce WHERE IlceAdi = '$gelenVeri';";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)){
                    echo  '<img src="'.$row["HaritaFotoURL"].'" alt="" style="width: 800px;">';
                        }
                    }
                    ?>
                    





            
        </div>
        <div style="flex: 1; ">
            <div class="Ilce_Verileri">
            
            <div class="scrollable-div">
                <div class="park-container">park
                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
                $query = "SELECT * FROM mahal WHERE Tur = 'YESIL_ALAN' AND ılceID = '$gelenVeri2';";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo '<a href="javascript:void(0);" onclick="handleTesisClick(' . $row["point_x"] . ', ' . $row["point_y"] . ')"><div class="park">' . $row["MahalAdi"] . '</div></a>';
                    }
                }
            ?>
                    
                </div>
            </div>
            <div>
                <div class="scrollable-div">
                    <div class="park-container">kulturel

                    <?php
                $conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
                $query = "SELECT * FROM mahal WHERE Tur = 'KULTUREL' AND ılceID = '$gelenVeri2';";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo '<a href="javascript:void(0);" onclick="handleTesisClick(' . $row["point_x"] . ', ' . $row["point_y"] . ')"><div class="kultürel">' . $row["MahalAdi"] . '</div></a>';
                    }
                }
            ?>
                      
                    </div>
                </div>
        
        
            </div>
            <div>
    <div class="scrollable-div">
        <div class="park-container">
            sosyal tesis
            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
                $query = "SELECT * FROM mahal WHERE Tur = 'SOSYAL_TESIS' AND ılceID = '$gelenVeri2';";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)){
                        echo '<a href="javascript:void(0);" onclick="handleTesisClick(' . $row["point_x"] . ', ' . $row["point_y"] . ')"><div class="sosyal_tesis">' . $row["MahalAdi"] . '</div></a>';
                    }
                }
            ?>
        </div>
    </div>
</div>

<div class="Harita">
    <h1>Konum Haritası</h1>
    <!-- Harita görüntüsünün geleceği yer -->
    <div id="map"></div>
    
    <script>
        // Enlem ve boylam bilgileri
        
        let latitude = 41.039716553280705;
        let longitude = 28.971560476726797;
        
        function handleTesisClick(pointX, pointY) {
            latitude = parseFloat(pointY);
            longitude = parseFloat(pointX);
            
            initMap();
        }
        
        function initMap() {
            // Harita görüntüsünü oluşturma
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: latitude, lng: longitude },
                zoom: 18, // Yakınlaştırma seviyesi
            });

            // İşaretçi (marker) oluşturma
            const marker = new google.maps.Marker({
                position: { lat: latitude, lng: longitude },
                map: map,
                title: "Konum İşareti",
            });
        }
    </script>
    <!-- Google Haritalar API betiği -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBBYyqb2XSJ3BrU8WzwhHxUmXFx1ebdbso&callback=initMap" async defer></script>
</div>

    
</body>
</html>