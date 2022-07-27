// creo struttura vue
var app = new Vue (
    {
        el: '#root',
        data:{
            // array vuoto
            albums: [],
            userGenre: 'all'
        },
        // creo una funzione per la chiamata axios
        methods:{
            axiosCall(){
                // l'url è quello della pagina dove si trova la struttura dati in formato json (api.php)
               axios.get('http://localhost:8888/php-ajax-dischi/api.php', 
                {
                    // aggiungo alla chiamata axios una query
                    params: {
                        genre: this.userGenre  
                    }
                }    
               )
                //estrapolo i dati dalla chiamata axios
               .then((response) => {
                 
                //    osservo il tipo di dato
                    //  console.log(response)
                    // ogni singolo dato viene inserito all'interno dell'array vuoto
                    this.albums = response.data;
                    // console.log(this.albums)
               } );
            }
        },
        // richiamo la funzione
        mounted(){
            this.axiosCall()
        }
    }
)