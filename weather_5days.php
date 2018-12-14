<?php
include_once 'index.php';
include_once 'functions.php';

?>

<div id="carouse4dayIndicator" class="carousel slide" data-ride="carousel" style="margin-left: 100px; margin-right: 150px">
    <ol class="carousel-indicators">
        <li data-target="#carouse4dayIndicator" data-slide-to="0" class="active"></li>
        <li data-target="#carouse4dayIndicator" data-slide-to="1"></li>
        <li data-target="#carouse4dayIndicator" data-slide-to="2"></li>
        <li data-target="#carouse4dayIndicator" data-slide-to="3"></li>
        <li data-target="#carouse4dayIndicator" data-slide-to="4"></li>
    </ol>


    <div class="carousel-inner" >
        <div class="carousel-item active" style="text-align: center;" >
            <img class="d-block w-100" src="constPartOfCode/background/background5D4.jpg?auto=yes&bg=777&fg=555&text=First slide" alt="First slide">
            <div class="carousel-caption d-block">
                <h2><?=date("l",$currentWeather->daily->data[0]->time)?></h2>
                <h5><?php echo get_icon($currentWeather->daily->data[0]->icon)?></h5>
                <h5><?php echo get_Moon_icon($currentWeather->daily->data[0]->moonPhase)?></h5>
                <h5>Humidity:<?= $currentWeather->daily->data[0]->humidity*100?>%</h5>
                <p><?=$currentWeather->daily->data[0]->summary?></p>
            </div>
        </div>
        <div class="carousel-item" style="width: 100%; text-align: center;">
            <img class="d-block w-100" src="constPartOfCode/background/background5D2.jpg?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
            <div class="carousel-caption d-block">
                <h2><?=date("l",$currentWeather->daily->data[1]->time)?></h2>
                <h5><?php echo get_icon($currentWeather->daily->data[1]->icon)?></h5>
                <h5><?php echo get_Moon_icon($currentWeather->daily->data[1]->moonPhase)?></h5>
                <h5>Humidity:<?= $currentWeather->daily->data[1]->humidity*100?>%</h5>
                <p><?=$currentWeather->daily->data[1]->summary?></p>
            </div>
        </div>
        <div class="carousel-item" style="width: 100%; text-align: center;">
            <img class="d-block w-100" src="constPartOfCode/background/background5D5.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
            <div class="carousel-caption d-block">
                <h2><?=date("l",$currentWeather->daily->data[2]->time)?></h2>
                <h5><?php echo get_icon($currentWeather->daily->data[2]->icon)?></h5>
                <h5><?php echo get_Moon_icon($currentWeather->daily->data[2]->moonPhase)?></h5>
                <h5>Humidity:<?= $currentWeather->daily->data[2]->humidity*100?>%</h5>
                <p><?=$currentWeather->daily->data[2]->summary?></p>
            </div>
        </div>
        <div class="carousel-item" style="width: 100%; text-align: center;">
            <img class="d-block w-100" src="constPartOfCode/background/background5D4.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
            <div class="carousel-caption d-block">
                <h2><?=date("l",$currentWeather->daily->data[3]->time)?></h2>
                <h5><?php echo get_icon($currentWeather->daily->data[3]->icon)?></h5>
                <h5><?php echo get_Moon_icon($currentWeather->daily->data[3]->moonPhase)?></h5>
                <h5>Humidity:<?= $currentWeather->daily->data[3]->humidity*100?>%</h5>
                <p><?=$currentWeather->daily->data[3]->summary?></p>
            </div>
        </div>
        <div class="carousel-item" style="width: 100%; text-align: center;">
            <img class="d-block w-100" src="constPartOfCode/background/background5D3.jpg?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
            <div class="carousel-caption d-block">
                <h2><?=date("l",$currentWeather->daily->data[4]->time)?></h2>
                <h5><?php echo get_icon($currentWeather->daily->data[4]->icon)?></h5>
                <h5><?php echo get_Moon_icon($currentWeather->daily->data[4]->moonPhase)?></h5>
                <h5>Humidity:<?= $currentWeather->daily->data[4]->humidity*100?>%</h5>
                <p><?=$currentWeather->daily->data[4]->summary?></p>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouse4dayIndicator" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouse4dayIndicator" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
