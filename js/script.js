const { createApp } = Vue;

createApp({
    data() {
        return {
            cards: []
        };
    },
    methods: {
        getDiscFromApi() {
            let apiUrl = 'server.php';
            axios.get(apiUrl).
                then((response) => {
                    this.cards = response.data;
                });
        }
    },
    mounted() {
        this.getDiscFromApi();
    }
}).mount('#app');