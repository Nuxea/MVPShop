import {compile, createApp} from "vue";

const template = '<h1>Hi! I ❤️ {{ firstname }}</h1>';

const app = createApp({
    data() {
        return {
            firstname: 'Doudou'
        }
    },
    render() {
        return compile(template)(this.$.ctx)
    }
});


app.mount('#app');