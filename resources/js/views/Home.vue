<template>
    <div>
        <navigation></navigation>
        <banner></banner>
        <services></services>
        <auto></auto>
        <about></about>
        <footers></footers>
    </div>

</template>

<script>
export default {
    name: 'home',
    components: {
        Navigation: () => import('../components/Navigation'),
        Services: () => import('../components/Services'),
        Banner: () => import('../components/Banner'),
        Auto: () => import('../components/Auto'),
        Footers: () => import('../components/Footer'),
        About: () => import('../components/About'),
    }
}
</script>

