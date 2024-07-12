/**
 * Copyright (c) 2024 Attila Sagi
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 */

define([
    'jquery',
    'jquery-ui-modules/widget',
    'mage/cookies'
], function ($) {
    'use strict';

    $.widget('mage.cookieWarning', {

        defaults: {
            acceptButtonText: 'Got It!',
            declineButtonText: 'Decline',
            declineButtonSelector: '#btn-cookie-warning-decline'
        },

        /**
         * Cookie warning modal create
         * @private
         */
        _create: function () {
            console.log(this);
            console.log('mage.cookieWarning');

            $(this.element).show();

            $(this.options.declineButtonSelector).on('click', $.proxy(function () {
                $(this.element).hide();
            }, this));
        }
    });

    return $.mage.cookieWarning;
});
