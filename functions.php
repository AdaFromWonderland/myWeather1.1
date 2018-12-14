<?php
include_once "index.php";
include_once "config.php";
    /**
     * @param $city - просто пришедшие данные
     * @return bool|string
     * формирование новой ссылки с учетом того, что у нас именился город
     */
//    function getNewLink($city){
//        $currentCoordinates=file_get_contents
//        ('https://maps.googleapis.com/maps/api/geocode/json?'
//            .http_build_query(['address'=>$city?$city:'Odessa']).'&key=AIzaSyAx9GeZs8eRi3uWzPXajCTR7r32kYxVqB0');
//
//        $locationData=json_decode($currentCoordinates);
//        //var_dump($locationData);
//        $coordinates = $locationData->results[0]->geometry->location;
//        $coordinates = $coordinates->lat.','.$coordinates->lng;
//        //var_dump($coordinates);
//        $currentCity=json_decode(file_get_contents('https://api.darksky.net/forecast/a465da47c747a94787858c2e3abe6283/'.$coordinates));
//        return $currentCity;
//    }

function print_arr($array){
  echo "<pre>".print_r($array,true)."</pre>";
}

function get_icon($icon)
{
    if ($icon === 'clear-day') {
        $this_icon = '<i class="wi wi-day-sunny"></i>';
        return $this_icon;
    } elseif ($icon === 'clear-night') {
        $this_icon = '<i class="wi wi-night-clear"></i>';
        return $this_icon;
    } elseif ($icon === 'rain') {
        $this_icon = '<i class="wi wi-rain"></i>';
        return $this_icon;
    } elseif ($icon === 'snow') {
        $this_icon = '<i class="wi wi-snow"></i>';
        return $this_icon;
    } elseif ($icon === 'sleet') {
        $this_icon = '<i class="wi wi-sleet"></i>';
        return $this_icon;
    } elseif ($icon === 'wind') {
        $this_icon = '<i class="wi wi-strong-wind"></i>';
        return $this_icon;
    } elseif ($icon === 'fog') {
        $this_icon = '<i class="wi wi-fog"></i>';
        return $this_icon;
    } elseif ($icon === 'cloudy') {
        $this_icon = '<i class="wi wi-cloudy"></i>';
        return $this_icon;
    } elseif ($icon === 'partly-cloudy-day') {
        $this_icon = '<i class="wi wi-day-cloudy-high"></i>';
        return $this_icon;
    } elseif ($icon === 'partly-cloudy-night') {
        $this_icon = '<i class="wi wi-night-alt-cloudy"></i>';
        return $this_icon;
    } elseif ($icon === 'hail') {
        $this_icon = '<i class="wi wi-hail"></i>';
        return $this_icon;
    } elseif ($icon === 'thunderstorm') {
        $this_icon = '<i class="wi wi-thunderstorm"></i>';
        return $this_icon;
    } elseif ($icon === 'tornado') {
        $this_icon = '<i class="wi wi-tornado"></i>';
        return $this_icon;
    } else {
        $this_icon = '<i class="wi wi-alien"></i>';
        return $this_icon;
    }
}

function get_Moon_icon($Moon_icon)
    {
        if($i=0){
            $moon_icon = '<i class="wi wi-moon-new"></i>';
            return $moon_icon;
        } elseif($i=0.5){
            $moon_icon = '<i class="wi wi-moon-full"></i>';
            return $moon_icon;
        }elseif($i=0.75){
            $moon_icon = '<i class="wi wi-moon-third-quarter"></i>';
            return $moon_icon;
        }elseif($i=1){
            $moon_icon = '<i class="wi wi-moon-new"></i>';
            return $moon_icon;
        }
    }


