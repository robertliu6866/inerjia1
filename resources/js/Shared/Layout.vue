
    <template>
        <!-- <Head>
            <title>
                iuliu

            </title>
            <meta type="description"
             content="Information about  liuliu" 
             head-key="discription">
        </Head>  -->
       

 <section class="p-6 bg-gray-200">

     
     <header class="flex justify-between" >
         
         <div class="flex items-center">

             <h1 class="font-bold text-lg">
                 My App
                </h1>
                <p class="text-sm "> 歡迎,{{$page.props.auth.user. username }} </p>
            </div>

            <Nav/>
            
        </header> 
    </section>
<AppSection  class="p-6">
    <div class="max-w-3xl mx-auto">
       

        <slot/>
    </div>
</AppSection>


    </template>


<script>
import Nav from "./Nav";
import {Head } from "@inertiajs/inertia-vue3";

export default {
components: {Nav, Head},


};

</script>