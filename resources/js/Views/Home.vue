<template>

 <div class="home">

    <div class="title">
        <!-- <a style="position:absolute; left:580px; top:30px;">Something Jewels</a> -->
        <img  style="position:absolute; left:60px; top:30px;" src="\images\Jewels (1).png">
        <img style="z-index: 1; position:absolute; left:250px; top:210px;"src="\images\Component 1 (5).png">
        <img style="z-index: 1; position:absolute; left:950px; top:700px; width:800px;"src="\images\Component 2 (2).png">
        <img style="z-index: 1; position:absolute; left:950px; top:-70px; width:570px;"src="\images\Component 2 (2).png">
        <img style="z-index: 1; position:absolute; left:-20px; top:470px; width:210px;"src="\images\Component 3 (1).png">
        <img style="z-index: 1; position:absolute; left:1520px; top:270px; width:170px;"src="\images\Component 3 (1).png">
        <img style="z-index: 1; position:absolute; left:-470px; top:700px; width:700px;"src="\images\Component 1 (5).png">
        <img style="z-index: 1; position:absolute; left:-20px; top:1470px; width:210px;"src="\images\Component 3 (1).png">
        <img style="z-index: 1; position:absolute; left:820px; top:1270px; width:1010px; "src="\images\Component 1 (5).png">
        <img style="z-index: 1; position:absolute; left:-40px; top:1770px; width:1010px;"src="\images\Component 2 (2).png">
    </div>
        <!-- <div class="background" style="position:absolute; top:3500px; color:black; z-index: 1;background-color: black;">
          <h1> geia</h1>
        </div> -->
    <div class="footer" style="position:absolute; top:2890px; left:650px; color:azure; z-index: 1; font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; ">
        <a style="position:absolute; left:-650px; top:-40px; width:1903px; height:110px; "></a>
        <a style="position:relative; margin-left:-565px; "><strong> CONTACT </strong></a>
        <a style="position:relative; margin-left:205px;"><strong> SOCIAL MEDIA </strong></a>
        <pre style="position:relative; margin-left:-575px;"> Email jewels@gmail.com</pre>
        <a style="position:absolute; margin-left:-287px; margin-top:-25px; "> Instagram</a>
        <pre style="position:absolute; margin-left:-650px; top:120px; background-color: black; padding-left: 800px; padding-right: 900px; padding-top:10px; top:50px; padding-bottom: 75px; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Copyright 2025 Jewels</pre>
    </div>

    <div class="part1" style="position:absolute; left:1698.5px; top:0px; height:3049px;">

        <a></a>

        <button class="barbtns"  @click="$router.push('/jewels')" style="position:absolute; left:50px; top:100px; color:black;">SHOP</button>
        <button class="barbtns"  @click="$router.push('/favourites')" style="position:absolute; left:50px; top:200px; color:black;">FAVOURITES</button>
        <!-- <a style="position:absolute; left:50px; top:200px;">FAVOURITES</a> -->
        <button class="barbtns"  @click="$router.push('/purchase').catch(()=>{})" style="position:absolute; left:50px; top:300px; color:black;">PURCHASE</button>
       
        <button class="barbtns"  @click="$router.push('/email')" style="position:absolute; left:50px; top:400px; color:black;">EMAIL US</button>

    </div>

    <!-- <div vlass="icons">
            <img @click="$router.push('/jewels')"  style="position:absolute; left:1800px; top:15px; width:20px; height:20px;" src="">            
    </div> -->
    <div class="pictures">
        
    </div>
    <button class="btnShop"  @click="$router.push('/jewels')" style="position: absolute; left: 770px; top:800px;">SHOP
    </button>

    <!-- <a class="btn" href="#news" style="position: absolute; left: 774px; top:780px;  color:azure;">Check out   
    </a> -->

    <!-- <div class="news" id="news" style="position: absolute; left: 732px; top:1080px; color:azure;">
        <h1>picture</h1>
        <h1>picture</h1>
        <h1>picture in carousel</h1>
        <h1>picture in carousel</h1>
       

    </div> -->


    <div  style="position: absolute; left: 1740px; top:10px; color:black;"class="logReg">
        <a style="position: relative; left: 42px;" href="/login"> Login</a>
        <a style="position: relative; left: 57px;" href="/register"> Register</a>
    </div>
<!-- 
    <div class="news" id="news" >
      <img style="position:absolute; height:1000px; top:1800px;" src="\images\IMG_0047.jpeg">


    </div> -->


    <div class="news" id="news" style="position:absolute; top:1130px; left:453px;">
      <img style="position:relative; height:420px; width:400px; top:-90px; left:-150px; border-width:7px; z-index: 1; rotate:-7deg; border-color:azure;" src="\images\IMG_0047.jpeg">
      <img style="position:relative; height:700px; width:500px; top:-100px; left:590px; z-index: 1; border-width:7px; rotate: 8deg; border-color: aqua;" src="\images\IMG_1165.jpeg">
      <img style="position:relative; height:700px; width:500px; top:-290px; left:-190px; z-index: 1; border-width:7px; rotate: -8deg; border-color: aqua;" src="\images\IMG_1165.jpeg">



        <!-- <div style="position:relative; left:-290px; top:15px; font-size:60px;">
         <h1 style="color:azure;">  News</h1> 
        </div>
        <b-carousel  
      id="carousel-1"
      v-model="slide"
      :interval="4000"
      indicators
      img-width="1435"
      img-height="740"
      style="text-shadow: 1px 1px 2px #333; color:azure; position:relative; top:37px; z-index: 1; left:-310px;"
      @sliding-start="onSlideStart"
      @sliding-end="onSlideEnd"
    >

    <b-carousel-slide 
        caption="News 1"
        img-src="https://picsum.photos/1024/480/?image=152"
      ></b-carousel-slide>

   

    </b-carousel> -->

    </div>
<!-- <div style="position:absolute; top:200px;"> 
 
</div> -->


 </div>

</template>

<script>

export default {
    data() {
      return {
        slide: 0,
        sliding: null
      }
    },
    methods: {
      onSlideStart(slide) {
        this.sliding = true
      },
      onSlideEnd(slide) {
        this.sliding = false
      }
    }
  }

</script>

<style>
@import "./style.css";




</style>