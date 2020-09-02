<template>
    <div>
        <section id="contact" class="contact section-bg">
            <b-container>

                <div class="section-title">
                    <h2>Наши контакты</h2>
                </div>
                <b-row>
                    <b-col cols="4">
                            <div class="address">
                                <i class="bx bx-map"></i>
                                <p>Antalya<br>Lara</p>
                            </div>

                            <div class="email">
                                <i class="bx bx-envelope"></i>
                                <p>info@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bx bx-phone-call"></i>
                                <p>+90 533 555 55 55</p>
                            </div>
                    </b-col>
            <b-col>
                <b-form-group
                    id="name"
                    label-cols-sm="4"
                    label-cols-lg="3"
                    description="Ваше имя."
                    label="Ваше имя."
                    label-for="name"
                >
                    <b-form-input id="input-horizontal"></b-form-input>
                </b-form-group>

                <b-form-group
                    id="mobile"
                    label-cols-sm="4"
                    label-cols-lg="3"
                    description="Ваш контакный номер."
                    label="Телефон"
                    label-for="mobile"
                >
                    <b-form-input id="input-horizontal"></b-form-input>
                </b-form-group>

                <b-form-group
                    id="subject"
                    label-cols-sm="4"
                    label-cols-lg="3"
                    description="Какой у вас вопрос?."
                    label="Тема"
                    label-for="subject"
                >
                    <b-form-input></b-form-input>
                </b-form-group>

                <b-form-group
                    id="text"
                    label-cols-sm="4"
                    label-cols-lg="3"
                    description="Напишите нам ваше сообщение."
                    label="Сообщение"
                    label-for="subject"
                >
                    <b-form-textarea
                        id="textarea-rows"
                        placeholder="Сообщение"
                        rows="8"
                    ></b-form-textarea>
                </b-form-group>
                <b-form-group
                    label-cols-sm="4"
                    label-cols-lg="3"
                >
                    <b-button block variant="primary">Отправить</b-button>
                </b-form-group>

            </b-col>
                </b-row>
            </b-container>
        </section><!-- End Contact Us Section -->
    </div>
</template>

<script>
export default {
    name: 'contact'
}
</script>
