<main>

    <!-- Barra di ricerca per filtrare prodotti -->
    <div class="search-bar d-flex align-items-center justify-content-center">

        <select class="form-select" v-model="selectedCategory" @change="getProducts()">
            <option selected value="">Scegli la categoria</option>
            <option value="Cani">Cani</option>
            <option value="Gatti">Gatti</option>
        </select>

        <select class="form-select" v-model="selectedType" @change="getProducts()">
            <option selected value="">Scegli il tipo di prodotto</option>
            <option value="Cibo">Cibo</option>
            <option value="Giochi">Giochi</option>
            <option value="Cucce">Cucce</option>
        </select>

    </div>
    <!-- /Barra di ricerca per filtrare prodotti -->

    <ul class="row products py-5 g-5">
        <li class="col-12 col-md-6 col-lg-3" v-for="product in products">
            <div class="card d-flex flex-column justify-content-center align-items-center p-5">
                <div class="pic-container">
                    <img :src=product.image alt="product.name">
                </div>
                <h3 class="text-center py-3">{{product.name}}</h3>
                <p class="m-0">€{{product.price}}</p>
            </div>
        </li>
    </ul>

    <!-- Prova a cercare GATTI e CIBO -->
    <p class="no-results-message text-center" v-if="!products.length">Mi spiace non ci sono prodotti in base alla ricerca.</p>

</main>