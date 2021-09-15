<?php
function generatePairs($m, $n)
{
  $result = array();
  for($i = $m; $i <= $n; $i++) {
    for($j = $i; $j <= $n; $j++) {
      $result[] = array($i, $j);
    }
  }

  return $result;
}

use PHPUnit\Framework\TestCase;

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class MyTestCases extends TestCase
{
  // test function names should start with "test"
  public function testThatSomethingShouldHappen()
  {
    $this->assertEquals([[2, 2], [2, 3], [2, 4], [3, 3], [3, 4], [4, 4]], generatePairs(2, 4));
  }
}
