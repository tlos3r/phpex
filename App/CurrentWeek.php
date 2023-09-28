<?php

namespace App;

class CurrentWeek
{
  public \DateTime $date;
  public int $daysFrom = 0;

  public function __construct()
  {
    $this->date = new \DateTime();
  }
}