 function validate() 
  {
    if (document.getElementById('fnm').value=="")
    {
        alert('Input your First Name');
         return false;
   }
   
    if (document.getElementById('lnm').value==""){
        alert('Last Name is important!');
         return false;
}
 if (document.getElementById('dob').value=="")
    {
        alert('Please input date of birth');
         return false;
   }
}