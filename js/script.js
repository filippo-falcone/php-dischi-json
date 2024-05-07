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
            this.bodyOverflow();
        },
        hideDisc() {
            this.isActive = false;
            this.bodyOverflow();
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
        },
        bodyOverflow() {
            if (this.isActive) {
                document.body.classList.add('overflow-hidden');
            } else {
                document.body.classList.remove('overflow-hidden');
            }
        }
    },
    mounted() {
        this.getDiscsFromApi();
    }
}).mount('#app');