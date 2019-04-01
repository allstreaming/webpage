$(document).ready(function(){
   change();
   setInterval("change()",10000)
})
function change(){ 
$.ajax({
url: "bbs.php",
cache: false,
// dataType:"json",
success: function(data){
 $("#d1").html(data);
}
 })
 }
