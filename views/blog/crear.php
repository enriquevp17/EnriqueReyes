
	<link rel="stylesheet" type="text/css" href="<?=base_url?>assets/css/fileinput.css">
<script src="<?=base_url?>assets/js/fileinput.js"></script>
<script src="<?=base_url?>assets/js/theme.js"></script>
<script src="<?=base_url?>assets/js/piexif.js"></script>
<script src="<?=base_url?>assets/js/purify.js"></script>
<script src="<?=base_url?>assets/js/sortable.js"></script>
<main class="ttr-wrapper">
  <div class="container-fluid">
    <div class="db-breadcrumb">
      <h4 class="breadcrumb-title">Crear blog</h4>
      <ul class="db-breadcrumb-list">
        <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
        <li><?php echo $nombre; ?></li>
        <li>Crear blog</li>
      </ul>
    </div>
    <div class="row">
      <!-- Your Profile Views Chart -->
      <div class="col-lg-12 m-b30">
        <div class="widget-box">

          <div class="widget-inner">
            <form class="edit-profile m-b30" action="<?=base_url?>blog/guardar" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="col-12">
                  <div class="ml-auto">
                    <h3>1.Información general</h3>
                  </div>
                </div>
                <div class="form-group col-6">
                  <label class="col-form-label">Título corto</label>
                  <div>
                    <input class="form-control" type="text" value="" name="corto">
                  </div>
                </div>
                <div class="form-group col-6">
                  <label class="col-form-label">Título largo</label>
                  <div>
                    <input class="form-control" type="text" value="" name="largo">
                  </div>
                </div>

                <div class="seperator"></div>

                <div class="col-12 m-t20">
                  <div class="ml-auto m-b5">
                    <h3>2. Descripción</h3>
                  </div>
                </div>
                <div class="form-group col-12">
                  <label class="col-form-label">Acerca de</label>
                  <div>
                    <textarea class="form-control" name="descripcion"> </textarea>
                  </div>
                </div>
                <div class="col-12 m-t20">
                  <div class="ml-auto">
                    <h3 class="m-form__section">3. Cargar fotos</h3>
                    <div class="file-loading">
    <input id="input-fa" name="input-fa[]" type="file" multiple>
</div>
                  </div>
                </div>
                <div class="col-12">

                </div>
                <div class="col-12">
                  <input type="hidden" name="registro" value="0">
                  <input type="hidden" name="id_sitio" value="<?php echo $id; ?>">
                  <button type="submit" class="btn-secondry"><i class="fa fa-fw fa-plus-circle"></i>Guardar</button>
                  <button type="button" class="btn"><a href="<?=base_url?>sitio/editar&id=<?php echo $id; ?>">Cancelar</a></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Your Profile Views Chart END-->
    </div>
  </div>
</main>
<script>
$("#input-fa").fileinput({
    theme: "fa",
    showUpload: false,
    maxFileCount: 10,
    allowedFileExtensions: ["jpg", "png", "gif"],
    uploadUrl: "/file-upload-batch/2"
});
</script>
