
    <template>

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
        <iframe width="560" height="315" src="https://www.youtube.com/embed/Pbe9NUczt_Q" 
        title="YouTube video player" frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>

        <slot/>
    </div>
</AppSection>


    </template>


<script>
import Nav from "./Nav";

export default {
components: {Nav},


};

</script>