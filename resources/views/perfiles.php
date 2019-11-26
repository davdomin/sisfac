<div>
  <div class="row">
  <form class="col s12">
    <div class="row">
      <div class="input-field col s6">
        <input id="txtNombre" type="text" class="validate">
        <label for="txtNombre">Nombre de;</label>
      </div>
    </div>
  </form>
</div>
<a id="btnGuardar" class="waves-effect waves-light btn-large">Guardar</a>

</div>


<script>
$(document).ready(function(){
  $("#btnGuardar").kendoButton({
    click:function(e) {
      alert("a");
    }
  });
});
</script>
