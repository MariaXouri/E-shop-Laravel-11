import VueRouter from "vue-router";
import routes from "./routes";
import History from "vue-router";
const router = new VueRouter({
    mode: "history",
    history:History,
    routes,
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0 };
    },
});

export default router;
