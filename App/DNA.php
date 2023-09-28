<?php

declare(strict_types=1);

class School
{
  private $students = [
    1 => ['Bob', 'Peter', 'Anna'],
    2 => ['Zoe', 'Anna'],
    3 => ['Charlie', 'Alex']
  ];
  public function add(string $name, int $grade): void
  {
    // array_push($this->students[$grade], $name);
    $this->students[$grade][] = $name;
  }
  public function grade($grade): array
  {
    return (array) $this->students[$grade] ?? [];
  }

  public function getAllStudent(): array
  {
    ksort($this->students);
    // for ($i = 1; $i <= count($this->students); $i++) {
    //   sort($this->students[$i]);
    // }
    // return $this->students;

  }
}