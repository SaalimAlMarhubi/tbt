import "./bootstrap";
import "../css/app.css";

import { createApp } from "vue/dist/vue.esm-bundler.js";
// import CardsGrid from "./components/CardsGrid.vue";

createApp({
    components: {
        CardsGrid,
    },
}).mount("#app");
