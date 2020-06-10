import Vue from 'vue'
//import vue-router installed
import VueRouter from 'vue-router'
//import components to use
import Home from './components/Home.vue'
import PackRegion from './components/PackRegion.vue'
import DetailsPack from './components/DetailsPack.vue'
import AjoutPack from './components/AjoutPack.vue'

import ResultatsRecherche from './components/ResultatsRecherche.vue'



//alert vue that we want to use this router
Vue.use(VueRouter)

//Créez l'instance du routeur et passez l'option `routes`.
const router=new VueRouter({
      //mode:'history',
    props: ['id'],
    //  Définissez des routes.
// Chaque route doit correspondre à un composant. 
    routes:[
        {
            path: '/',
            name: 'home',
            component: Home
        },

        {
            path: '/packs',
            name: 'packRegion',
            component: PackRegion
        },

        {
            path: '/ajoutPack',
            name: 'ajoutPack',
            component: AjoutPack
        },

         {
            path: '/detailspack',
            name: 'DetailsPack',
            component: DetailsPack
        }, 

        {
            path: '/detailspack/:id',
            name: 'DetailsPack',
            component: DetailsPack
        },

        {
            path: '/resultats',
            // path: '/resultats?du={du}&au={au}&type={type}&ville_id={ville_id}',

            name: 'ResultatsRecherche',
            component: ResultatsRecherche
        },

    ]

});
Vue.router = router

export default router


