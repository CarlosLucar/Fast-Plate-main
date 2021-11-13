$(document).ready(function(){    
    var btn = document.querySelectorAll(".button");


    for(let i = 1; i<btn.length + 1;i++){
        var btni = document.getElementById("btn " + [i]);
        var close = document.getElementById("close " + [i]);


        btni.addEventListener('click',() =>{
            console.log("this is button " + [i]);

            $("#menu" + [i]).addClass('active');
            console.log("#menu" + [i]);
            
        })

        close.addEventListener('click',() =>{
    
            $("#menu" + [i]).removeClass('active');
        })
    }
   

})
