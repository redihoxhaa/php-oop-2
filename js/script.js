const { createApp } = Vue;

createApp({
    data() {
        return {
            products: [],
            selectedCategory: "",
            selectedType: "",
        }
    },
    methods: {

        getProducts() {
            axios.get("server/server.php", {
                params: {
                    "category": this.selectedCategory,
                    "type": this.selectedType,
                }
            }).then(response => {
                if (response.status === 200) {
                    this.products = response.data;
                }
            })
        }
    },
    mounted() {
        this.getProducts();
    }
}).mount('#app')