 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo ucfirst($this->uri->segment(2,'BI-Monthly Attendance')); ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-clock-o"></i> Monthly Attendance</a></li>     
      </ol>
    </section>
    <?php //echo '<pre>';print_r($ad);die();?>
    <!-- Main content -->
    <section class="content">
      <form method="post" action="<?php echo base_url().'attendance/postdata';?>">      
        <div class="box">
          <div class="box-header">
            <div class="form-group">
              <label for="internname">Intern's Name : </label>
              <input type="text" name="internname" value="<?php echo @$attendance->intern_name;?>" class="form-control" required="required">
            </div>  
            <div class="form-group">
              <label for="internname">Supervisor Name : </label>
              <input type="text" value="<?php echo $this->session->userdata("FullName");?>" name="supervisor" class="form-control" readonly="readonly">
            </div>


          </div>
          <div class="box-body">
             <table class="table table-bordered">
                <tr>                  
                  <th rowspan="2">Date</th>
                  <th colspan="3">AM</th>
                  <th colspan="3">PM</th>
                  <th colspan="3">OVERTIME</th>
                  <th rowspan="2">TOTAL</th>
                </tr>
                <tr>                                    
                  <th>In</th>
                  <th>Out</th>
                  <th>Total</th>
                  <th>In</th>
                  <th>Out</th>
                  <th>Total</th>
                  <th>In</th>
                  <th>Out</th>
                  <th>Total</th>                  
                </tr>                
                <?php  for($i=0;$i<12;$i++){?>
                <tr>
                  <td><input type="text" name="date<?php echo $i;?>" class="form-control datepicker" value="<?php echo @format_convert($ad[$i]['date_attendance']);?>"></td>
                  <td class="bootstrap-timepicker"><input type="text" name="in1<?php echo $i;?>" value="<?php echo @$ad[$i]['am_int'];?>" class="form-control timepicker"></td>
                  <td class="bootstrap-timepicker"><input type="text" name="out1<?php echo $i;?>" value="<?php echo @$ad[$i]['am_out'];?>" class="form-control timepicker"></td>
                  <td><input type="text" name="total1<?php echo $i;?>" value="<?php echo @$ad[$i]['total1'];?>" class="form-control"></td>
                  <td class="bootstrap-timepicker"><input type="text" name="in2<?php echo $i;?>" value="<?php echo @$ad[$i]['pm_int'];?>" class="form-control timepicker"></td>
                  <td class="bootstrap-timepicker"><input type="text" name="out2<?php echo $i;?>" value="<?php echo @$ad[$i]['pm_out'];?>" class="form-control timepicker"></td>
                  <td><input type="text" name="total2<?php echo $i;?>" value="<?php echo @$ad[$i]['total2'];?>" class="form-control"></td>
                  <td class="bootstrap-timepicker"><input type="text" name="in3<?php echo $i;?>" value="<?php echo @$ad[$i]['over_int'];?>"  class="form-control timepicker"></td>
                  <td class="bootstrap-timepicker"><input type="text" name="out3<?php echo $i;?>" value="<?php echo @$ad[$i]['over_out'];?>" class="form-control timepicker"></td>
                  <td><input type="text" name="total3<?php echo $i;?>" value="<?php echo @$ad[$i]['total3'];?>" class="form-control"></td>
                  <td><input type="text" name="totalall<?php echo $i;?>" value="<?php echo @$ad[$i]['totalall'];?>" class="form-control"></td>                    
                </tr>
                <?php } ?>

              </table>

          </div>
           <div class="box-footer">
           <?php 
           $level= $this->session->userdata("userAccess");
           if($level=='supervisor'){
           ?>
              <input type="submit" name="btnsubmit" class="btn btn-danger" value="Submit to IALAP">
           <?php 
           }
           ?>   
               </div> 
        </div>
      </form>  

    </section>
    <!-- /.content -->

