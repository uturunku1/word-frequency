<?php
    class RepeatCounter
    {

      static function CountRepeats($input1, $input2)
      {
        // $words_in_input = explode(" ",$input2);
        $words_in_input= preg_split("/[\s,]+/", $input2);
        $matches= array();
        foreach ($words_in_input as $word) {
          if (strcasecmp($input1,$word)==0){
            array_push($matches,$word);
          }
        }
        if (empty($matches)) {
          return "That word is not being used.";
        }else {
          return count($matches);
        }


      }
    }
?>
