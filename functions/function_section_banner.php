<?php 

function function_section_banner(){
    include 'connections/config.php';
    $q = mysqli_query($conn,"SELECT info_banner, info_title, info_description FROM info_general");
    $a = mysqli_fetch_array($q);
    echo '
    <section class="banner-section" style="background-image: url(\'img/'.$a["info_banner"].'\'); background-size: cover; background-position: center; width: 100%; height: 100vh; position: relative;">
        <div class="text-container" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); text-align: center; color: white;">
            <h3 style="font-size: 3em;">'.$a["info_title"].'</h3>
            <p style="font-size: 1em;">'.$a["info_description"].'</p>
        </div>
    </section>';
}
?>
