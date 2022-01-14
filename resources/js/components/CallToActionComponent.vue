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
            <h2 class="popup__heading">Podaj dane do zamówienia usługi</h2>

            <form :action="url" method="POST">
                <input type="hidden" name="_token" :value="csrf" />
                <input name="offer_id" :value="offer_id" hidden />
                <div class="form-group row">
                    <div class="col-6">
                        <label for="exampleFormControlInput1">Adres</label>
                        <input
                            type="text"
                            class="form-control"
                            id="exampleFormControlInput1"
                            placeholder="Adres zamawiającego"
                            name="adres"
                        />
                    </div>

                    <div class="col-6">
                        <label for="exampleFormControlInput1"
                            >Metraz mieszkania</label
                        >
                        <input
                            type="number"
                            class="form-control"
                            step="5"
                            min="5"
                            id="exampleFormControlInput1"
                            placeholder="Metraz mieszkania zamawiającego"
                            name="metraz"
                        />
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Zakres usług</label>
                    <input
                        type="text"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Zakres usług sprzątających"
                        name="zakres_uslug"
                    />
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1"
                        >Preferowana godzina</label
                    >
                    <input
                        type="datetime-local"
                        class="form-control"
                        id="exampleFormControlInput1"
                        placeholder="Preferowana godzina zamawiającego"
                        name="data"
                    />
                </div>
                <button
                    style="margin-top: 15px"
                    class="button button__whiteorange"
                >
                    Zamawiam
                </button>
            </form>
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
        imguser: {
            type: String,
        },
        imgbusiness: {
            type: String,
        },
        offer_id: {
            type: String,
        },
        csrf_token: {
            type: String,
        },
    },
    data: () => ({
        showPopup: false,
        csrf: "",
    }),
    mounted() {
        this.csrf = window.Laravel.csrfToken;
    },
};
</script>
