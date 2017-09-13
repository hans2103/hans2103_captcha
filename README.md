# hans2103_captcha
Customizing Magento’s Native Captcha

This Magento 1 extension is created following the instructions of an online tutorial.
http://www.phpfunctionoftheday.com/customizing-magentos-native-captcha-advanced/

In our new _toHtml() function we do the following:
- reduce noise level from 200 to 50
- set line noise level from 5 to 0
- increase font-size from 24 to 30