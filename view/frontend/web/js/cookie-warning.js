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
            declineButtonText: 'Decline'
        },

        /**
         * Cookie warning modal create
         * @private
         */
        _create: function () {
            console.log('mage.cookieWarning');
        }
    });

    return $.mage.cookieWarning;
});
