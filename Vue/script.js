


function calculerTTC() 
{

var prix = document.getElementsByClassName('prix');
var taxe = document.getElementsByClassName('taxe');
var ttc = document.getElementsByClassName('ttc');


for (i = 0; i < taxe.length; i++) 
 { 
  
  //ttc[i].innerHTML = Number(prix[i].innerHTML) * (Number(taxe[i].innerHTML)/100 +1);
  ttc[i].innerHTML = (Number(prix[i].innerHTML) + ( Number(prix[i].innerHTML)*Number(taxe[i].innerHTML)/100)).toFixed(2);
  } 
  
} 

/* calculerTTC(); */



$(document).ready(function(){

	var prix = new Array();
	var taxe =  new Array();

var i = 0 ;
$(".taxe").each(function(){ 

    taxe[i] = Number($(this).text());
    i++;
 });

var i = 0 ;
$(".prix").each(function(){ 

 prix[i] = Number($(this).text());
    i++;
 });

var i = 0 ; 

$(".ttc").each(function(){ 

 //$(this).text(parseInt($(".prix:eq("+ i +")"))+ ( parseInt($(".prix:eq("+ i +")")) * parseInt ($(".taxe:eq("+ i +")") ) )/100   ) ;
$(this).text(prix[i] + (prix[i]* taxe[i])/100); 
 i++; 

 });


$("#ajouter").click(function(){ 
 
  $("#t>tbody:last").append("<tr><td>" + $("#formation").val() + "</td><td>" + $("#VolumeH").val() + "</td><td class='prix'>" + $("#prix").val() + "</td> <td class='taxe'>" + $("#taxe").val() +  "</td> <td class='ttc'>" +  + "</td></tr>");

 calculerTTC();
 });

});


$(document).ready(function() { 
$("#valider").click(function(){ 

	var x = $("#liste_formation option:selected").val();
	var i = x - 1 ; 
	var p = $("#nouveau").val() ;
   $(".prix:eq("+ i +")").text(p);
  calculerTTC();

 }); 


}); 





$(document).ready(function() { 
  
$(".btn_modifier").click(function(){

var pos = $(this).attr("id");
      
    $("#nomm").attr("value", $('tr:eq('+pos+') td:eq(0)').html());
    $("#communee").attr("value", $('tr:eq('+pos+') td:eq(1)').html());
    $("#wilayaa").attr("value",$('tr:eq('+pos+') td:eq(2)').html());
    $("#tell").attr("value", $('tr:eq('+pos+') td:eq(3)').html());
    $("#faxx").attr("value", $('tr:eq('+pos+') td:eq(4)').html());
    $("#div_modifier").css({"display":"block"});

}); 

}); 


$(document).ready(function() { 
  
$(".btn_modifier2").click(function(){

var pos = $(this).attr("id");
     
    $("#type_forma3").attr("value", $('tr:eq('+pos+') td:eq(0)').html());
    $("#forma3").attr("value", $('tr:eq('+pos+') td:eq(1)').html());
    $("#VH3").attr("value",$('tr:eq('+pos+') td:eq(2)').html());
    $("#prix3").attr("value", $('tr:eq('+pos+') td:eq(3)').html());
    $("#taxe3").attr("value", $('tr:eq('+pos+') td:eq(4)').html());
    $("#div_modifier").css({"display":"block"});

}); 

}); 



$(document).ready(function() { 
  
$(".btn_supprimer").click(function(){

var pos = $(this).attr("id");
document.getElementById("monTableau").deleteRow(pos);
/*if(confirm("vous les vous supprimer cette formation")==true)
  {
     document.getElementById("monTableau").deleteRow(pos);
}*/

 
}); 

}); 




/*$(document).ready(function() { 
  
Update_price = function() {
$.get("prix_formation.txt", function(data,e){
var i = 0; 
var tab_prix = data.split(';');

$(".prix").each(function(){ 

 $(".prix:eq("+ i +")") = Number(tab_prix[i]);
    i++;
 });

 calculerTTC();
});
}

setInterval(Update_price,5000);

}); 
*/
























/* Pour cacher tous les titres H1
$(document).ready(function(){

$('h1').click(function(){
$(this).hide();

});
});
*/


/*
function survoler(objet) { objet.style.backgroundColor = 'yellow'; } 
function sortir(objet) { objet.style.backgroundColor = 'lightgreen'; } 
function click() { alert('la div a été cliquée'); } 

function affecterEvenement() {  

 var objet = document.getElementById('myDiv'); 
 objet.onclick = click(); 
 
 objet.onmouseover = function (e) { survoler(e.target) }; 
 
 objet.onmouseleave = function (e) { sortir(e.target); } 


}

affecterEvenement() ;*/