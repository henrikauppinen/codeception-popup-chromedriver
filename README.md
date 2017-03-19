- install Chrome
- install [chromedriver](https://sites.google.com/a/chromium.org/chromedriver/)
- start chromedriver: `chromedriver --url-base=wd/hub`
- run test suite: `vendor/bin/codecept run selenium`

```
➜  ceptpopup vendor/bin/codecept run selenium
Codeception PHP Testing Framework v2.2.9
Powered by PHPUnit 5.7.17 by Sebastian Bergmann and contributors.

Selenium Tests (1) --------------------------------------------------------------------------------------------------------------------------------
✔ PopupCest: Popup (1.23s)
---------------------------------------------------------------------------------------------------------------------------------------------------


Time: 2.09 seconds, Memory: 10.00MB

OK (1 test, 2 assertions)
```
