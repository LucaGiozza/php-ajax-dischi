// const app = new Vue(

//     {
//         el: '#app',
//         data:{
//             url : 'api/dischi.php',
//             dischi : ''
//         },

//         mounted(){
//             axios
//               .get(this.url)
//               .then(response =>{
//                   console.log(response.data);
//                   this.dischi = response.data;

//               })
//         },
//         methods: {
//             calcolaSconto(prezzo, sconto){
//                 prezzo -= prezzo *sconto / 100;
//                 return prezzo.toFixed(2);

//             }
//         }
//     }



// );