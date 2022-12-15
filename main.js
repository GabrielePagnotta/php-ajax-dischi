var app = new Vue({
el: '#app',
data: {
    arrainfo:[],
    arraigeneri:[],
},
mounted() {
 axios.get('./api/index.php')
 .then( (response) => {
    this.arrainfo = response.data
 });

 axios.get('./api/arraifiltrato.php')
 .then( (response) => {
    this.arraigeneri = response.data
    
 })
},
beforeUpdate() {

},
methods: {

}
})