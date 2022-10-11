<template>
<h1> Hello </h1>

<nav>
    <ul>
        <li><Link href="/">Home</Link></li>
        <li><Link href="/users">Users</Link></li>
        <li><Link href="/settings">Setting</Link></li>
    </ul>
</nav>


</template>

<script>
//Link轉換成ＸＨＲ
import {Link} from '@inertiajs/inertia-vue3';


export default {
    components:{Link},
};

</script>
<!-- 藉由 XMLHttpRequest（XHR）物件的方式來存取伺服器端的資料，可以讓你直接經由指定的 URL 擷取資料卻不用刷新整個網頁。這樣一來當想要更新網頁中的部分資料時，不再需要藉由刷新整個頁面的方法而中斷使用者的操作。在AJAX應用中 XMLHttpRequest 被大量的使用 -->