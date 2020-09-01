var config = {
    map: {
    },

    config: {
        mixins: {
            'Magento_Checkout/js/view/minicart': {
                'js/minicart-mixin': true
            },

            'Magento_Customer/js/address' : {
                'js/address-mixin': true
            },
            'Magento_Search/js/form-mini' : {
                'Magento_Search/js/form-mini-mixin': true
            }
        }
    },

    paths: {
        slick: 'js/slick.min',
        customSlick: 'Magento_CatalogWidget/js/customSlider'
    },

    shim: {
        slick: {
            deps: ['jquery']
        }
    }
};
