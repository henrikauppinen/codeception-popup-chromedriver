<?php

class PopupCest
{

	public function popup(SeleniumTester $I)
	{
		$I->expectTo('Start on main page and click a link that opens a popup');
		$I->amOnPage('/main.html');
		$I->click('#main-link');

		$I->expectTo('Interact with the popup window and click the final confirmation button');
		$I->switchToNextTab();
		$I->click('#final-confirmation-button');

		$I->expectTo('Go back to intermediate window and let it do its magic');
		$I->switchToPreviousTab();
		$I->see('contents of this intermediate page');
		$I->seeInCurrentUrl('intermediate.html');
	}

}