<template>
    <div class="home">
      <div class="title">
           <button>     <img  @click="$router.push('/')"  style="position:absolute; left:60px; top:30px; z-index: 1; " src="\images\Jewels (1).png"> </button>

        <img style="z-index: 1; position:absolute; left:1050px; top:-70px; width:570px;"src="\images\Component 1 (5).png"> 
        <img style="z-index: 1; position:absolute; left:-150px; top:470px; width:570px;"src="\images\Component 1 (5).png"> 

       
        </div>

        <div class="part1" style="position:absolute; left:1700px; top:0px;">
           <a></a>
           <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; font-size:30px;"> <strong>SHOP</strong>  </button>
           <button class="barbtns"  @click="$router.push('/favourites')" style="position:absolute; left:50px; top:200px; color:black;">FAVOURITES</button>
           <button class="barbtns"  @click="$router.push('/purchase')" style="position:absolute; left:50px; top:300px; color:black;">PURCHASE</button>
           <button class="barbtns"  @click="$router.push('/email')" style="position:absolute; left:50px; top:400px; color:black;">EMAIL US</button>
     
        </div> 
            
        <div  style="position: absolute; left: 1740px; top:10px; "class="logReg">
           <a style="position: relative; left: 42px;" href="/login"> Login</a>
           <a style="position: relative; left: 57px;" href="/register"> Register</a>
        </div>


        <div class="emailform" >
         <form  @submit="submit"  style="color:azure;">
         
             <a style="position:absolute; left:745px; top:215px; font-size: 30px;">
              Email us </a>
          <div  class="form-group" style="position:absolute; left:507px; top:340px;">
            <a for="exampleEmail" style="position:relative; left:50px; top:-40px;" >Your Email</a>
                  <input type="text"  style="position:absolute; left:50px; top:-10px; width:500px; height:30px; border-radius: 10px;"class="form" id="exampleEmail"
                   placeholder="Your Email" required name="email" 
                   v-model= 'headers' > </input>
            </div>

            <div class="form-group"style="position:absolute; left:507px; top:398px;">
            <a for="subject" style="position:relative; left:50px; top:-10px;">Subject</a>
                  <input type="text"  style="position:absolute; left:50px; top:20px; width:500px; height:30px;  border-radius: 10px; color:black;" class="form" id="subject"
                   placeholder="Subject" required name="subject" 
                   v-model='subject' > </input>
            </div>

            <div class="form-group" style="position:absolute; left:507px; top:456px;">
            <a for="body" style="position:relative; left:50px; top:20px;">Body</a>
                  <textarea type="text"  style="position:absolute; left:50px; top:50px; width:500px; height: 100px; color:black; border-radius: 10px; " class="form-area" id="body"
                   placeholder="Body" required name="body" 
                   v-model='body'>  </textarea>
            </div>
           
          
            <button  style="position:absolute; left:1200px; top:640px;" @submit="submit">Submit</button>
            </form>
     
        </div>

    </div>

</template>



<script>


export default({
       
       data(){ return {
           headers: '', // initialise this to an empty string
           subject: '', // same thing
           body:'',
           a:'',
           errors:[]
       }},
   
       methods: {
           submit() {
               // make ajax request and pass the data. I'm not certain how to do it with axios but something along the lines of this
                   axios.post('/api/email', {
                   headers: this.headers,
                   subject: this.subject,
                   body:this.body,
                   a:this.a
               });
           },
           checkForm: function (e) {
               this.errors = [];
   
           if (!this.headers) {
           this.errors.push('Email required.');
         } else if (!this.validEmail(this.headers)) {
           this.errors.push('Valid email required.');
         }
         e.preventDefault();
       },
       validEmail: function (headers) {
         var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         return re.test(headers);
       }
   
       }
   }); 
   


</script>
<!-- <script setup>
import { ref } from 'vue';
const email = ref('');
const headers = ref('');

const subject = ref('');

const body = ref('');



const submit = async () => {
  // const headers = document.querySelector('input[name="headers"]').value


  try{
   const response = await axios ({
    method: 'post',
    url:'/api/email',
    data:{
      headers:'' ,
      subject:'',
      body:''
    },
  //   headers:{
  //     'Content-Type': 'application/json'
  //  }
  });
  console.log(response);
  }catch(err){
    console.log(err);
  }
}


</script> -->