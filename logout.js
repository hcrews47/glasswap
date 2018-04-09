// function logout() {
//   if(alert('Are you sure you want to logout?')){} else {window.location = 'index.php'};
// }

function logout(){
   var retVal = confirm("Are you sure you want to logout?");
   if( retVal == true ){
      window.location = 'index.php';
      return true;
   }
   else{
      return false;
   }
}
