console.log("HI");
function formChecker(){
  var usr = document.getElementById("un").value;
  var pass = document.getElementById("pw").value;
  var shipping = document.getElementByName("Shipping");
  var newDress = document.getElementById("dress").value;
  var newBlanket = document.getElementById("blanket").value;
  var newSet = document.getElementById("set").value;

  var ship = "";
  for (var i = 0; i<= shipping.length; i++){
    if (shipping[i].checked){
      ship = shipping[i];
    }

  }

  if(usr == "" || pass =="" || newDress=="" || newDress <0 || newBlanket==""
   || newBlanket<0 || newSet=="" || newSet <0 || ship == ""){
     if (newBlanket == "" || newDress == "" || newSet == 0)
     {
       alert("Quanities should be integers, or 0 if none.");
       return false;
     }
     else{
       alert("All fields should be filed");
       return false;
     }
   }
  if(usr.search("@")==-1){
     alert("Please enter a valid form of username, ex: jordan@gmail.com");
     return false;
   }
     return true;
}
