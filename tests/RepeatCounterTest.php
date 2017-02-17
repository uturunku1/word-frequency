<?php
require_once 'src/RepeatCounter.php';

class RepeatCounterTest extends PHPUnit_Framework_TestCase

{

  function test_countRepeat()
  {
    $RepeatCounter = new RepeatCounter();
    $input1 = "hi";
    $input2 = "hi";

    $result= $RepeatCounter->CountRepeats($input1,$input2);

    $this->assertEquals(1, $result);
  }
  function test_countRepeats()
  {
    $RepeatCounter = new RepeatCounter();
    $input1 = "hi";
    $input2 = "hi hi";

    $result= $RepeatCounter->CountRepeats($input1,$input2);

    $this->assertEquals(2, $result);
  }
  function test_countSentence()
  {
    $RepeatCounter = new RepeatCounter();
    $input1 = "hi";
    $input2 = "hi hello hi";

    $result= $RepeatCounter->CountRepeats($input1,$input2);

    $this->assertEquals(2, $result);
  }
}

 ?>
