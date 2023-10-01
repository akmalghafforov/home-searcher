import axios from "axios";

new Vue({
    el: '#app',
    data: function() {
        const item = {
            'id': 0,
            'name': 0,
            'price': 0,
            'bedrooms_count': 0,
            'bathrooms_count': 0,
            'storeys_count': 0,
            'garages_count': 0,
            'created_at': 0,
        };

        return {
            visible: false,
            searchForm: {
                user: '',
                region: ''
            },
            properties: []
        }
    },
    mounted: function () {
        axios
            .post('/api/property/search', {
                'filter': [],
            })
            .then(response => (this.properties = response['data']));
    },
    methods: {
        handleSelect(key, keyPath) {
            console.log(key, keyPath);
        }
    }
});