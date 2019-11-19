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

<body>
  <nav> <!-- navbar content here  --> </nav>

  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/davdomin.jpg"></a>
      <a href="#name"><span class="white-text name">David Dominguez</span></a>
      <a href="#email"><span class="white-text email">davdomin@gmail.com</span></a>
    </div></li>
       <div class="input-field col s12">
         <i class="material-icons prefix">textsms</i>
         <input type="text" id="txtOpciones" class="autocomplete">
         <label for="autocomplete-input"></label>
       </div>
    <ul class="collapsible">
      <?=$menu;?>
    </ul>
  </ul>
  <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
   <script>
   document.addEventListener('DOMContentLoaded',
    function() {
        var elems = document.querySelectorAll('.sidenav');

        var instances = M.Sidenav.init(elems, {});
        elems = document.querySelectorAll('.autocomplete');
        instances = M.Autocomplete.init(elems, {});
        elems = document.querySelectorAll('.collapsible');
        instances = M.Collapsible.init(elems, {});
      }
    );

    $(document).ready(function(){
      $('.sidenav').sidenav();
      $('.collapsible').collapsible();
      $.get("getOpciones",function(e) {
        console.log(e);
          $("#txtOpciones").autocomplete({
            data:e
          });
      });

});
   </script>
</body>

</html>
