<?php

/**
 * Simple test cases for happy upgrade :D
 */
class LocaleTest extends PHPUnit_Framework_TestCase{

	/**
	 * pagination.php
	 */
	public function testPaginationLocale(){
		$this->loadLocaleFiles("pagination");
		$this->compareLocaleKeys();
	}
	/**
	 * reminders.php
	 */
	public function testRemindersLocale(){
		$this->loadLocaleFiles("reminders");
		$this->compareLocaleKeys();
	}
	/**
	 * validation.php
	 */
	public function testValidationLocale(){
		$this->loadLocaleFiles("validation");
		$this->compareLocaleKeys();
	}

	protected function compareLocaleKeys(){

		$originalKeys = array_keys($this->originalLocale);

		foreach ($originalKeys as $originalKey) {
	        $this->assertArrayHasKey($originalKey, $this->spanishLocale);
		}

	}

	protected function loadLocaleFiles($localeName){
		$this->spanishLocale = require_once("../src/es/$localeName.php");
		$this->originalLocale = require_once("../src/en/$localeName.php");
	}

}