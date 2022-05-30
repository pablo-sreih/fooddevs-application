clas=document.getElementsByClassName("Categories_img")
var category=""
function get_category(){
    for (let i=0;i<clas.length;i++){
        clas[i].addEventListener("click",function(e){
            category+=e.currentTarget;
            return category
        })
    }
}
