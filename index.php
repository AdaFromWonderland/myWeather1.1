<?php
//    include_once "config.php";
    include_once "functions.php";
    $new=htmlspecialchars($_GET['city']);

//    $email = htmlspecialchars($_POST['exampleInputEmail1']);
//if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $def1="E-mail адрес '$email' указан верно.\n";
//} else {
//    $def1= "E-mail адрес '$email' указан неверно.\n";
//}
?>



<!doctype html>
<html lang="en">

<!-- HEAD PART OF THE SITE INCLUDE IN THE NEXT LINE -->
<?php include_once "constPartOfCode/header.php" ?>
    <body>
        <div class = "header">
            <nav class="navbar" >
                <div class="container">
<!--                    <form action="send.php" method="POST">-->
<!--                        <div class="form-group">-->
<!--                            <label for="exampleInputEmail1">Send weather on email?))</label>-->
<!--                            <input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1"-->
<!--                                   aria-describedby="emailHelp" placeholder="jonny@gmail.com">-->
<!--                        </div>-->
<!--                        <button type="submit" class="btn btn-success">Ok, you can send</button>-->
<!--                        --><?//=$def1;?>
<!--                    </form>-->
                    <a class="navbar-brand firstImage" href="#">
                        <iframe src="https://giphy.com/embed/3o7TKylf478NjD7BhS"
                                width="280" height="180" frameBorder="0" class="giphy-embed" allowFullScreen></iframe><p>
                    </a>

                    <form method="GET">
                        <div class="form-group">
                            <label for="city">Enter city</label>
                            <input type="text" class="form-control" name="city" id="city" placeholder="Odessa">
                        </div>
                        <button type="submit" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </nav>
        </div>

        <?php
        if (isset($new)) {
            $new = str_replace(' ', '+', $new);
            $currentCoordinates = file_get_contents
            ('https://maps.googleapis.com/maps/api/geocode/json?' . http_build_query(['address' => $new ? $new : 'Odessa']) . '&key=AIzaSyAx9GeZs8eRi3uWzPXajCTR7r32kYxVqB0');
            $locationData = json_decode($currentCoordinates);
            if ($locationData->status === 'OK') {
                $coordinates = $locationData->results[0]->geometry->location;
                $coordinates = $coordinates->lat . ',' . $coordinates->lng;
                $currentWeather = json_decode(file_get_contents('https://api.darksky.net/forecast/a465da47c747a94787858c2e3abe6283/' . $coordinates));
                echo '<h4 class ="h6 my-6" style="text-align: center;">Weather fot city named '.$currentWeather->timezone.'</h4><br>';
                //print_arr($currentWeather);
                include_once "weather_current.php";
                include_once "weather_12hours.php";
                include_once "weather_5days.php";
            }
            else{
                echo "<h6>Still in nowhere LOOSER ahahaha.. ok, i'll put you in Odessa. Sorry for that :c</h6>";
                $new ='Odessa';
                $coordinates = '46.4774700,30.7326200';
                $currentWeather=json_decode(file_get_contents
                ('https://api.darksky.net/forecast/a465da47c747a94787858c2e3abe6283/'.$coordinates));
                //print_arr($currentWeather);
                echo'<h6 class ="h6 my-6" style="text-align: center;" >Weather for city called Odessa/Ukraine</h6><br>';
                include_once "weather_current.php";
                include_once "weather_12hours.php";
                include_once "weather_5days.php";
            }
        }
        ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
