window.addEventListener('DOMContentLoaded', () => {
    var a = document.getElementById("inputEmail4");
    var button = document.getElementById("submit");
    if(a.value==""){
        button.setAttribute("style", "display:none");
        console.log("true");
    }
    a.addEventListener('change',()=>{
        if(a.value==""){
            button.setAttribute("style", "display:none");
        }else{
            button.setAttribute("style", "display: flex");
        }
        
    });
});



