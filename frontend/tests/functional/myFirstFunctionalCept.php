<?php use frontend\tests\FunctionalTester;
$I = new FunctionalTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('Home'); // ! Тут часть фразы с вашей главной
$I->amOnPage('/site/about');
$I->seeResponseCodeIs(\Codeception\Util\HttpCode::OK);
$I->see('About'); // ! Тут часть фразы с вашей страницы about