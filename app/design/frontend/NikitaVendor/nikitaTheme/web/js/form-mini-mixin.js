define(['jquery'], function ($) {
    'use strict';

    return function (targetWidget) {
        $.widget('mage.quickSearch', targetWidget, {
            _addAddress: function () {
                this.submitBtn.disabled = false;

                return this._super();
            }
        });
        return $.mage.quickSearch;
    };
});
