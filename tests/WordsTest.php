<?php
require_once 'src/Words.php';

class WordsTest extends PHPUnit_Framework_TestCase

{

  function test_countRepeat()
  {
    $words = new Words();
    $input1 = "hi";
    $input2 = "hi";

    $result= $words->CountRepeats($input1,$input2);

    $this->assertEquals(1, $result);
  }
  function test_countRepeats()
  {
    $words = new Words();
    $input1 = "hi";
    $input2 = "hi hello hi";

    $result= $words->CountRepeats($input1,$input2);

    $this->assertEquals(2, $result);
  }
}

 ?>
