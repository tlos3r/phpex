<?php

namespace App;

class Toaster
{
  public int $slots;

  public function __construct()
  {
    $this->slots = 2;
  }
  public function toast()
  {
    echo "{$this->slots} Toasting bread";
  }
}