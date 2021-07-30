 const app = new Vue(

     {
         el: '#app',
         data:{
            
            url : 'api/api-dischi.php',
             albums : '',
             genres : ''
         },
         methods:{

         },

         mounted(){
             axios
               .get(this.url)
               .then(response =>{
                   console.log(response.data.albums);
                   console.log(response.data.genres);
                   this.albums = response.data.albums;
                   this.genres = response.data.genres;

               })
         },
      
     }



 );