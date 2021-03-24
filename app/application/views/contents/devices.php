<main class="mdl-layout__content">

  <div class="mdl-cell mdl-cell--7-col-desktop mdl-cell--7-col-tablet mdl-cell--4-col-phone">
    <div class="mdl-card mdl-shadow--2dp">
      <div class="mdl-card__title">
        <h5 class="mdl-card__title-text text-color--white">Añadir nuevo dispositivo</h5>
      </div>
      <div class="mdl-card__supporting-text">
        <form class="" action="<?php echo base_url('devices/add_device') ?>" method="POST">
          <div class="mdl-grid">


            <div class="mdl-cell mdl-cell--12-col-desktop mdl-cell--12-col-tablet mdl-cell--12-col-phone form__article">
              <h3 class="text-color--smooth-gray">Información del nuevo dispositivo</h3>
              <div class="mdl-textfield mdl-js-textfield full-size">
                <input name="device_alias" class="mdl-textfield__input" type="text" id="first-name">
                <label class="mdl-textfield__label" for="first-name">Nombre del dispositivo</label>
              </div>
              <div class="mdl-textfield mdl-js-textfield full-size">
                <input name="device_serial_number" class="mdl-textfield__input" type="text" id="last-name">
                <label class="mdl-textfield__label" for="last-name">Numero de Serie</label>
              </div>
              <br><br>
              <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect button--colored-teal pull-right" data-upgraded=",MaterialButton,MaterialRipple">
                <i class="material-icons">add</i>
                Añadir
                <span class="mdl-button__ripple-container"><span class="mdl-ripple is-animating" style="width: 262.161px; height: 262.161px; transform: translate(-50%, -50%) translate(67px, 18px);"></span></span></button>
              </div>


            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--8-col-phone">
        <div class="mdl-card mdl-shadow--2dp">
            <div class="mdl-card__title">
                <h1 class="mdl-card__title-text">Dispositivo</h1>
            </div>
            <div class="mdl-card__supporting-text no-padding">
                <table class="mdl-data-table mdl-js-data-table stripped-table" style="width:100%;" >
                    <thead>
                    <tr>
                        <th class="mdl-data-table__cell--non-numeric">Nombre</th>
                        <th class="mdl-data-table__cell--non-numeric">Fecha de registro</th>
                        <th class="mdl-data-table__cell--non-numeric">SN</th>
                        <th class="mdl-data-table__cell--non-numeric">Eliminar</th>

                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($devices as $device): ?>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric"><?php echo $device['device_alias'] ?></td>
                            <td style="text-align:center" class="mdl-data-table__cell--non-numeric"><?php echo $device['device_date'] ?></td>
                            <td style="text-align:center" class="mdl-data-table__cell--non-numeric"><?php echo $device['device_sn'] ?></td>
                            <td style="text-align:center" class="mdl-data-table__cell--non-numeric"><span  onclick="delete_device('<?php echo $device['device_id'] ?>')" class="label label--mini color--red">Eliminar</span> </td>
                        </tr>

                      <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

  </main>

  <script type="text/javascript">

    function delete_device(device_id){
      Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        type: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        console.log(result);
        console.log(device_id);


        if (result.value) {
          $.post("<?php echo base_url('devices/delete_device') ?>", {device_id:device_id}, function(result){
          if (result == "True"){
              Swal.fire({
                title: 'Success!',
                text: "Device deleted",
                type: 'success',
                showCancelButton: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
              }).then((result) => {
                location.reload();
              })
            }else{
              Swal.fire(
                'ERROR!',
                'Your device has not been deleted.',
                'warning'
              )
            }
          });

        }

      })
    }
  </script>
