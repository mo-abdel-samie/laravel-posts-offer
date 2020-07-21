document.addEventListener('click',function(e){
    if(e.target.classList.contains('layout-icon')){
        e.target.classList.toggle("text-danger");
    }
})
