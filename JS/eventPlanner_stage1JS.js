//document.getElementById("test2").setAttribute("checked");

var x = document.getElementById("test");

x.addEventListener("click", function(){
    
    //alert(x.innerHTML); /*works correct*/
    
    //alert(x.childNodes[1].nodeName); /*works correct*/
    
    
    y = x.childNodes[1]; /* the SPAN element */
//    //alert(y.childNodes[0].nodeName); /* works correct */
//    
    z = y.childNodes[0]; /* the INPUT element */
//    
//    var z = document.getElementById("test2");
    if (z.checked) {
//        alert("HAS");
//        z.removeAttribute("checked");
        z.checked=false;
        z.removeAttribute("checked");
    } else {
//        alert("DOESN'T");
//        z.setAttribute("checked");
        z.checked=true;
        z.setAttribute("checked", "checked");
    }
    
})

