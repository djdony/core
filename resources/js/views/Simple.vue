<template>
    <div>
        <navigation></navigation>
        <banner></banner>
            <main id="main">
                <about></about>
                <why></why>
                <faq></faq>
                <contact></contact>
                <footers></footers>

            </main>
    </div>

</template>

<script>
export default {
    name: 'home',
    components: {
        Navigation: () => import('../simple/Navigation'),
        Why: () => import('../simple/Why'),
        Banner: () => import('../simple/Banner'),
        Faq: () => import('../simple/Faq'),
        Contact: () => import('../simple/Contact'),
        Footers: () => import('../simple/Footer'),
        About: () => import('../simple/About'),
    }
}
</script>

