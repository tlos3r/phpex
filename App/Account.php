<?php

namespace App;

class Account
{
  public const INCREASE_BALANCE = 2;
  public static int $count = 0;
  public string $name;
  private float $balance = 5.5;

  public function __construct(string $newName, float $newBalance)
  {
    $this->name = $newName;
    $this->balance = $newBalance;
    self::$count++;
  }

  public function updateBalance(float $amount)
  {
    $this->balance += $amount;
    return $this;
  }
  /**
   * Get the value of balance
   */
  public function getBalance(): float
  {
    return $this->balance;
  }
  public function setBalance(float $newBalance)
  {
    if ($newBalance < 0) {
      return;
    }

    $this->balance = $newBalance;
    $this->sendEmail();
    return $this;
  }
  private function sendEmail()
  {

  }
}

?>