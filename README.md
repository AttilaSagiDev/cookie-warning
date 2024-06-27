# **Magento 2.0 Cookie Alert Extension** #

[![M2 Coding Standard](https://github.com/AttilaSagiDev/cookie-warning/actions/workflows/codesniffer-actions.yml/badge.svg)](https://github.com/AttilaSagiDev/cookie-warning/actions/workflows/codesniffer-actions.yml)

## Description ##

The Cookie Alert extension shows a notification that the store use cookies for informing users that the site has cookies, with a popup for more information and option to lock scripts before acceptance.

EU websites must follow the Commission's guidelines on privacy and data protection and inform users that cookies are not being used to gather information unnecessarily.

The module provides an automatic and highly customizable frontend popup. This notification contains customizable information text and button text. The administrator easily set the position of the popup to the top, bottom, left or right at the extension's configuration panel. There are also options to adjust the colors of the texts, background and the button.

## Features ##

- Extension enable or disable
- Responsive and independent from custom theme
- Customizable position: top, bottom, float left or float right
- Customizable notification message
- Customizable dismiss button text
- Customizable policy link text and URL
- Customizable colors: background, background text, button, and button text
- Multistore support
- Supported languages: English

Individual module, i. e. it does not modify the standard Magento 2.0 files.

Support:
Magento Community Edition  2.1.x, 2.2.x

## Installation ##

** Important! Always install and test the extension in your development environment, and not on your live or production server. **

1. Backup Your Data
   Backup your store database and web directory.

2. Clear Cache and cookies
   Clear the store cache under var/cache and all cookies for your store domain.

3. Disable Compilation
   Disable Compilation, if it’s enabled.

4. Upload Files
   Unzip extension contents on your computer and navigates inside the extracted folder. Create folder app/code on your web server if you don't have it already. Using your FTP client upload the content of the directory to your store root/app/code folder.
   Important! If the module contents don't include the Me/CookieWarning directory in the zip file, you must create root/app/code/Me/CookieWarning folder and upload the extension here.

5. Enable extension
   Please use the following commands in the /bin directory of your Magento 2.0 instance:

   php magento module:enable Me_CookieWarning

   php magento setup:upgrade

One more time clear the cache under var/cache and var/page_cache login to Magento backend (admin panel).

## Configuration ##

Login to Magento backend (admin panel).  You can find the module configuration here: Stores / Configuration, in the left menu Magevolve Extensions / Cookie Alert.

## Change Log ##

Version 1.0.4 - Jan 12, 2018
- URL fixes

Version 1.0.3 - Dec 27, 2017
- Compatibility with Magento 2.2.x

Version 1.0.2 - May 3, 2017
- Fix admin JS error

Version 1.0.1 - April 24, 2017
- Fix admin JS error

Version 1.0.0 - March 26, 2017
- Compatibility with Magento 2.0.x
- Compatibility with Magento 2.1.x

## Troubleshooting ##

1. After the extension installation I receive a 404 error in Stores / Configuration / Cookie Alert.
   Clear the store cache, browser cookies, logout from backend and login back.

2. My configuration changes do not appear on the store frontend.
   Clear the store cache, clear your browser cache and domain cookies and refresh the page.

## Support ##

If you have any questions about the extension, please contact us.

## License ##

See COPYING.txt for license details.