function init(){
    new Vue({
        http: {
            headers: {
                "X-CSRF-TOKEN": document
                    .querySelector("#token")
                    .getAttribute("value"),
            },
        },
    el:'#entrenadores',
    data:{
        mensaje:'Hola',

    },

    created:function(){

    },

    methods:{

    },


        // fin de vue 
    });
} window.onload=init;