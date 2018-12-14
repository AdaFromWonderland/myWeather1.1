<div class="shadow-lg rounded" style="margin: 0 auto; max-width: 320px; background: none; text-align: center">
    <h2>Current weather</h2>
    <h3 class="display-2"><?=round(($currentWeather->currently->temperature-32)/1.8)?>&degС</h3>
    <h3><span class="display-4 mb-3 "><?php echo get_icon($currentWeather->currently->icon)?></span></h3>
    <h3 class="lead">Humidity:<?= $currentWeather->currently->humidity*100?>%</h3>

    <p class="lead"><?= $currentWeather->currently->summary?></p>

    <p class="lead"><?= $currentWeather->currently->windSpeed?><abbr title ="miles per hour">MPH</abbr></p>
</div>