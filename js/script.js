// creo struttura vue

var app = new Vue (
    {
        el: '#root',
        data:{
            albums: []
        },
        // creo una funzione per la chiamata axios
        methods:{
            axioCall(){
               axios.get('http://localhost:8888/php-ajax-dischi/api.php').then((response) => {
                    console.log(response)
               } )
            }
        },
        // richiamo la funzione
        mounted(){
            this.axioCall()
        }
       


    }
)