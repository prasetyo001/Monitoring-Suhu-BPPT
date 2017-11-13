<br/>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                History Monitoring
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="text-align: center">
                    <thead>
                        <tr class="info">
                            <th style="text-align:center">Time</th>
                            <th style="text-align:center">Room</th>
                            <th style="text-align:center">Temperature</th>
                            <th style="text-align:center">Humidity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
		                      $no = $this->uri->segment('3') + 1;
		                        foreach($suhu as $u){
		                    ?>
		                      <tr>
                                <?php $b = mysql_to_unix($u->time);  ?>
			                          <td><?php echo date('d-m-Y [H:i:s]' , $b ); ?></td>
			                          <td><?php echo $u->kd_room ?></td>
			                          <td><?php echo $u->suhu ?> &deg;C</td>
			                          <td><?php echo $u->kelembapan ?>%</td>
		                            </tr>
	                       <?php } ?>
                       </tbody>

                       <tr>
                           <th colspan="3" style="text-align: left;"><?php
                           echo $this->pagination->create_links();
                        ?></th>
                           <th colspan="1" align="center"> <a class="btn btn-info navbar-right" type="botton" style="position: relative; margin-right: 10px;" href="<?php echo base_url()?>index.php/claporanpdf/cetakpdf">Print</a></t>
                       </tr>

                        </table>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
