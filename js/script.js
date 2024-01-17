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
            const params = {};

            if (this.selectedCategory !== "") {
                params.category = this.selectedCategory;
            }

            if (this.selectedType !== "") {
                params.type = this.selectedType;
            }

            axios.get("server/server.php", {
                params: params
            }).then(response => {
                if (response.status === 200) {
                    this.products = response.data;
                }
            });
        }
    },
    mounted() {
        this.getProducts();
    }
}).mount('#app')