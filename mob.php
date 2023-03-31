<!DOCTYPE html>
<html>
    <head>
    <style>
        body {
  background: #DD5E89;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #F7BB97, #DD5E89);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #F7BB97, #DD5E89); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
}
#device{
  position:absolute;
  top:50%;
  left:50%;
  transform:translate(-50%,-50%);
  font-size:40px;
  font-weight:800;
  font-family:monospace;
}
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha256-SC9pI7daKIBEHzXq0JEtOr9yMl5V7yMMqoowsw8uzNs=" crossorigin="anonymous" />
</head>
    <body>
        <div id="device">Loading..</div>
        <script>
            const detectDeviceType = () =>
  /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)
    ? 'Mobile'
    : 'Desktop';

// Example
detectDeviceType(); // "Mobile" or "Desktop"

document.querySelector('#device').innerHTML = 'Device :- '+detectDeviceType();
        </script>

<?php
$arp=`arp -a`;
$lines=explode("\n", $arp);
$devices = array();
foreach($lines as $line){
    $cols=preg_split('/\s+/', trim($line));
    if(isset($cols[2]) && $cols[2]=='dynamic'){
      $temp = array();
      $temp['ip'] = $cols[0];
      $temp['mac'] = $cols[1];
      $devices[] = $temp;
  }
}
?>

<div class="container" style="margin-top:250px;">
  <div class="row">
    <div class="col-12">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th>IP</th>
            <th>MAC</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($devices as $device){?>
            <tr>
              <td><?php echo $device['ip'];?></td>
              <td><?php echo $device['mac'];?></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>


    </body>

</html>
