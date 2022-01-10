<template>
    <div>
        <div @click="showPopup = !showPopup" :class="'button ' + classbutton">
            {{ text }}
        </div>

        <div
            v-if="showPopup"
            class="darker"
            :class="showPopup ? 'active' : ''"
            @click="showPopup = !showPopup"
        ></div>
        <div v-if="showPopup" class="popup">
            <h2 class="popup__heading">Wybierz swój rodzaj konta</h2>
            <div style="display: flex; justify-content: space-between">
                <div>
                    <p class="popup__text">Zwykły uzytkownik</p>

                    <a
                        class="popup__button button button__orange"
                        :href="url + '/user'"
                    >
                        {{ text }}
                    </a>
                </div>
                <div>
                    <p class="popup__text">Usługodawca</p>

                    <a
                        :href="url + '/business'"
                        class="popup__button button button__whiteorange"
                    >
                        {{ text }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        url: {
            type: String,
            required: false,
        },
        text: {
            type: String,
            required: false,
        },
        classbutton: {
            type: String,
            required: false,
        },
    },
    data: () => ({
        showPopup: false,
    }),
};
</script>
