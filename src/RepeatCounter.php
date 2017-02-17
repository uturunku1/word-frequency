<?php
class RepeatCounter
{

  static function CountRepeats($input1, $input2)
  {
    $words_in_input = explode(" ",$input2);
    $matches= array();

    foreach ($words_in_input as $word) {
      if ($input1==$word) {
        array_push($matches,$word);
      }
    }

    return count($matches);
  }

}
 ?>
