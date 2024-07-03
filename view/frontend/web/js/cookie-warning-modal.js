/**
 * Copyright (c) 2024 Attila Sagi
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 */

define([
    'jquery',
    'Magento_Ui/js/modal/modal',
    'jquery-ui-modules/widget'
], function ($, modal) {
    'use strict';

    $.widget('mage.cookieWarningModal', {
        options: {

        },

        /**
         * Cookie warning modal create
         * @private
         */
        _create: function () {
            console.log('mage.cookieWarningModal');

            let options;
            options = {
                'type': 'popup',
                'autoOpen': true,
                'title': 'Popup title',
                'responsive': true,
                'buttons': [{
                    text: jQuery.mage.__('Submit1'),
                    class: 'action'
                }]
            };

            modal(options, $('#cookie-warning-modal'));

            $('#cookie-warning-modal').modal('openModal');
        }
    });

    return $.mage.cookieWarningModal;
});
