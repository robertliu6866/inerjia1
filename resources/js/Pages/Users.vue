<template>
   <Layout>
       <h1> Users </h1>
       
       <Nav />
       <div  style=" margin-top: 400px;"> 
        現在時間是：{{time}}
        
        
    </div>
    <Link href="/users"
    class=" text-blue-500"
    preserve-scroll>
    重整
</Link>
</Layout>
    </template>
    
    <script>

    import Layout from "../Shared/Layout";
    
    
    export default {
        components:{ Layout },
    };
    
    </script>
    