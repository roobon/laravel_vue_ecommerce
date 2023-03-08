<template>
    <a href @click.prevent="AddProductToBasket"><i class="icon-shopping-cart2"></i> Order Now</a>
</template>
<script>
import { assertExpressionStatement } from '@babel/types';

   export default {
        props:{
            product_id:''
        },
        data() {
            return {

            }
        },
        methods: {
           AddProductToBasket(){
                axios.post('/basket', {prid:this.product_id}).then((response)=>{console.log(response.data)})          
                //alert(this.product_id);
           } 
        }
   } 
</script>