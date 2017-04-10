 <!-- Content Header (Page header) -->
    <section class="content-header">
      <br/><br/>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-hand-paper-o"></i> Internship Training Agreement</a></li>     
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
  <form id="frmtracker" method="post" action="<?php echo base_url().'internship/trackingform';?>" role="form">
     
      <!-- Page Content -->
            <div class="content container-fluid sidebarRight animated fadeInUp"> 
                <div class="row">
                    <div class="box"> 
                        <div class="well well-white">
                            <div id="pills" class="wizard">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="active"><a href="#pills-tab1" data-toggle="tab">Training Agreement</a></li>
                                    <li><a href="#pills-tab2" data-toggle="tab">Tracking Form</a></li> 
                                    <li><a href="#pills-tab3" data-toggle="tab">Finish</a></li>
                                   
                                </ul>
                                <div class="progress progress-striped progress-xs bar active wizard-progress">
                                    <div class="progress-bar progress-bar-danger"></div> 
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="pills-tab1">
                                        <div class="row">
                                            <div class="box-header">
                                              <h3 class="box-title">
                                                Internship Training Agreement
                                              </h3>
                                            </div>
                                            <div class="box-body"> 
                                                
                                                      <div class="form-group">
                                                      <ol>
                                                        <li>INDUSTRY PARTNER'S RESPONSIBILITIES</li>  
                                                        <li>STUDENT INTERN'S RESPONSIBILITIES</li>
                                                        <li>FEU-INSTITUTED OF TECHNOLOGY RESPONSIBILITIES</li>
                                                      </ol>
                                                   </div>
                                                    <div class="form-group"> 
                                                      <div class="checkbox">
                                                        <label><input id="agree" type="checkbox" required="required">Agree</label>            
                                                      </div>

                                                    </div>
                                                     <div class="box-footer"> 
                                                      <button type="button" id="btnnext" class="btn btn-success next">Next</button>                
                                                    </div>
                                                  
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="pills-tab2">    
                                     
                                           <div class="box-header">
                                              <h3 class="box-title">
                                                Tracking Form
                                              </h3>
                                            </div>

                                            <div class="box-body">
                                            This is to certificaty that <b><?php echo $this->session->userdata("FullName");?></b> came to our office on <b><?php echo date('M d, Y');?></b> at IBM and was advised to :
                                                        
                <div class="form-group">
                  <label>Start internship on :</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="date1" class="form-control datepicker pull-right" >
                  </div>
                  <!-- /.input group -->
                </div>

                 <div class="form-group">
                  <label>Come back for (another interview,exam,etc) :</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="date2" class="form-control datepicker pull-right" >
                  </div>
                  <!-- /.input group -->
                </div>

                 <div class="form-group">
                  <label>Wait for our notice until :</label>

                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="date3" class="form-control datepicker pull-right" >
                  </div>
                  <!-- /.input group -->
                </div>

                <div class="form-group">
                  <label>Others :</label>
                  <div class="input-group date">
                    <input type="text" name="others" class="form-control" >
                  </div>
                  <!-- /.input group -->
                </div>
                         
                                           
                                            </div>
                                            <div class="box-footer">
                                               <button type="button" class="btn btn-default previous">Previous</button>
                                        <button type="button" class="btn btn-success savetracker next">Continue</button>
                                         </div>
                                        
                                       
                                       
                                    </div> 
                                 
                                    <div class="tab-pane fade finish-tab" id="pills-tab3">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3 text-center">
                                                <h2>You Are Finished!</h2>
                                            </div>
                                            <div class="col-sm-6 col-sm-offset-3 text-center">
                                                <i class="fa fa-check success-icon mg-top-50 mg-btm-60"></i>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-default previous" disabled>Previous</button>
                                        <button type="button" class="btn btn-success next">Continue</button>
                                        <input type="submit" name="btnsubmit" class="btn btn-primary" value="Finish">
                                       
                                    </div>  
                                </div>  
                            </div>  
                        </div>
                    </div>
                </div>

               
                
            </div>
            <!-- End Page Content -->
</form>
    </section>
