 const app = new Vue(

     {
         el: '#app',
         data:{
             url : '../db/database.php',
             dischi : ''
         },

         mounted(){
             axios
               .get(this.url)
               .then(response =>{
                   console.log(response.data);
                   this.dischi = response.data;

               })
         },
      
     }



 );