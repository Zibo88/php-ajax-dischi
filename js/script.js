// creo struttura vue
var app = new Vue (
    {
        el: '#root',
        data:{
            // array vuoto
            albums: []
        },
        // creo una funzione per la chiamata axios
        methods:{
            axiosCall(){
                // l'url è quello della pagina dove si trova la struttura dati in formato json (api.php)
               axios.get('http://localhost:8888/php-ajax-dischi/api.php').then((response) => {
                //    osservo il tipo di dato
                    //  console.log(response)
                    // ogni singolo dato viene inserito ll'interno dell'array vuoto
                    this.albums = response.data
                    // console.log(this.albums)
               } )
            }
        },
        // richiamo la funzione
        mounted(){
            this.axiosCall()
        }
    }
)