<?php

  function getDateForBlog($date, $type)
  {
    $date = explode(" ", $date);
    $date = explode("-",$date[0]);
    $day = $date[2];
    $month = $date[1];
    $dateObj   = DateTime::createFromFormat('!m', $month);
    $month = $dateObj->format('F');
    $year = $date[0];
    $result = [
        '0' => $day,
        '1' => $month,
        '2' => $year
    ];
    return $result[$type];
  }


  function getColor($id)
  {
      switch ($id)
      {
          case '1':
              return '#917d5d';
              break;
          case '2':
              return '#a08c6c';
              break;
          default:
              return '#ad9979';
      }
  }

  function rating($ratings)
  {
    $value = 0;
    $counter = 0;
    foreach($ratings as $rating)
    {
      $value += $rating->rating;
      $counter++;
    }
    $result = $value/$counter;
    return $result;

  }

  function colors()
  {
      $data = [
          "1" => "Black",
          "2" => "White",
          "3"  => "Blue",
          "4"  => "Grey",
          "5" => "Green",
          "6"   => "Red",
          "7"  => "Pink",
          "8" => "Yellow",
          "9" => "Brown",
          "10" =>"Metallic"
      ];
      return $data;
  }