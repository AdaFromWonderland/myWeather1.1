<div style="text-align: center; margin: 20px;">
    <h4> Weather for nearest 12 hours:</h4>
</div>

<?php $i = 0?>
<?php  foreach($currentWeather->hourly->data as $hour):?>
    <div class="col-12 col-md-2"  style="display: inline-block; border: 6px black; text-align: center; margin-left: 70px; margin-top: 30px;">
        <div class="shadow p-3 mb-4 rounded" style="background; text-align: center; background: transparent;" >
            <h5><?echo date("g a",$hour->time)?></h5>
            <p class="lead m-0"><?= round(($hour->temperature-32)/1.8)?>&deg</p>
            <span class="display-4 mb-3 "><?php echo get_icon($currentWeather->currently->icon)?></span>
            <h3 class="lead m-0">
                <span class="sr-only">Humidity:</span>
                <?= $hour->humidity*100?>%
                <abbr title ="Humidity">HMD</abbr></h3>
            <p class="lead m-0"><?= $hour->windSpeed?><abbr title ="miles per hour">MPH</abbr></p>
        </div>
    </div>

    <?php $i++?>
    <?php if ($i==12)break;?>
<?php endforeach;?>