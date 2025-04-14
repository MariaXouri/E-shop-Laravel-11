<template>

    <div class="home">
   
        <div class="title">
           <button>     <img  @click="$router.push('/')"  style="position:absolute; left:60px; top:30px; z-index: 1; " src="\images\Jewels (1).png"> </button>
           <img style="z-index: 1; position:absolute; left:1050px; top:-70px; width:570px;"src="\images\Component 2 (2).png"> 
           <img style="z-index: 1; position:absolute; left:-500px; top:700px; width:570px;"src="\images\Component 2 (2).png"> 

       
        </div>

        <div class="part1" style="position:absolute; left:1700px; top:0px;">
           <a></a>
           
           <!-- <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; font-size:30px;"> <strong>SHOP</strong>  </button>
                <a  @click="$router.push('/favourites')"  style="position:absolute; left:50px; top:200px; " >FAVOURITES</a>
                <a style="position:absolute; left:50px; top:300px;">PURCHASE</a>
                <a  style="position:absolute; left:50px; top:400px;">EMAIL US</a>      
      -->
      <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; font-size:30px; color:black"> <strong>SHOP</strong>  </button>
           <button class="barbtns"  @click="$router.push('/favourites')" style="position:absolute; left:50px; top:200px; color:black;">FAVOURITES</button>
           <button class="barbtns"  style="position:absolute; left:50px; top:300px; color:black;">PURCHASE</button>
           <button  class="barbtns"   @click="$router.push('/email')" style="position:absolute; left:50px; top:400px; color:black;" >EMAIL US</button>      
     
       </div> 
            
       <div  style="position: absolute; left: 1740px; top:10px; "class="logReg">
           <a style="position: relative; left: 42px;"  href="/login"> Login</a>
           <a style="position: relative; left: 57px;" href="/register"> Register</a>
       </div>

       <div class="favourites" style="position:relative; ">
            
         <h1 style="position:absolute; left:740px;  top:150px; color:aquamarine;"> <strong>Purchase</strong></h1>

                
         <button   @click="$router.push('/transaction')" style="position:absolute; left:1340px;  top:210px; color:azure; width:150px;  height:50px; z-index: 1;" > <strong> Complete order </strong> </button>

      <button  @click="$router.push('/transaction')">  <img style="width:17px; position:absolute; left:1480px; top:227px;" src="\images\imagesarrow.png"> </button>
      
          <!-- <img  style="position:absolute;  left:390px; width:30px;  top:210px;" "> -->

         <div class="favouritelist" style="position:absolute;left:220px; right:50px; top:20px;  color:azure;"v-if="tbp">

            <ul style=" display:ruby;" v-for="jewel_1 in jewel_1 " >
            <a v-for='tbp in jewel_1.tobepurchased' style = "position:relative; font-size: 17px;  margin-left: 14px; margin-right:80px; left:37px; top:260px;color:azure;">     
          <tr> <img style="width:310px; height:200px; margin-bottom: 10px; margin-left:-120px; z-index:1; border-radius: 20px; margin-top: 30px;" v-bind:src='jewel_1.image'> </tr>
                <tr style="position:relative; left:-52px;">  id:  {{ tbp.jewel_id }} </tr>
                <!-- <br>  {{ tbp.jewel_id }} </br>  -->
                <tr style="position:relative; left:-70px;"> {{ jewel_1.name }} </tr> 
                <tr style="position:relative; left:-73px; margin-bottom:20px;">{{ jewel_1.price }} euros</tr>    
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
   
   </template>


   <script setup>
   import router from "../Router";
   import axios from "axios"
   import {ref, onMounted} from 'vue'
   

   
    const tbp = ref('');
    const jewel = ref('');
    const jewel_1 = ref('');
    const fetchText = async ()=> {  
       
       try {
        const response = await axios.get('/api/purchase');
       
        tbp.value = response.data.tbp;
        jewel.value = response.data.jewel;
        jewel_1.value = response.data.jewel_1;

       }
       catch (error) {
            console.error("Error fetching message:", error);

        }
      };
      onMounted(() => fetchText())

      const deletePurchase = async (id4) =>  {
        axios.delete( `/api/purchase/${id4}`, {
          headers: {
            'Content-Type': 'application/json' 
          },
          data: {
            id4: id4
          }
        });
              
      }
      

</script>

   <style>
   @import "./style.css";
   
   </style>