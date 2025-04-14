<template>

    <div class="home">
   
      <div class="title">
          <!-- @csrf -->
          <form id="logout-form" action="/logout" method="POST" style="display: none;">
            <!-- <input type="hidden" name="_token" :value="csrf"> -->
          </form>
          <button> <img  @click="$router.push('/')" style="position:absolute; left:60px; top:30px; z-index: 1;" src="\images\Jewels (1).png"> </button> 
   
       </div>

       <div class="ais-InstantSearch ">
        <ais-instant-search :search-client="searchClient" index-name="jewels" >
          <ais-search-box style="width:275px;  position:absolute; left:1315px; " placeholder = "Search jewels"></ais-search-box>
          <!-- <ais-hits style="width:1300px; color:black">
            <template v-slot:item="{ item }">
            <ais-highlight attribute="name" :hit="item"></ais-highlight>
             <h1> - </h1>
           <ais-highlight attribute="description" :hit="item"></ais-highlight>
         </template>
          </ais-hits> -->
         </ais-instant-search>
       </div>

     

       <div class="part1" style="position:absolute; left:1698.5px; height:3048.5px; z-index: 1; top:0px;">
           <a></a>
           <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; font-size:30px; color:black"> <strong>SHOP</strong>  </button>
           <button class="barbtns"  @click="$router.push('/favourites')" style="position:absolute; left:50px; top:200px; color:black;">FAVOURITES</button>
           <button class="barbtns"  @click="$router.push('/purchase')" style="position:absolute; left:50px; top:300px; color:black;">PURCHASE</button>
           <button  class="barbtns"  @click="$router.push('/email')" style="position:absolute; left:50px; top:400px; color:black">EMAIL US</button>      
        </div> 
        <div  style="position: absolute; left: 1740px; top:10px; "class="logReg">
           <a style="position: relative; left: 42px;" href="/login"> Login</a>
           <a style="position: relative; left: 57px;" href="/register"> Register</a>
        </div>

   
       <div class="shop" style="position:absolute; margin-left:-10px; margin-right: 100px;  top:300px;">
         <h1 style="position:absolute; left:750px;  top:-130px; font-size:30px; color:azure; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif "> <strong>Products</strong></h1>
            <div class="jewelName" style="display:ruby; margin-left:1px; margin-top: 10px;"  v-if="jewel">                        
                <div v-for="jl in jewel" :key=jl.jewel style=" position:relative; left:10px; ">
                   <div v-for="dt in jl.details">
                    <!-- <div v-for="detail in detail" style=" position:relative; left:10px; "> -->
                    <img   @click="$router.push({name:'jewel.id', params:{id:jl.id, name:jl.name, image:jl.image, material:jl.material, description:jl.description, details:jl.details, material:dt.material, description2:dt.description, price:jl.price}})" style=" width:360px; height:400px; margin-bottom: 10px; margin-left:130px; z-index:1;" v-bind:src='jl.image'>
                        </div>
                        <!-- <button  @click="$router.push('/jewels/${{jl.id}}')" style="position:absolute; left:300px; top:-40px; z-index: 1; color:azure; " > fse</button>  -->

                       <pre style="position:relative; margin-left:253px; margin-bottom: 1px;">{{jl.name}} </pre> 
                  
                    <button  v-on:click="addToFavourites(jl.id)" style="position:relative; top:-22px; height:30px; margin-top: -27px; margin-left:170px; z-index: 1; color:azure;">
                         <img  style="width:35px; height:27px; "src="\images\Ellipse 1 (1).png"> </button> 

                         <pre style="position:relative; margin-left:167px; margin-bottom: 1px; margin-top: -24px; "> {{jl.description}}  </pre> 
                         <pre style="position:relative; margin-left:253px; margin-bottom: 50px;">{{jl.price}} euros  </pre>                                         
                      </div>             
                    </div>                    
                  </div>

                 <div  style= "display:ruby;  margin-left:3px; margin-top: 10px; color:azure;"  v-if="jewel"  v-for="jewel in jewel" >
                    <!-- <a style="color:azure;">{{ jewel.name }}</a> -->
                        <button  v-on:click="addToPurchase(jewel.id)"   style=" position: relative; top: 790px; margin-left:373px; margin-bottom:530px; left:-129px; color:aqua;"> Add to Purchase</button>    

                 </div>

                 <div class="footer" style="position:absolute; top:2890px; left:650px; color:azure; z-index: 1; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
                    <a style="position:absolute; left:-650px; top:-40px; width:1903px; height:110px; "></a>
                    <a style="position:relative; margin-left:-565px; "><strong> CONTACT </strong></a>
                    <a style="position:relative; margin-left:205px;"><strong> SOCIAL MEDIA </strong></a>
                    <pre style="position:relative; margin-left:-575px;"> Email jewels@gmail.com</pre>
                    <a style="position:absolute; margin-left:-287px; margin-top:-25px; "> Instagram</a>
      
        <pre style="position:absolute; margin-left:-900px; left:250px; top:120px; background-color: black; padding-left: 844px; padding-right: 700px; padding-top:10px; top:50px; padding-bottom: 75px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Copyright 2025 Jewels</pre>
      

    </div>
                </div>
            
            </template>



