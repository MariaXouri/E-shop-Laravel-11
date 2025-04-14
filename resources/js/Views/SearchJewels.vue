
<template>
  <div>
  <h1 style="color:purple; position:absolute; left:100px; top:300px; font-size:30px;">
    </h1>


  {{ jewels }}


  <ais-instant-search :search-client="searchClient" index-name="jewels">
    <ais-search-box />
    <ais-hightlight/>
    <ais-hits>
      <template v-slot:item="{ item }">
        <!-- <h2>{{ item.name }} </h2>
        <h2>{{ item.description }} </h2>
        <h2>{{ item.price }} </h2> -->
        <ais-highlight attribute="name" :hit="item"></ais-highlight>
        <h1> - </h1>
        <ais-highlight attribute="description" :hit="item"></ais-highlight>
      </template>
     </ais-hits>
  </ais-instant-search>

  <div>
 
  </div>

 </div>
</template>




<script setup>
import router from "../Router";
import axios from "axios"
import {ref, onMounted} from 'vue'
import { liteClient as algoliasearch } from 'algoliasearch/lite';


const jewels = ref('');

const fetchText = async ()=> {  
    
    try {
     const response = await axios.get('/api/SearchJewels');
     jewels.value = response.data.jewels;
     
    }
    catch (error) {
         console.error("Error fetching message:", error);

     }
   };
   onMounted(() => fetchText())


//     function dataToAlgoliaObject(data_points){
//   var algoliaObjects = [];
//   for (var i = 0; i < data_points.length; i++) {
//     var data_point = data_points[i];
//     var algoliaObject = {
//         objectID: data_point.objectID,
//         name: data_point.name,
//         rating: data_point.rating,
//         image_path: data_point.image_path,
//         alternative_name: data_point.alternative_name
//       };
//     algoliaObjects.push(algoliaObject);
//   }

//   return algoliaObjects;
// }

// function indexData(data_url){
//   return axios.get(data_url,{})
//   .then((response) => {
//       return dataToAlgoliaObject(response.data)
//     })
//   .then(async (response) => {
//      await sendDataToAlgolia(response);
//      return;
//   })
//   .then(async () => {
//      await configureAlgoliaIndex();
//      return;
//   })
//   .then(function(response){
//     return;
//   })
//   .catch(function(error) {
//       console.warn(error)
//   })
// }


// const algoliaClient = algoliasearch('9H3BBUZUOB','7e43545f1117b38c121300e48e3f8f34');
// // const algoliaIndex = searchClient.initIndex("jewels");  

//  function sendDataToAlgolia(algoliaObjects){
//    return new Promise((resolve, reject) => {
// //     algoliaIndex.addObjects(algoliaObjects, (err, content) => {
// //       if(err) reject(err);
// //       resolve();
// //     })
//   });
//  }

//  async function configureAlgoliaIndex(){
//   algoliaIndex.setSettings({
//     searchableAttributes: [
//       'name'
//     ],
//     attributesToHighlight: [
//       'name'
//     ],
//     customRanking: [
//       'desc(rating)'
//     ],
//     attributesToRetrieve: [
//       'name', 
//       'description',
//       'price'
//     ]
//   });
// }

</script>


<script>
import { liteClient as algoliasearch } from 'algoliasearch/lite';
import 'instantsearch.css/themes/algolia-min.css';

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

//  function dataToAlgoliaObject(data_points){
//   var algoliaObjects = [];
//   for (var i = 0; i < data_points.length; i++) {
//     var data_point = data_points[i];
//     var algoliaObject = {
//         objectID: data_point.objectID,
//         name: data_point.name,
//         rating: data_point.rating,
//         image_path: data_point.image_path,
//         alternative_name: data_point.alternative_name
//       };
//     algoliaObjects.push(algoliaObject);
//   }

//   return algoliaObjects;
// }

// function indexData(data_url){
//   return axios.get(data_url,{})
//   .then((response) => {
//       return dataToAlgoliaObject(response.data)
//     })
//   .then(async (response) => {
//      await sendDataToAlgolia(response);
//      return;
//   })
//   .then(function(response){
//     return;
//   })
//   .catch(function(error) {
//       console.warn(error)
//   })
// }


// const algoliaClient = algoliasearch('9H3BBUZUOB','7e43545f1117b38c121300e48e3f8f34');
// const algoliaIndex = algoliaClient.initIndex('jewels');  

// function sendDataToAlgolia(algoliaObjects){
//   return new Promise((resolve, reject) => {
//     algoliaIndex.addObjects(algoliaObjects, (err, content) => {
//       if(err) reject(err);
//       resolve();
//     })
//   });
// }

</script>

<style>
body {
  font-family: sans-serif;
  padding: 1em;
}
</style>