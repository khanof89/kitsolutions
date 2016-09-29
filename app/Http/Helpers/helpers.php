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