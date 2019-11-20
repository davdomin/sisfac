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

  <link href="https://kendo.cdn.telerik.com/2019.3.1023/styles/kendo.common.min.css" rel="stylesheet" />
  <link href="https://kendo.cdn.telerik.com/2019.3.1023/styles/kendo.default.min.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
  <script src="https://kendo.cdn.telerik.com/2019.3.1023/js/kendo.all.min.js"></script>
  <script src="js/materialize.min.js"></script>
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
         <input id="txtMenu" style="width: 100%;" />
         <label for="txtMenu"></label>
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
      var dataSource = new kendo.data.DataSource({
        transport: {
          /* transport configuration */
          read:"getOpciones",
          dataType:"json"
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
