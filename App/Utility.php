<?php

namespace App;

class Utility
{
  /**
   * Summary of printArr
   *
   * Output an array surrounded by pre tag for formatting
   *
   * @param array $array The array to output
   * @return void
   */
  public static function printArr(array $array)
  {
    ?>
    <pre><?php
    print_r($array);
    ?></pre>
    <?php
  }
}