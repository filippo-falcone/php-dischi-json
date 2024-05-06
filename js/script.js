const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: [],
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
        getDiscFromApi() {
            let apiUrl = 'server.php';
            axios.get(apiUrl).
                then((response) => {
                    this.discs = response.data;
                });
        }
    },
    mounted() {
        this.getDiscFromApi();
    }
}).mount('#app');