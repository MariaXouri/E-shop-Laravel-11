<template>

    <div class="home">
   
        <div class="title">
                <img  style="position:absolute; left:60px; top:30px;" src="\images\Jewels (1).png">
        </div>

        <!-- <div>
            <h1 style="color:azure;">
                Favourites
            </h1>
        </div> -->

        <div class="part1" style="position:absolute; left:1654px; top:0px;">
           <a></a>
           
           <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; font-size:30px;"> <strong>SHOP</strong>  </button>
                <a style="position:absolute; left:50px; top:200px;">FAVOURITES</a>
                <a style="position:absolute; left:50px; top:300px;">PURCHASE</a>
                <a  style="position:absolute; left:50px; top:400px;">EMAIL US</a>      
       </div> 
            
       <div  style="position: absolute; left: 1749px; top:10px; "class="logReg">
           <a href="/login"> Login</a>
           <a style="position: relative; left: 10px;" href="/register"> Register</a>
       </div>

       <div>
                        <form @submit="submit">
                            <input placeholder="Put your id here" style="position:absolute; left:585px; top:217.5px;"type="number" v-model="jewel_id">
                            <button style="position:relative; margin-left:227px; top:250px; left:570px; color:aqua;"  @sumbit="submit" >Add to favourites</button>
                        </form>
                    </div>
       
    </div>
   
   </template>

   <script>
   import router from "../Router";
   import axios from "axios"
   import {ref, onMounted} from 'vue'
   
   export default ({
       
       setup(){
        
        const favourite=ref('');
           const jewel_id=ref('');
           return jewel_id,favourite
         },
 
          name: "App",
           data(){  
               return {
                 jewel_id:'', 
                 favourite:'',
               
               
                 errors:[]
                }},
 
             methods: {
                 submit() {
               
                     axios.post('/api/favourite', {
                     jewel_id: this.jewel_id,
                    favourite: this.favourite,
                    
                     
                 });
             },
 
               // async getAnswer() {   
               //   const { data } = await axios.get("api/reservation");
               // this.reservation_list = data;
               
               // this.rlngth=data.length;
                 
               //   async getAnswer() {   
               //    const { data } = await axios.get("api/reservation");
               //   this.reservation_list = data;
                 
               // this.rlngth=data.length;
                 
   //        //  },
   //  },
 
 
   //      beforeMount() {
   //           this.getAnswer();
   //         },
             
       }
 
     });
      

</script>

   <style>
   @import "./style.css";
   
   </style>