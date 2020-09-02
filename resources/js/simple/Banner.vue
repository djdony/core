<template>
    <div>
        <b-jumbotron fluid header-level="5" text-variant="light" align="center">
            <template v-slot:header>ЗАКАЗ ТРАНСФЕРА ОНЛАЙН</template>
            <b-row class="vertical-center">
                <b-form inline>
                    <b-form-select v-model="selected" size="lg" :options="options"></b-form-select>
                    <b-form-select v-model="selected" size="lg" :options="options"></b-form-select>
                    <b-form-datepicker  placeholder="Дата"  size="lg"></b-form-datepicker>
                    <b-button variant="success" href="#" size="lg">Заказать</b-button>
                </b-form>
            </b-row>
        </b-jumbotron>
    </div>
</template>

<script>
export default {
    name: 'banner',
    data() {
        return {
            selected: null,
            options: [
                {value: null, text: 'Откуда'},
                {value: 'a', text: 'Анталия'},
                {value: 'b', text: 'Алания'},
                {value: {C: '3PO'}, text: 'Кемер'},
            ]
        }
    }
}
</script>
<style>
.jumbotron {
    text-align: center;
    padding-top: 200px;
    height: 100vh;
    background-image: url('../assets/img/transfer.jpg');
    background-size: cover;
    background-position: center;
}
@media (min-width: 800px) {
    .vertical-center {
        position: absolute;
        left: 50%!important;
        top: 50%!important;
        transform: translate(-50%, -50%);
    }
}
</style>
