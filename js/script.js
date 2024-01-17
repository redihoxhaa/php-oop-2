const { createApp } = Vue;

createApp({
    data() {
        return {
            products: [],
            cart: [],
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
        },

        getCart() {
            axios.get("server/cartServer.php").then(response => {
                if (response.status === 200) {
                    this.cart = response.data;
                }
            })
        },

        addToCart(productID) {
            axios.get("server/cartServer.php", { params: { productID: productID } }).then(response => {
                if (response.status === 200) {
                    console.log(response);
                    this.cart = response.data;
                }
            })
        }
    },
    mounted() {
        this.getProducts();
        this.getCart();
    }
}).mount('#app')