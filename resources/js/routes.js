// import pages
import Barcode from './pages/Barcode.vue';
import Purchase from './pages/Purchase.vue';

export default [
    { path: "/admin/barcodes/create", component: Barcode, name: 'barcode' },
    { path: "/admin/purchases/create", component: Purchase, name: 'purchase' },
];