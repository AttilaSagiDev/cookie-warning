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
            acceptButtonSelector: '#btn-cookie-warning-accept',
            declineButtonSelector: '#btn-cookie-warning-decline'
        },

        /**
         * Cookie warning widget create
         * @private
         */
        _create: function () {
            if (typeof this.options.acceptButtonSelector === "undefined" ) {
                this.options.acceptButtonSelector = this.defaults.acceptButtonSelector;
            }
            if (typeof this.options.declineButtonSelector === "undefined" ) {
                this.options.declineButtonSelector = this.defaults.declineButtonSelector;
            }

            if (typeof this.options.cookieName !== "undefined") {
                if ($.mage.cookies.get(this.options.cookieName)) {
                    this.element.hide();
                } else {
                    this.element.show();
                }

                let cookieLifetimeInDays = parseInt(this.options.cookieLifetime) * 1000 * 3600 * 24;
                $(this.options.acceptButtonSelector).on('click', $.proxy(function () {
                    let cookieExpires = new Date(new Date().getTime() + cookieLifetimeInDays);
                    $.mage.cookies.set(this.options.cookieName, "1", {
                        expires: cookieExpires
                    });
                    $(this.element).hide();
                }, this));

                $(this.options.declineButtonSelector).on('click', $.proxy(function () {
                    let cookieExpires = new Date(new Date().getTime() + (1000 * 3600 * 24));
                    $.mage.cookies.set(this.options.cookieName, "0", {
                        expires: cookieExpires
                    });
                    $(this.element).hide();
                    window.location.href = this.options.policyUrl;
                }, this));
            }
        }
    });

    return $.mage.cookieWarning;
});
