<?php

namespace App;

class RestaurantOne implements RestaurantInterface
{
  public function prepareFood()
  {
    echo "prepareFood";
  }
}