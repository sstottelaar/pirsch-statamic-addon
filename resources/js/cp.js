import Dashboard from "./components/Dashboard.vue";

Statamic.booting(() => {
    Statamic.$components.register("pirsch-dashboard", Dashboard);
});
