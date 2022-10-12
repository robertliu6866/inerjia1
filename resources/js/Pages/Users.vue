<template>
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
    </template>
    
    <script>
    import {Link} from "@inertiajs/inertia-vue3";
    
    import Nav from "../Shared/Nav";
    
    
    export default {
        components: { Nav,Link },
        props: {time:String}
    };
    
    </script>
    