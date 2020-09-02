<template>
    <div>
        <b-navbar toggleable="lg" type="dark" fixed="top">
            <b-navbar-brand href="#">Time Transfer</b-navbar-brand>

            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

            <b-collapse id="nav-collapse" is-nav>
                <!-- Right aligned nav items -->
                <b-navbar-nav class="ml-auto">
                    <b-navbar-nav>
                        <b-nav-item to="/" exact-active-class="active">Home</b-nav-item>
                        <b-nav-item to="#services" exact-active-class="active">Услуги</b-nav-item>
                        <b-nav-item to="#price" exact-active-class="active">Цены</b-nav-item>
                        <b-nav-item to="#contact" exact-active-class="active">Контакты</b-nav-item>
                    </b-navbar-nav>

                    <b-nav-item-dropdown text="Lang" right>
                        <b-dropdown-item href="#">EN</b-dropdown-item>
                        <b-dropdown-item href="#">РУС</b-dropdown-item>
                    </b-nav-item-dropdown>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
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
</style>
