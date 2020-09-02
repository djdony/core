<template>
    <div>
        <h1 class="banner mt-3 ml-3">Time Transfer</h1>
        <div class="float-right">
            <font-awesome-icon v-b-toggle.sidebar-right icon="bars" align-right class="mt-5 mr-5" size="2x"/>
            <b-sidebar bg-variant="dark" text-variant="light" id="sidebar-right" right shadow>
                <div class="px-3 py-2">
                    <b-nav vertical class="w-25">
                        <b-nav-item to="/" exact-active-class="active">Home</b-nav-item>
                        <b-nav-item to="#services" exact-active-class="active">Услуги</b-nav-item>
                        <b-nav-item to="#price" exact-active-class="active">Цены</b-nav-item>
                        <b-nav-item to="#contact" exact-active-class="active">Контакты</b-nav-item>
                    </b-nav>

                </div>
            </b-sidebar>
        </div>
    </div>


</template>

<script>
export default {

}
</script>
<style>
.navbar-nav {
    background:transparent;
}
.fa-bars {
    color: lightslategrey;
}
.fa-bars:hover {
    color: white;
    cursor: pointer;
}
.h-1{
    position: absolute;
}
.banner {
    position: absolute;
    color: white;
}
</style>
