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
                //    osservo il tipo di dato
                    console.log(response)
                    // ogni singolo data viene inserito ll'interno dell'array vuoto
                    this.albums = response.data
                    console.log(this.albums)

               } )
            }
        },
        // richiamo la funzione
        mounted(){
            this.axioCall()
        }
    }
)