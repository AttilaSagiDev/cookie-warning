/**
 * Copyright (c) 2024 Attila Sagi
 * @license http://www.opensource.org/licenses/mit-license.html  MIT License
 */

define([
    'jquery',
    'Magento_Ui/js/modal/modal',
    'mage/translate',
    'jquery-ui-modules/widget'
], function ($, modal, $t) {
    'use strict';

    $.widget('mage.cookieWarningModal', {

        defaults: {
            modalId : '#cookie-warning-modal',
            acceptButtonText: 'Got It!',
            declineButtonText: 'Decline'
        },

        /**
         * Cookie warning modal create
         * @private
         */
        _create: function () {
            if (typeof this.options.acceptButtonText === "undefined") {
                this.options.acceptButtonText = this.defaults.acceptButtonText;
            }

            if (typeof this.options.declineButtonText === "undefined") {
                this.options.declineButtonText = this.defaults.declineButtonText;
            }

            let modalOptions = {
                'type': 'popup',
                'autoOpen': true,
                'title': 'Popup title',
                'responsive': true,
                'buttons': [
                    {
                        text: $t(this.options.declineButtonText),
                        class: 'action'
                    },
                    {
                        text: $t(this.options.acceptButtonText),
                        class: 'action'
                    }
                ]
            };

            modal(modalOptions, $(this.defaults.modalId));

            $(this.defaults.modalId).modal('openModal');
        }
    });

    return $.mage.cookieWarningModal;
});
