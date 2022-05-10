var app = new Vue ({

        el:'#app',
        data:{
           dischi: [],
           generi: [],
           genreSelezionato : '',
        },
        created(){
            axios.get('http://localhost/php-ajax-dischi/Milestone2/Vue/api/dischi.php')
                 .then( (res) => {
                    console.log(res.data);
                     this.dischi = res.data;
                  
                  this.dischi.forEach((element) => {
                     if (!this.generi.includes(element.genre)){
                           this.generi.push(element.genre);
                     }
                  });
                  }) 
        },
        methods: {
         selezioneGenere(){
            axios.get(`http://localhost/php-ajax-dischi/Milestone2/Vue/api/dischi.php?genere=${this.genreSelezionato}`)
            .then( (res) => {
               this.dischi = res.data
            })
         }
      }
})