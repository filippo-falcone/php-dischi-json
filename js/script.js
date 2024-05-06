const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            discs: [],
            disc: [],
            isActive: false
        };
    },
    methods: {
        showDisc() {
            this.isActive = true;
        },
        hideDisc() {
            this.isActive = false;
        },
        getDiscsFromApi() {
            axios.get(this.apiUrl).
                then((response) => {
                    this.discs = response.data;
                });
        },
        getDiscFromApi(index) {
            let queryParams = {
                disc: index
            }
            axios.get(this.apiUrl, {
                params: queryParams
            }).
                then((response) => {
                    this.disc = response.data;
                });
        }
    },
    mounted() {
        this.getDiscsFromApi();
    }
}).mount('#app');