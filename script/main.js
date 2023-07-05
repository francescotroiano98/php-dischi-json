const { createApp } = Vue;

createApp({
    data(){
        return{
            apiUrl: './server.php',
            discItems: [],
        }
    },
    methods: {
        getDiscItems() {

            axios.get(this.apiUrl, {
                params: {}
              })
              .then((response) => {
                console.log(response);
                this.discItems = response.data;
              })
              .catch(function (error) {
                console.log(error);
              })
              .finally(function () {
                // always executed
              });  

        }
    },
    created() {
        this.getDiscItems();
    },
   
}).mount('#app')