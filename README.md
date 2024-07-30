# **Magento 2 Cookie Warning Extension** #

[![M2 Coding Standard](https://github.com/AttilaSagiDev/cookie-warning/actions/workflows/codesniffer-actions.yml/badge.svg)](https://github.com/AttilaSagiDev/cookie-warning/actions/workflows/codesniffer-actions.yml)

## Description ##

The Cookie Warning extension shows a notification that the store use cookies for informing users that the site has cookies, with a popup for more information and option to lock scripts before acceptance.

EU websites must follow the Commission's guidelines on privacy and data protection and inform users that cookies are not being used to gather information unnecessarily.

The module provides an automatic and highly customizable frontend popup. This notification contains customizable information text and button text. The administrator easily set the position of the popup to the top, bottom at the extension's configuration panel. There are also options to adjust the colors of the texts, background and the buttons.

## Features ##

- Extension enable or disable
- Responsive and independent of the custom theme
- Customizable position: top, bottom
- Customizable notification message and title
- Customizable accept button text and color
- Customizable dismiss button text and color
- Customizable policy link text and URL
- Customizable colors: background, font, link and buttons colors
- Multistore support
- Supported languages: English

It is a separate module that does not change the default Magento files.

Support:
- Magento Community Edition 2.4.x
- Adobe Commerce 2.4.x

## Installation ##

** Important! Always install and test the extension in your development environment, and not on your live or production server. **

1. Backup Your Data Backup your store database and whole Magento 2 directory.

2. Enable extension Please use the following commands in your Magento 2 console:

    ```
     bin/magento module:enable Space_CookieWarning
    
     bin/magento setup:upgrade
    ```

## Configuration ##

Login to Magento backend (admin panel). You can find the module configuration here: Stores / Configuration, in the left menu Space Extensions / Cookie Warning.

Settings:

### Configuration ###

Enable Extension: Here you can enable the extension.

### Display ###

Cookie Lifetime: Please enter the cookie lifetime in days.

Position: Please select the position of the cookie warning.

Title: Please enter the title for the cookie warning.

Message: Please enter the message for the cookie warning. You can use only the "strong" HTML tag for formatting.

Accept Button Text: Please enter accept button text.

Show Dismiss Button: lease select yes to show dismiss button.

Dismiss Button Text: Please enter decline button text.

Policy Link Text: Please enter policy link text.

Policy Link URL: Please enter policy link relative to store.

### Color Settings ###

Background Color: Please select the background color of the warning block.

Font Color: Please select the text color of the warning block.

Link Color: Please select the link color of the warning block.

Accept Button Color: Please select the accept button background color of the warning block.

Accept Button Text Color: Please select the accept button text color of the warning block.

Decline Button Color: Please select the decline button background color of the warning block.

Decline Button Text Color: Please select the decline button text color of the warning block.

## Change Log ##

Version 1.1.0 - Jul 30, 2024
- Compatibility with Magento Community Edition 2.4.x
- Compatibility with Adobe Commerce 2.4.x
- Full refactor
- PHP 8.3 support

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

## Support ##

If you have any questions about the extension, please contact us.

## License ##

MIT License.
