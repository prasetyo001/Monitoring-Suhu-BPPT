<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header">Suhu dan Kelembaban Server</h3>
    </div>
</div>

<!-- Suhu -->

<!-- Room 1-->
<div class="row">
    <div class="col-md-offset-1 col-lg-2  col-md-2">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9">

                    </div>
                    <div class="col-xs-9" style="padding:15px; text-align:right">
                      <?php
                        $no = 1;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->suhu ?><sup>o</sup></div>
                      <?php } ?>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Suhu Room 1</span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

  <!-- Room 2-->
    <div class="col-lg-2 col-md-2">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9 text-right"style="padding:15px; text-align:right">
                      <?php
                        $no = 2;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->suhu ?><sup>o</sup></div>
                      <?php } ?>

                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Suhu Room 2</span>
                    <span class="pull-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

  <!--Room 3-->
    <div class="col-lg-2 col-md-2">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9 text-right" style="padding:15px; text-align:right">
                      <?php
                        $no = 3;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->suhu ?><sup>o</sup></div>
                      <?php } ?>

                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left"> Suhu Room 3</span>
                    <span class="pull-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

<!--Room 4-->
    <div class="col-lg-2 col-md-2">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9 text-right"style="padding:15px; text-align:right">
                      <?php
                        $no = 4;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->suhu ?><sup>o</sup></div>
                      <?php } ?>

                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Suhu Room 4</span>
                    <span class="pull-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

  <!--Room 5-->
    <div class="col-lg-2 col-md-2">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9 text-right" style="padding:15px; text-align:right">
                      <?php
                        $no = 5;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->suhu ?><sup>o</sup></div>
                      <?php } ?>

                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Suhu Room 5</span>
                    <span class="pull-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Humadity -->
<!-- Humandity R1-->
<div class="row">
    <div class="col-md-offset-1 col-lg-2  col-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9" style="padding:15px; text-align:right">
                      <?php
                        $no = 1;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                      <?php } ?>

                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Kelembaban Room 1</span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

<!-- Humandity R2-->
    <div class="col-lg-2 col-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9" style="padding:15px; text-align:right">
                      <?php
                        $no = 2;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                      <?php } ?>

                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Kelembaban Room 2</span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
<!-- Humandity R3-->
    <div class="col-lg-2 col-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9" style="padding:15px; text-align:right">
                      <?php
                        $no = 3;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                      <?php } ?>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Kelembaban Room 3</span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

<!-- Humandity R4-->
    <div class="col-lg-2 col-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">

                    <div class="col-xs-9" style="padding:15px; text-align:right">
                      <?php
                        $no = 4;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                      <?php } ?>

                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Kelembaban Room 4</span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

<!-- Humandity R5-->
    <div class="col-lg-2 col-md-2">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-9" style="padding:15px; text-align:right">
                      <?php
                        $no = 5;
                          foreach($suhu[$no] as $key => $a){
                      ?>
                        <div class="huge"><?php echo $a->kelembapan ?><sup>%</sup></div>
                      <?php } ?>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">Kelembaban Room 5</span>
                    <span class="pull-right"></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
