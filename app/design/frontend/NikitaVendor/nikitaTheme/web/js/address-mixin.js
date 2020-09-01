define(['jquery'], function ($) {
    'use strict';

    return function (targetWidget) {
        $.widget('mage.address', targetWidget, {
            _addAddress: function () {
                console.log('new address added');

                return this._super();
            }
        });
        return $.mage.address;
    };
});
