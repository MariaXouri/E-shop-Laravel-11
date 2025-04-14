<template>

    <div class="home">
     <div class="favouritesRoute">
     
        <div class="title">
           <button>     <img  @click="$router.push('/')"  style="position:absolute; left:60px; top:30px; z-index: 1; " src="\images\Jewels (1).png"> </button>

        <img style="z-index: 1; position:absolute; left:1050px; top:-70px; width:570px;"src="\images\Component 1 (5).png"> 
       
        </div>

        <div class="part1" style="position:absolute; left:1700px; top:0px;">
           <a></a>
           
           <!-- <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; font-size:30px;"> <strong>SHOP</strong>  </button>
                <a  @click="$router.push('/favourites')"  style="position:absolute; left:50px; top:200px; " >FAVOURITES</a>
                <a  @click="$router.push('/purchase')"  style="position:absolute; left:50px; top:300px; " >PURCHASE</a>
                <a  style="position:absolute; left:50px; top:400px;">EMAIL US</a>       -->

                <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; font-size:30px; color:black"> <strong>SHOP</strong>  </button>
           <button class="barbtns"  @click="$router.push('/favourites')" style="position:absolute; left:50px; top:200px; color:black;">FAVOURITES</button>
           <button class="barbtns"  @click="$router.push('/purchase')" style="position:absolute; left:50px; top:300px; color:black;">PURCHASE</button>
           <button  class="barbtns"  @click="$router.push('/email')" style="position:absolute; left:50px; top:400px; color:black">EMAIL US</button>      
     
       </div> 
            
       <div  style="position: absolute; left: 1740px; top:10px; "class="logReg">
           <a  style="position: relative; left: 42px;" href="/login"> Login</a>
           <a style="position: relative; left: 57px;" href="/register"> Register</a>
       </div>

       <div class="favourites" style="position:relative; ">
            
         <h1 style="position:absolute; left:700px;  top:150px; color:aquamarine"> <strong>Your favourites</strong></h1>
          <!-- <img  style="position:absolute;  left:390px; width:30px;  top:210px;" "> -->

         <div class="favouritelist" style = "position:absolute; left:220px;  right:50px; top:20px; color:azure;"v-if="favourite">

         <ul style=" display:ruby;" v-for="jewel_1 in jewel_1 ">         
             <a v-for='favourite in jewel_1.favourites' style = "position:relative;  margin-left: 10px; margin-right:80px; left:37px; top:260px; font-size:17px;color:azure;">  

             <tr>  <img style="width:310px; height:200px; margin-bottom: 10px; margin-left:-120px; z-index:1; border-radius: 20px; margin-top: 30px;"v-bind:src='jewel_1.image'></tr> 

                <tr style="position:relative; left:-50px;">  id:
                {{ favourite.jewel_id }} </tr>
                 
              <tr style="position:relative; left:-67px;"> {{ jewel_1.name }} </tr> 
              <tr  style="position:relative; left:-72px; margin-bottom:20px;">{{ jewel_1.price }} euros</tr>   
              
              <!-- <tr> delete</tr> -->
              <!-- <button  v-on:click="deleteFavourite(favourite.id)">     <img  style="position:absolute; left:35px; top:67px; z-index: 1; width:21px; height:20px; " src="\images\images-delete.png"> </button> -->

              <div  style= "display:ruby;  margin-left:3px; margin-top: 10px; color:azure;"  v-if="favourite_all"  v-for="fav in favourite_all" >
                <!-- <tr style="position:relative; left:-50px;">  {{ fav.id }}</tr> -->
                    <!-- <a style="color:azure;">{{ jewel.name }}</a> -->
                        <button  v-on:click="deleteFavourite(fav.id)" ><img style="position:absolute; left:35px; top:67px; z-index: 1; width:21px; height:20px; " src="\images\images-delete.png"> </button>    

              </div>

                 <tr> </tr>
               <tr> </tr>      
             </a>
           </ul>

        </div>

         <!-- <div v-if = "jewel_1">
            <tr v-for="jewel_1 in jewel_1" style="position:relative; left:100px; right: 500px;top:500px; color:azure; padding:1px;">
            {{ jewel_1.favourites }}{{ jewel_1.image }}
            </tr>
        </div>    -->

    </div>
        </div>
    </div>
   
   </template>


   <script setup>
   import router from "../Router";
   import axios from "axios"
   import {ref, onMounted} from 'vue'
   

   
    const favourite = ref('');
    const jewel = ref('');
    const jewel_1 = ref('');
    const favourite_all = ref('');
     
    const fetchText = async ()=> {  
       
       try {
        const response = await axios.get('/api/favourites');
       
        favourite.value = response.data.favourite;
        jewel.value = response.data.jewel;
        jewel_1.value = response.data.jewel_1;
        favourite_all.value = response.data.favourite_all;
       }
       catch (error) {
            console.error("Error fetching message:", error);

        }
      };
      onMounted(() => fetchText())


//       const deleteFavourite = async (id3) =>  {
//         const favourite_dl =  ref('');
//         // const id =  ref('');

//     try {
//     const response = await axios({
//       method: 'delete',
//       url: '/api/jewelsfav/{id3}',
//       data: { id: id3 },
//       headers: {'Content-Type': 'application/json' }
//     });
//     //handle success
//     console.log(response);
//   } catch (err) {
//     //handle error
//     console.log(err);
//   }
// }


const deleteFavourite = async (id3) =>  {
        axios.delete( `/api/favourites/${id3}`, {
          headers: {
            'Content-Type': 'application/json' 
          },
          data: {
            id3: id3
          }
        });
              
      }

</script>

   <style>
   @import "./style.css";
   
   </style>