<script setup>

import router from "../Router";
import axios from "axios"
import {ref, onMounted} from 'vue'

// import { watch } from 'vue'
// import { router } from 'vue-router'

 const jewel =  ref('');
 const detail = ref('');
 const results = ref('');
 const search = ref('');
 const jewels = ref('');
//  watch(
//   () => router.params.id,
//   (newId, oldId) => {
//     // react to route changes...
//   }
// )

 const fetchText = async ()=> {  
    
    try {
     const response = await axios.get('/api/jewels');
     jewel.value = response.data.jewel;
     detail.value = response.data.detail;
     jewels.value = response.data.jewels;
     
    }
    catch (error) {
         console.error("Error fetching message:", error);

     }
   };
   onMounted(() => fetchText())




   const searchJewels = async ()=> {  
    
    try {
     const response = await axios.get('/api/jewels/search');
        results.value = response.data.results;
        search.value = response.data.search;
    }
    catch (error) {
         console.error("Error fetching message:", error);

     }
   };
   onMounted(() => fetchText())






   const addToFavourites = async (id1) =>  {
        const jewel =  ref('');
        // const id =  ref('');

    try {
    const response = await axios({
      method: 'post',
      url: '/api/jewelsfav/{id1}',
      data: { jewel_id: id1 },
      headers: {'Content-Type': 'application/json' }
    });
    //handle success
    console.log(response);
  } catch (err) {
    //handle error
    console.log(err);
  }
}


    const addToPurchase = async (id) =>  {
        const jewel =  ref('');
        // const id =  ref('');

    try {
    const response = await axios({
      method: 'post',
      url: '/api/jewels/{id}',
      data: { jewel_id: id },
      headers: {'Content-Type': 'application/json' }
    });
    //handle success
    console.log(response);
  } catch (err) {
    //handle error
    console.log(err);
  }
}


const searchbar = async() => {
    try{
        const response = await axios({
        method: 'get',
        url: '/api/jewels/search',
        params: { query: this.query },
        });
        console.log(response);
    } catch (err) {
    //handle error
    console.log(err);
  }
}




</script>

<script>

     export default {
       components: {
        
       },
        // data: () => ({
        //     csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        //   }),
    
    data() {
        
       return {
        query: null,
        results: [],
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
      };
    },
    watch: {
    query(after, before) {
        this.searchJewels();
     }
    },

    methods: {
    searchJewels() {
        axios.get('jewels/search', { params: { query: this.query } })
        .then(response => this.results = response.data)
        .catch(error => {});
          }
        }
    }

</script>

<script>
import { liteClient as algoliasearch } from 'algoliasearch/lite';
import 'instantsearch.css/themes/algolia-min.css';
// import 'instantsearch.css/themes/reset.css';
 import 'instantsearch.css/themes/satellite.css';



export default {
  data() {
    return {
      searchClient: algoliasearch(
        '9H3BBUZUOB',
        '7e43545f1117b38c121300e48e3f8f34'
      ),
    };
  },
};


</script>



<style>
   @import "./style.css";
   @import "./satelite.css";
   body {
  font-family: sans-serif;
  padding: 1em;
}

.ais-Hits-list {
  margin-top: 0;
  margin-bottom: 1em;
}

.ais-InstantSearch {
  display: grid;
  grid-template-columns: 1fr 4fr;
  grid-gap: 1em;
  color:aqua;
}

.ais-Hits-item img {
  margin-right: 1em;
}
.hit-name {
  margin-bottom: 0.5em;
}
.hit-description {
  color: #888;
  font-size: 0.8em;
  margin-bottom: 0.5em;
}

</style>