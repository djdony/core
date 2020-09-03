<template>
    <div>
        <b-container>
            <b-row>
                <b-col>
                    <img src="../assets/img/why-us-1.jpg" class="img-fluid" alt="">
                </b-col>
                <b-col>
                    <p v-html="about"></p>
                </b-col>
            </b-row>
        </b-container>
    </div>
</template>

<script>
export default {
    props: ['about'],
    name: 'about'
}
</script>
<style>
</style>
