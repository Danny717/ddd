<?php
use frontend\tests\AcceptanceTester;
$I = new AcceptanceTester($scenario);
$I->wantTo('perform actions and see result');
$I->amOnPage('/');
$I->see('Congratulations!'); // ! Тут часть фразы с вашей главной
$I->amOnPage('/about');
$I->see('About'); // ! Тут часть фразы с вашей страницы about
