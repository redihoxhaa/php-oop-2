<?php

?>

<!DOCTYPE html>
<html lang="en">
<?php include __DIR__ . '/partials/head.php' ?>

<body>
    <div id="app" v-cloak>
        <div class="container">
            <?php include __DIR__ . '/partials/header.php' ?>
            <?php include __DIR__ . '/partials/main.php' ?>
            <?php include __DIR__ . '/partials/footer.php' ?>
        </div>
    </div>
</body>

<!-- Vue -->
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

<!-- Axios -->
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<!-- JS -->
<script src="js/script.js"></script>

</html>