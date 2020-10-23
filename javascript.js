function somarValores(a,b,c){
        
        

       
    return parseInt(a) + parseInt(b) + parseInt(c) ;
    
}
document.querySelector("#somar").addEventListener("click", function(){
    var s1 = document.querySelector("#s1").value;
    var s2 = document.querySelector("#s2").value;
    var s3 = document.querySelector("#s3").value;
    //f (s1.length > 0 && s2.length > 0 && s3.length > 0 ) {

        alert(parseInt(s1) + parseInt(s2) + parseInt(s3) );
        
   // } else {
       // alert ("Digite valores válidos!");
        
   //}



})
