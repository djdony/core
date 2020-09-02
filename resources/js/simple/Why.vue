<template>
    <div>
        <section class="section-bg">
        <b-container fluid>
            <div class="section-title">
                <h2>Типы трансферов</h2>
            </div>
            <b-card-group deck >
                <b-card
                    :img-src="require('../assets/img/vw.png')"
                    img-alt="Card image"
                    img-top
                    bg-variant="transparent"
                >
                    <b-card-text >
                       Легковой автомобиль комфортного класса.
                    </b-card-text>
                    <template v-slot:footer>
                        <small class="text-light">1 - 3 пасажира</small>
                    </template>                </b-card>
                <b-card
                    :img-src="require('../assets/img/vito2.png')"
                    img-alt="Card image"
                    img-top
                    bg-variant="transparent"
                >
                    <b-card-text>
                        Вип класс.
                    </b-card-text>
                    <template v-slot:footer>
                        <small class="text-light">до 7 пассажиров</small>
                    </template>
                </b-card>
                <b-card
                    :img-src="require('../assets/img/sprinter.png')"
                    img-alt="Card image"
                    img-top
                    bg-variant="transparent"
                >
                    <b-card-text>
                        Индивидуальный микроавтобус для группы людей.
                    </b-card-text>
                    <template v-slot:footer>
                        <small class="text-light">до 13 пассажиров</small>
                    </template>
                </b-card>
            </b-card-group>
        </b-container>
        </section>
    </div>
</template>

<script>
export default {
    name: 'why'
}
</script>
<style>
</style>
