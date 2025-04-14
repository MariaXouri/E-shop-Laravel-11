import Home from '../Views/Home.vue'
import Jewels from '../Views/Jewels.vue';
import Favourites from '../Views/Favourites.vue';
import favourite from '../Views/favourite.vue';
import Purchase from '../Views/Purchase.vue';
import Email from '../Views/Email.vue';
import Jewel from '../Views/Jewel.vue';
import START from 'vue-router';
import History from 'vue-router';
import createRoute from 'vue-router';
import VuwRouter from 'vue-router';
import Search from '../Views/Search,.vue';
import SearchJewels from '../Views/SearchJewels.vue';
import Caroysel from '../Views/Caroysel.vue';
import Transaction from '../Views/Transaction.vue';
const routes = [
    
         {
    
                path:"/",
                name:'Home',
                component:Home,


        },


        {     
                  path:'/jewels',
                  name:'Jewels',
                  component:Jewels,
              
        },
   
        {     
                 path:'/favourites',
                 name:'Favourites',
                 component:Favourites,
          
        },

  
      
        {     
              path:'/purchase',
              name:'Purchase',
              component:Purchase,

        },

   
        {     
             path:'/email',
             name:'Email',
             component:Email,

        },

        {     
            path:'/jewel/:id/',
            name:'jewel.id',
            component:Jewel,

        },

        
        {     
            path:'/SearchJewels',
            name:'SearchJewels',
            component:SearchJewels,

       },

       {     
        path:'/carousel',
        name:'carousel',
        component:Caroysel,

      },

     {     
          path:'/transaction',
          name:'transaction',
          component:Transaction,

     },




    
    
];

export default routes;