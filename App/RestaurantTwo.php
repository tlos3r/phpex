<?php

namespace App;

class RestaurantTwo implements RestaurantInterface
{
  public function prepareFood()
  {
    echo "Preparing food from restaurant two";
  }
}