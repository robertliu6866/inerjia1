<template>

       <h1> Users
         </h1>
       
       
       <div  style=" margin-top: 400px;"> 
        現在時間是：{{time}}
        
        
    </div>
    
    <Link href="/users"
    class=" text-blue-500"
    preserve-scroll>
    重整
</Link>

    </template>
    
    <script >

    import Layout from "../Shared/Layout";
   
    export default {
       layout:Layout,
       props: { time:String}
        
    };
    </script>
    