<?php

namespace tests\unit;


class SmokeUnitTest extends \Codeception\Test\Unit {

    protected function _before() {
    }

    protected function _after() {
    }

    public function testBooleanToNumber(){
        $this->assertTrue(true == 1);
        $this->assertTrue(false ==0);
        $this->assertTrue(false =="0");
        $this->assertTrue(true =="1");
    }



}