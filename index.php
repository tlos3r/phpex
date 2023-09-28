<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
  $formatClass = str_replace("\\", "/", $class);
  $path = "{$formatClass}.php";
  require_once $path;
});


use App\{Account, Utility, ToasterPremium, RestaurantOne, RestaurantTwo, FoodApp, CurrentWeek};

$currentWeek = new CurrentWeek();

foreach ($currentWeek as $value) {
  var_dump($value);
  echo "<br>";
}