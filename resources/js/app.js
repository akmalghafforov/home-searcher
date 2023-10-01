import axios from "axios";

new Vue({
    el: '#app',
    data: function() {
        return {
            loading: false,
            properties: [],
            searchForm: {
                name: '',
                price: [0, 1000000],
                bedroomsCount: [],
                bathroomsCount: [],
                storyesCount: [],
                garagesCount: [],
            },
            searchFormRules: {
                name: [
                    { required: false, message: 'Please property name', trigger: 'blur' },
                    { min: 2, max: 300, message: 'Length should be 2 to 300', trigger: 'blur' }
                ],
                region: [
                    { required: true, message: 'Please select Activity zone', trigger: 'change' }
                ],
                bedroomsCount: [
                    { type: 'array', required: false, message: 'Please select bedrooms count', trigger: 'change' }
                ],
                bathroomsCount: [
                    { type: 'array', required: false, message: 'Please select bathrooms count', trigger: 'change' }
                ],
                storyesCount: [
                    { type: 'array', required: false, message: 'Please select storyes count', trigger: 'change' }
                ],
            }
        }
    },
    mounted: function () {
        this.fetchProperties();
    },
    methods: {
        search() {
            this.fetchProperties();
        },
        reset() {
            this.searchForm = {
                name: '',
                price: [0, 1000000],
                bedroomsCount: [],
                bathroomsCount: [],
                storyesCount: [],
                garagesCount: [],
            };
        },
        fetchProperties: function () {
            this.loading = true;
            axios
                .post('/api/property/search', this.preparePayload())
                .then((response) => {
                    this.properties = response['data'];
                    this.loading = false;
                });
        },
        preparePayload: function () {
            let filter = {};

            if (this.searchForm.name) {
                filter['name'] = this.searchForm.name;
            }

            if (this.searchForm.price && this.searchForm.price.length === 2) {
                filter['price'] = {
                    from: this.searchForm.price[0],
                    to: this.searchForm.price[1],
                }
            }

            if (this.searchForm.bedroomsCount.length) {
                filter['bedrooms_count'] = this.searchForm.bedroomsCount;
            }

            if (this.searchForm.bathroomsCount.length) {
                filter['bathrooms_count'] = this.searchForm.bathroomsCount;
            }

            if (this.searchForm.storyesCount.length) {
                filter['storeys_count'] = this.searchForm.storyesCount;
            }

            if (this.searchForm.garagesCount.length) {
                filter['garages_count'] = this.searchForm.garagesCount;
            }

            return {filter};
        }
    }
});