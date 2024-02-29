const { createApp } = Vue
createApp({
    data() {
        return {
            apiUrl:'server.php',
            listaDischi:[ ],
        }
    },
    methods:{
        getDischi(){
            axios.get(this.apiUrl).then((res)=>{
                this.listaDischi=res.data
            })
        }
    },
    mounted(){
        this.getDischi()
    }
}).mount('#app')