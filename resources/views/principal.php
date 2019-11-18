<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Materlizecss</title>

    <!-- Bootstrap CSS CDN -->
    <!-- Compiled and minified CSS -->


    <!-- Compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<script src="js/materialize.min.js"></script>
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/menu.css">
</head>



</head>



<body>

  <ul class="collapsible">    
     <li>
       <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
     </li>
     <li>
       <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
     </li>
     <li>
       <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
     </li>
   </ul>

   <script>
   document.addEventListener('DOMContentLoaded', function() {
       var elems = document.querySelectorAll('.collapsible');
       var instances = M.Collapsible.init(elems, options);
     });

     // Or with jQuery

     $(document).ready(function(){
       $('.collapsible').collapsible();
     });
              </script>
</body>

</html>
