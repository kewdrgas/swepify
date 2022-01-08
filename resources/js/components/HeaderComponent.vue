<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container row-fluid">
            <a class="navbar-brand" href="#">Logo</a>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Swepify </a>
                    </li>
                </ul>

                <div class="menu--buttons d-flex">
                    <a href="" class="nav-link">Przeglądaj oferty</a>
                    <a href="" class="nav-link">Lokalizacje</a>
                    <a href="" class="button button__whiteorange"
                        >Zaloguj się</a
                    >
                    <a href="" class="button button__orange">Zarejestruj się</a>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    mounted() {
        console.log("Component mounted.");
    },
};
</script>
