<html>
  <head>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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
    <div id="app">
      <nav> <!-- navbar content here  --> </nav>
      <ul id="slide-out" class="sidenav">
      <li><div class="user-view">
          <div class="background">
            <img src="images/office.jpg">
          </div>
          <a href="#user"><img class="circle" src="images/davdomin.jpg"></a>
          <a href="#name"><span class="white-text name">David Dominguez</span></a>
          <a href="#email"><span class="white-text email">davdomin@gmail.com</span></a>
        </div>
      </li>
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

      <template>
          <div class="hello">
              <h1>Your IP is {{ ip }}</h1>
              <input type="text" v-model="input.firstname" placeholder="First Name" />
              <input type="text" v-model="input.lastname" placeholder="Last Name" />
              <button>Send</button>
              <br />
              <br />
              <textarea>{{ response }}</textarea>
          </div>
      </template>


    </div>

<script>
    import axios from "axios";

    export default {
        name: 'HelloWorld',
        data () {
            return {
                ip: "",
                input: {
                    firstname: "",
                    lastname: ""
                },
                response: ""
            }
        },
        mounted() {
            axios({ method: "GET", "url": "getOpciones" }).then(result => {
                console.log("AAAAAAAAAAAAAAAAAAAAA");
                this.ip = result.data.origin;
            }, error => {
                console.error(error);
            });
        },
        methods: { }
    }
</script>
</script>


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
