import "./bootstrap";
import "../css/app.css";

import { createApp } from "vue";
// import CardsGrid from "./components/CardsGrid";

const app = createApp({});
app.component("cards-grid", CardsGrid);
app.mount("#app");
