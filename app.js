const { createApp } = Vue

createApp({
    data() {
        return {
            tasks: [],
            api_url: 'script.php',
            task: '',
        }
    }, methods: {
        readTasks(url) {
            axios
                .get(url)
                .then(response => {
                    /* console.log(response); */
                    this.tasks = response.data
                })
        }, saveTask() {
            console.log('ho cliccato');
            console.log(this.task);
            const data = {
                task: this.task
            };
            console.log('data');
            axios
                .post(this.api_url, data, {
                    headers: { "Content-Type": "multipart/form-data" }

                }).then(response => {
                    console.log(response);
                    this.tasks = response.data
                })
        }
    }, mounted() {
        this.readTasks(this.api_url)
    }
}).mount('#app')