<template>
    <div class="mt-5 mb-5">
        <b-container>
            <div class="section-title" >
                <h2>Вопросы</h2>
            </div>
            <div role="tablist" v-for="(question, id) in questions.data">
                <b-card no-body class="mb-1">
                    <b-card-header header-tag="header" class="p-1" role="tab">
                        <b-button block v-b-toggle="'collapse-' + id" variant="info">{{question.question}}</b-button>
                    </b-card-header>
                    <b-collapse :id="'collapse-' + id" accordion="my-accordion" role="tabpanel">
                        <b-card-body>
                            <b-card-text>{{ question.answer }}</b-card-text>
                        </b-card-body>
                    </b-collapse>
                </b-card>
            </div>
        </b-container>
    </div>
</template>

<script>
export default {
    props: ['questions'],
    data() {
        return {
            text: `
         Ответ.
        `
        }
    }
}
</script>
