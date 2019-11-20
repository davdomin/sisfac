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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/menu.css">

  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.1.221/styles/kendo.common-bootstrap.min.css" />
  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.1.221/styles/kendo.bootstrap.min.css" />
  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.1.221/styles/kendo.dataviz.min.css" />
  <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2018.1.221/styles/kendo.dataviz.bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="https://kendo.cdn.telerik.com/2019.3.1023/js/kendo.all.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/themechooser.js"></script>
</head>
<body>
  <nav> <center><div id="titulo"></div></center> </nav>
  <div class="container">
  <ul id="slide-out" class="sidenav sidenav-fixed">
    <li><div class="user-view">
      <div class="background">
        <img src="images/office.jpg">
      </div>
      <a href="#user"><img class="circle" src="images/davdomin.jpg"></a>
      <a href="#name"><span class="white-text name">David Dominguez</span></a>
      <a href="#email"><span class="white-text email">davdomin@gmail.com</span></a>
    </div></li>
    <div class="row">
      <div class="input-field col s12">
         <i class="material-icons prefix">textsms</i>
         <input id="txtMenu" class="validate" style="width:100%"/>
         <label for="txtMenu"></label>
       </div>
    </div>
    <ul class="collapsible popout" style="transform: translateX(0px);">
      <?=$menu;?>
    </ul>
  </ul>
    <div id='contenido' style="fixed">
    </div>
  </div>
  <script>
   function cargar_menu(menu_id)
   {
     $.ajax({
            type: 'GET',
            dataType: 'JSON',
            async: false,
            url: 'getJSON',
            data: {opcion: "getMenu", id_menu: menu_id},
            success: function (e){
              var datos = e[0];
              $("#contenido").load(datos.url);
              $("#titulo").html(datos.nombre);
            }
        });
   }

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
      var dataSource = new kendo.data.DataSource({
        transport: {
          /* transport configuration */
          read:{
            url:"getJSON",
            data: {opcion :"getOpciones"},
            dataType:"json"
          },

        },
      });

        $("#txtMenu").kendoAutoComplete(
          {
            dataSource:dataSource,
            dataTextField: "nombre"
          }
        );
      });
   </script>
</body>

</html>
