require('./bootstrap');
import {createApp} from 'vue';
import router from '@/js/routes.js';
import App from '@/js/views/App';
import PageHeader from '@/js/components/Header';
import Panel from '@/js/components/Panel';
import PanelOuterContainer from '@/js/components/PanelOuterContainer';
import Container from '@/js/components/Container';
const app = createApp(App);

app.use(router);

//Register the Header component globally
app.component('PageHeader', PageHeader);
app.component('Panel', Panel);
app.component('PanelOuterContainer', PanelOuterContainer);
app.component('Container', Container);

app.mount('#app');
