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
                    min-height: 120px;
                    z-index: -1;
                    
                }';
            }
        }
        ?>
    </style>
    <link rel="stylesheet" href="style_index3.css" />
</head>
<body>
<header>
    <div class="header">
        
        <div class="logo">

                
               

          
        </div>
        <div class="logo2">
     
        </div>
        <div class="logo3">


            




        </div>
    </div>
</header>
<div class="deneme1">

<div class="logo">

                
               

            <img id="logojpg" src="images/noun-istanbul-3587 (1).png" alt="Logo">
        </div>
        <div class="logo2">
            <p class="logoWrite">İSTANBUL BÜYÜKŞEHİR BELEDİYESİ</p>
        </div>
        <div class="logo3">


</div>


    <div class="mapjpg">
    
        <div style="flex: 1;width: 200px;" >
            

            <?php
                $conn = mysqli_connect('localhost', 'root', '', 'rotamiz_istanbul');
                $query = "SELECT * FROM ilce WHERE IlceAdi = '$gelenVeri';";
                $result = mysqli_query($conn, $query);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)){
                    echo  '<img src="'.$row["HaritaFotoURL"].'" alt="" style="width: 70%;">';
                        }
                    }
                    ?>
                    





            
        </div>
        <div style="flex: 1;">
            <div class="Ilce_Verileri" >
            
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
    <script src="https://maps.googleapis.com/maps/api/js?key= Please don't steal our API key callback=initMap" async defer></script>
</div>

    
</body>
</html>