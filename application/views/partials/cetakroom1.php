<!DOCTYPE html>
<html>
<head>
  <title><?=$title?></title>
  <style>
  table{
      border-collapse: collapse;
      width: 100%;
      margin: 0 auto;
      font-size: 11;
  }
  table th{
      border:1px solid #000;
      padding: 3px;
      font-weight: bold;
      text-align: center;
  }
  table td{
      border:1px solid #000;
      padding: 3px;
      vertical-align: top;
      text-align: center;
  }
  </style>
</head>
<body>
<p style="text-align: center; font-size: 14;">History Temperature and Humidity Server BJIK</p>
<br><br>
<p style="font-size: 14;">Room 1</p>
<table>
    <tr>
        <th style="width: 5%">No</th>
        <th>Time</th>
        <th style="width: 25%">Temperature</th>
        <th style="width: 25%">Humidity</th>
    </tr>
    <?php $no=0; foreach($rsuhu as $d){
    $no++;
    ?>
    <tr>
        <td><?php echo $no;?></td>
        <?php $b = mysql_to_unix($d->time);  ?>
        <td><?php echo date('d-m-Y [H:i:s]' , $b ); ?></td>
        <td><?php echo $d->suhu;?> &deg;C</td>
        <td><?php echo $d->kelembapan;?> %</td>
    </tr>
  <?php }?>
</table>
</body>
</html>
