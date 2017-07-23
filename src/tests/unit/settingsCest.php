<?php


class settingsCest
{

    protected $settings;
    public function _before(UnitTester $I)
    {
        $settings = new settings();
    }

    public function _after(UnitTester $I)
    {
    }

    // tests
    public function tryToTest(UnitTester $I)
    {
        _before();
        $I->assertTrue(isset($settings));
        $db = $settings->dbconfig();
        $I->assertArrayHasKey($db['dsn'],'mysql:host=localhost;dbname=test');
        $I->assertArrayHasKey($db['user'], 'foo');
        $I->assertArrayHasKey($db['pass'], 'bar');

    }
}
