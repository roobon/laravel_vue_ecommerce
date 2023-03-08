require("./bootstrap");

import { createApp } from "vue";
import axios from "axios";
import AddToBasket from "./components/AddToBasket.vue";

const app = createApp({});
app.component("add-to-basket", AddToBasket);

app.mount("#app");
