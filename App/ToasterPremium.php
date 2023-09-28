<?php

namespace App;

class ToasterPremium extends Toaster
{
  public int $slots = 4;
  private int $duration = 1;

  public function __construct()
  {
    parent::__construct();
    $this->slots = 4;
  }
  public function toast()
  {
    parent::toast();
    echo " for {$this->duration} minutes";
  }
}