const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            api_url: 'script.php'
        }
    }, methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    console.log(response);
                })
        }
    }, mounted() {
        this.readTasks(this.api_url)
    }
}).mount('#app')