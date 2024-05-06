const { createApp } = Vue;

createApp({
    data() {
        return {
            discs: []
        };
    },
    methods: {
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