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
            
       <div  style="position: absolute; left: 1709px; top:10px; "class="logReg">
           <a  style="position: relative; left: 42px;" href="/login"> Login</a>
           <a style="position: relative; left: 57px;" href="/register"> Register</a>
       </div>

       <div class="transactionDetails" style="position:relative; left:100px; ">
        
         <h1 style="position:absolute; left:620px;  top:150px; color:aquamarine; font-size:27px;"> <strong>Complete transaction</strong></h1>

         <h1 style="position:absolute; left:100px; top:250px; font-size: 21px; color:aliceblue;">Name</h1>
         <input style="position:absolute; left:100px; top:290px; font-size: 21px; color:aliceblue; width: 450px; height:26px; border-radius: 3px; color:black;">

         <h1 style="position:absolute; left:100px; top:350px; font-size: 21px; color:aliceblue;">Phone</h1>
         <input style="position:absolute; left:100px; top:390px; font-size: 21px; color:aliceblue; width: 450px; height:26px; border-radius: 3px; color:black;">
         

         <h1 style="position:absolute; left:100px; top:450px; font-size: 21px; color:aliceblue;">Address</h1>
         <input style="position:absolute; left:100px; top:490px; font-size: 21px; color:aliceblue; width: 450px; height:26px; border-radius: 3px; color:black;">
         


         <h1 style="position:absolute; left:100px; top:550px; font-size: 21px; color:aliceblue;">Means of transaction</h1>
         <!-- <select style="position:absolute; left:100px; top:590px; font-size: 21px; color:aliceblue; width: 250px; height:26px; border-radius: 3px; color:black;" >  </select> -->
         <select style="position:absolute; left:100px; top:590px; font-size: 21px; color:aliceblue; width: 250px; height:26px; border-radius: 3px; color:black;">
            <option value="Cash">Cash</option>
            <option value="MasterCard">MasterCard</option>
        
         </select>


         
         <h1 style="position:absolute; left:100px; top:650px; font-size: 21px; color:aliceblue;">Total cost</h1>
         <!-- <h1 style="position:absolute; left:100px; top:690px; font-size: 20px; color:aliceblue; right:500px;"> {{jewel_price}} euros</h1> -->
         
         <!-- <a style="position:relative; left:100px; top:1990px; font-size: 20px; color:aliceblue; right:500px;" v-for="jlp in jewel_price"> {{ jlp.price }}</a> -->

         <!-- <h1 style="position:absolute; left:100px; top:2190px; font-size: 20px; color:aliceblue; right:500px;"> {{purchases}} euros</h1>

         <h1 style="position:absolute; left:100px; top:2590px; font-size: 20px; color:aliceblue; right:500px;"> {{total}} euros</h1> -->

         <div  style="position:absolute; left:100px; top:2690px; font-size: 20px; color:aliceblue; right:500px;">
    <h2 class="text-xl font-bold mb-2">My Cart</h2>

  </div>




         <h1 style="position:absolute; left:100px; top:750px; font-size: 21px; color:aliceblue;">Card number</h1>
         <input style="position:absolute; left:100px; top:790px; font-size: 21px; color:aliceblue; width: 450px; height:26px; border-radius: 3px; color:black;">
        
         <button style="position:absolute; left:540px; top:770px; font-size: 21px; color:aliceblue; width:100px; height:70px; border-radius: 35px; color:aqua;">Pay</button>

         <!-- <h1 style="position:absolute; left:100px; top:2790px; font-size: 20px; color:aliceblue; right:500px;"> {{total}} euros</h1> -->

     </div>

     <div style="position:absolute; left:200px; top:990px; font-size: 20px; color:aliceblue; right:500px;">
        <li v-for="item in items" :key="item.id">

  ${{ Number(item.jewel.price).toFixed(2) }}
 
</li>
<p>Total: ${{ Number(total).toFixed(2) }}</p>

    <!-- <h2>🛒 My Cart </h2>
    <ul v-if="items.length">
      <li v-for="item in items" :key="item.id">
         ${{ item.jewel.price.toFixed(2) }}
      </li>
    </ul>
    <p v-if="total !== null">Total: ${{ total.toFixed(2) }}</p>
    <p v-else>Loading...</p> -->
  </div>
       
          <!-- <img  style="position:absolute;  left:390px; width:30px;  top:210px;" "> -->
<!-- 
         <div class="favouritelist" style="position:absolute;left:220px; right:50px; top:20px;  color:azure;"v-if="tbp">
            <ul style=" display:ruby;" v-for="jewel_1 in jewel_1 " >
            <a v-for='tbp in jewel_1.tobepurchased' style = "position:relative; font-size: 17px;  margin-left: 14px; margin-right:80px; left:37px; top:260px;color:azure;">     
          <tr> <img style="width:310px; height:200px; margin-bottom: 10px; margin-left:-120px; z-index:1; border-radius: 20px; margin-top: 30px;" v-bind:src='jewel_1.image'> </tr>
                <tr style="position:relative; left:-52px;">  id:  {{ tbp.jewel_id }} </tr>
               <br>  {{ tbp.jewel_id }} </br>  -->
              <!-- <tr style="position:relative; left:-70px;"> {{ jewel_1.name }} </tr> 
              <tr style="position:relative; left:-73px; margin-bottom:20px;">{{ jewel_1.price }} euros</tr>
         
            <tr> </tr>
            <tr> </tr>
           
        </a>
    </ul>
</div>  -->

         <!-- <div v-if = "jewel_1">
            <tr v-for="jewel_1 in jewel_1" style="position:relative; left:100px; right: 500px;top:500px; color:azure; padding:1px;">
            {{ jewel_1.favourites }}{{ jewel_1.image }}
            </tr>
        </div>    -->


        
    </div>
   
   </template>


   <script setup>
   import router from "../Router";
   import axios from "axios"
   import {ref, onMounted} from 'vue'
   


  
   const items = ref([])
   const total = ref(null)


     
    const fetchText = async ()=> {  
       
       try {
        const res = await axios.get('/api/transaction', {
            headers: {
        Authorization: `Bearer ${localStorage.getItem('token')}`
            }
        })
       
        items.value = res.data.items
        total.value = res.data.total
        
        items.value.forEach((item, index) => {
      console.log(`Item ${index}:`, item)
      console.log(`  Jewel:`, item.jewel)
      console.log(`  Price:`, item.jewel?.price, 'Type:', typeof item.jewel?.price)
    })
       
       }
       catch (error) {
            console.error("Error fetching message:", error);

        }
      };
      onMounted(() => fetchText())


      

</script>

   <style>
   @import "./style.css";
   
   </style>