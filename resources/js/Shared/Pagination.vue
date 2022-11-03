
<template>
<div>
    <Component
   :is="link.url ? 'Link' : 'span' "
   v-for="link in users.links"
   :href="link.url" 
   v-html="link.label" 
   :class="link.url ? '' : 'text-gray-500' "

   />
</div>

</template>

<script>
export default{
    props:{
        links: Array

    }
};
</script>