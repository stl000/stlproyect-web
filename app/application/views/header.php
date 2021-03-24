<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <div class="mdl-layout-spacer"></div>
        <!-- Search-->
        <select id="device_select" onchange="change_device()" class="" name="" style="background:transparent;color:#d1d0cf">
          <option value="">Select Device</option>
          <?php foreach ($devices as $device ) { ?>
            <option value="<?php echo $device['device_id'] ?>" <?php if ($_SESSION['selected_device'] == $device['device_id']){echo "selected";} ?>><?php echo $device['device_alias']?></option>
          <?php } ?>
        </select>


        <div class="avatar-dropdown" id="icon">
            <span><?php echo $_SESSION['user_name']; ?></span>
            <img src="<?php echo $_SESSION['user_image']; ?>">
        </div>

    </div>
</header>

<script type="text/javascript">
  function change_device(){

    var device_id = $("#device_select").val();
    console.log(device_id);
    $.post("<?php echo base_url('devices/change_device'); ?>", {device_id: device_id}, function(result){
      location.reload();
    });
  }
</script>
