<div> </div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                DataTables Monitoring
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example" style="text-align: center">
                    <thead >
                        <tr>
                            <th style="text-align:center">Time Temp</th>
                            <th style="text-align:center">Name Room</th>
                            <th style="text-align:center">Temperature</th>
                            <th style="text-align:center">humidity</th>
                        </tr>
                    </thead>
                    <tbody>
                      <!-- <tr class="odd gradeX">
                            <td><?php $date = date('d-m-Y [H:i:s]'); ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr> -->
                        <?php
		                      $no = $this->uri->segment('3') + 1;
		                        foreach($suhu as $u){
		                    ?>
		                      <tr>
			                          <td><?php echo $u->time; ?></td>
			                          <td><?php echo $u->kd_room ?></td>
			                          <td><?php echo $u->suhu ?></td>
			                          <td><?php echo $u->kelembapan ?></td>
		                            </tr>
	                       <?php } ?>
                       </tbody>
                       <bottom class="btn btn-default align-right"type="bottom" style="position: relative; right:-1215px;" href="#">Print</bottom>
                        </table>
	                        <?php
	                           echo $this->pagination->create_links();
	                        ?>

                        <!-- </tbody>
                        <a type="bottom" style="" href="#">Print</a>
                         </table> -->
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
