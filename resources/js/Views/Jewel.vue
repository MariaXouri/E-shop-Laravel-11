<template>

    <div class="home" style="position:absolute; height:2527px; width:1966px;">

      <div class="title">
           
           <img  style="position:absolute; left:60px; top:30px;"  @click="$router.push('/')" src="\images\Jewels (1).png">
           <img style="z-index: 0; position:absolute; left:250px; top:210px;"src="\images\Component 1 (5).png">
           <img style="z-index: 0; position:absolute; left:850px; top:700px; width:800px;"src="\images\Component 2 (2).png">
           <img style="z-index: 1; position:absolute; left:950px; top:-70px; width:570px;"src="\images\Component 2 (2).png">
           <img style="z-index: 1; position:absolute; left:-20px; top:470px; width:210px;"src="\images\Component 3 (1).png">
           <img style="z-index: 1; position:absolute; left:1520px; top:270px; width:170px;"src="\images\Component 3 (1).png">
           <img style="z-index: 1; position:absolute; left:-150px; top:870px; width:700px;"src="\images\Component 1 (5).png">
           <img style="z-index: 1; position:absolute; left:-20px; top:1470px; width:210px;"src="\images\Component 3 (1).png">
           <img style="z-index: 1; position:absolute; left:820px; top:1370px; width:1010px;"src="\images\Component 1 (5).png">
           <img style="z-index: 1; position:absolute; left:-40px; top:1770px; width:1010px;"src="\images\Component 2 (2).png">
   
       </div> 

       <div class="part1" style="position:absolute; height:2527px;  left:1714px; top:20px;">
           <a></a>
           <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; font-size:30px; color:black"> <strong>SHOP</strong>  </button>
           <button class="barbtns"  @click="$router.push('/favourites')" style="position:absolute; left:50px; top:200px; color:black;">FAVOURITES</button>
           <button class="barbtns"  @click="$router.push('/purchase')" style="position:absolute; left:50px; top:300px; color:black;">PURCHASE</button>
           <button  class="barbtns"  @click="$router.push('/email')" style="position:absolute; left:50px; top:400px; color:black">EMAIL US</button>      
        </div> 

        <div  style="position: absolute; left: 1750px; top:30px; "class="logReg">
           <a style="position: relative; left: 42px;" href="/login"> Login</a>
           <a style="position: relative; left: 57px;" href="/register"> Register</a>
        </div>


        <div class="ProductDetails" style="position:absolute; top:270px; left: 170px; color:azure; font-size: 30px; background-color: black;
        z-index: 1;">
        
          <!-- <h1 style="position:absolute; left:900px; padding-bottom: 10px; padding-left: 20px; background-color: black;"> Product name</h1> -->
          <!-- <h1 style="position:absolute; left:900px; top:100px; padding-bottom: 10px; padding-left: 20px; background-color: black; font-size: 20px;;"> Price</h1> -->
          <!-- <h1 style="position:absolute; left:900px; top:130px; padding-bottom: 10px; padding-left: 20px; background-color: black; font-size: 20px;;"> Material</h1> -->
          <!-- <h1 style="position:absolute; left:900px; top:160px; padding-bottom: 10px; padding-left: 20px; background-color: black; font-size: 20px;;"> Description</h1> -->
          <button style="position:relative; left:720px; top:300px; padding-bottom: 10px; padding-left: 85px; padding-top: 40px; background-color: black; font-size: 20px; color:aqua;"> Add to card</button>
         <!-- <img src="sdfafe" style="position:relative; left:500px;"> -->
         <!-- <h1 style="position:absolute; left:900px; top:250px; padding-bottom: 10px; padding-left: 20px; background-color: black;"> {{ detail }} </h1> -->
         <div>
        
          <!-- <h1> Id: {{ id }}</h1> -->
          <!-- <h1> Name: {{ jewels.name }}</h1>  -->
          <!-- <h1> details: {{ detail3 }}</h1>
          <h1> jewels: {{ jewels }}</h1> -->
        
          <div class="script" style="position:relative; ">
            <div v-for="jl in jewels" >
              <h1 style="position:relative; left:800px; top:10px; background-color: black; width:180px; font-size:35px; color:darkorange;">{{ jl.name }}</h1>
              <h1 style="position:relative; left:800px; top:1px; background-color: black;  width:180px;  font-size: 18px; ">{{ jl.price }} €  </h1>
              <tr>  <img style="width:550px; height:520px; position:relative; left:230px; top:-180px; background-color: black; border-width:10px; border-color:black; 
              clip-path: polygon(10% 10%, 90% 10%, 90% 90%, 10% 90%); "v-bind:src='jl.image'></tr> 
            </div>

            <div v-for="dl in detail">
                 <!-- <a  v-for="u in dl.material.split(' ')" style="position:relative; left:800px; top:-460px; font-size:20px; background-color: black;">{{ u }}</a> -->
                 <!-- <a  style="position:relative; left:100px; top:-460px; font-size:20px; background-color: black;"> {{ materialfunc.join(',')}} </a>
                -->
                  <a  style="position:relative; left:800px; top:-460px; font-size:20px; background-color: black; padding-bottom:1px; padding-right: 100px; padding-top: 10px;"> {{ materialString(dl.material)}} </a>
               
                 <!-- <a  style="position:relative; left:800px; top:-460px; font-size:20px; background-color: black;"> {{ dl.material }} </a> -->
                <!-- <a>{{ materialItem(dl.material) }}</a> -->
              <h1 style="position:relative; left:800px; top:-467px; font-size:20px; background-color: black; padding-bottom:50px; "> {{ dl.description }} </h1>
            </div>
          </div>
          <!-- {{ jewels }}
          {{ detail }}
          {{ $route.params.id }} -->

            <!-- <a>{{ str }}</a> -->
          
            <!-- <a>{{ detail.join(',') }}</a> -->
          <!-- <button @click="log">{{ msg }}</button> -->
           </div> 
          </div>
        </div>
   </template>

   

    <script setup >

      import axios from 'axios';
      import {ref, onMounted} from 'vue'
     import router from '../Router'
      import { watch } from 'vue'
      import VueRouter from "vue-router";
      // import router from "./Router/index";
      import { useRoute } from 'vue2-helpers/vue-router';
    

        const route = useRoute();
     
      

        const jewels = ref({});
        const detail = ref({});
        const id = route.params.id;
        

        const fetchText = async ()=> {  
    
                try {
                const response = await axios.get(`/api/jewel/${id}`);
                
                jewels.value = response.data.jewels;
                detail.value = response.data.detail;
                return response.data.detail;
                // this.detail.material = JSON.parse(detail.material);
                // let arr1 = detail.material;
                // let str1 = arr1.join('');
                }

                catch (error) {
                    console.error("Error fetching message:", error);

                }
               
          };
          onMounted(() => fetchText())

        
       

          function materialfunc() {
            // return this.jewels.material.join(',')
            let arr1 = this.detail.material;
            let str1 = arr1.join(',');
          }
          
            let arr = ['Hello', 'world'];
            let str = arr.join(' ');


            // let arr2 = ['dfsaef'];
            // let str2 = arr2.join(' ');


          const materialItem = function (array) {
        
          let myArr = array;
          // let myStr = myArr.join(',');
          array.join(',');
          // myArray.reverse();

          return array.join('');
      
        };

        // const materialString = function (array) {
        //   let materialStr = array.toString();
        //   let parts = materialStr.split("[" );
        //   return parts.join("");
        // }


        const materialString = function (array) {

          let materialStr = array.toString();
          let parts = materialStr.split("[" );
          let parts2 = parts[1].split("]");
          
          let parts3= parts2[0].split('"')
      
          return parts3.join(" ");
    
        }














       
          // jewels.id = $route.params.id;
        
    //     const getparams = async(id) => {
    //        var id = '{{$jewels->id}}';
    //        var jewel_id = '{{$jewels->id}}';

    //       try {
    //         const response = await axios({
    //           method:'get',
    //           url:'/api/jewel/{id}',
    //           data: {
    //             id: $route.params.id,
    //             jewel_id:id }
    //         });
    //         console.log(response);
    //       } catch (err) {
    // //handle error
    //         console.log(err);
    //        }
    //     }

      
      // export default {
      // setup() {
      //   const count = ref(0)
      //   const id = ref('');
      //   const fetchText = async ()=> {  

      //     try {
      //       const response = await axios.get('/api/jewel/{id}');
      //       id.value = response.data.id; 
      //       this.id = this.$route.params.id;
      //     }
      //     catch (error) {
      //       console.error("Error fetching message:", error);
      //     }
      //   }
      //   onMounted(() => fetchText())
        
      // },
      //   data() {
      //     return {
      //         // jewels:''  
      //     };
      //   },
      //   created() {
      
      //   this.id = this.$route.params.id;
        
        
      //   }

      // }
    

    </script> 




   

   <style>
   @import "./style.css";   
   </style>