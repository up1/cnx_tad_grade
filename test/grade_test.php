<?php

class GradeUnitTest extends PHPUnit_Framework_TestCase {

	function test_score_80_should_get_grade_A() {
		$grade = new Grade();
		$this->assertEquals("B", $grade->tad(80));
	}

	function test_score_100_should_get_grade_F() {
		$grade = new Grade();
		$this->assertEquals("F", $grade->tad(100));
	}
	
	function test_score_70_should_get_grade_B() {
		$grade = new Grade();
		$this->assertEquals("B", $grade->tad(70));
	}

	function test_score_60_should_get_grade_C() {
		$grade = new Grade();
		$this->assertEquals("C", $grade->tad(60));
	}

	function test_score_50_should_get_grade_D() {
		$grade = new Grade();
		$this->assertEquals("D", $grade->tad(50));
	}

	function test_score_49_should_get_grade_F() {
		$grade = new Grade();
		$this->assertEquals("F", $grade->tad(49));
	}

}
?>