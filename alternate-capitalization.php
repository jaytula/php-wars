<?php

use PHPUnit\Framework\TestCase;

function capitalize($s) {
  $arr = str_split($s);
  $word1 = implode(array_map(function($letter, $key) {
    return $key % 2 === 0 ? strtoupper($letter) : strtolower($letter);
  }, $arr, array_keys($arr)));
  $word2 = implode(array_map(function($letter, $key) {
    return $key % 2 === 1 ? strtoupper($letter) : strtolower($letter);
  }, $arr, array_keys($arr)));
  
  return array($word1, $word2);
}

class SolutionTest extends TestCase {
  public function testFixedTests() {
    $this->assertEquals(['AbCdEf', 'aBcDeF'], capitalize("abcdef"));
    $this->assertEquals(['CoDeWaRs', 'cOdEwArS'], capitalize("codewars"));
    $this->assertEquals(['AbRaCaDaBrA', 'aBrAcAdAbRa'], capitalize("abracadabra"));
    $this->assertEquals(['CoDeWaRrIoRs', 'cOdEwArRiOrS'], capitalize("codewarriors"));
    $this->assertEquals(['InDeXiNgLeSsOnS', 'iNdExInGlEsSoNs'], capitalize("indexinglessons"));
    $this->assertEquals(['CoDiNgIsAfUnAcTiViTy', 'cOdInGiSaFuNaCtIvItY'], capitalize("codingisafunactivity"));
  }
}