 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Pendaftar Masuk</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Pendaftaran Masuk</a></li>     
      </ol>      
    </section>

    <!-- Main content -->
    <section class="content">
    <?php
      if ($this->uri->segment(3)=="read"){
        $id=$this->uri->segment(4);
    ?>
      <a class="btn btn-primary" href="<?php echo base_url().'pendaftar/downloadpdf/'.$id;?>" role="button"><i class="fa fa-download" aria-hidden="true"></i>&nbsp; Download PDF</a>
      <br><br>
    <?php
      }
    ?>  
      <?php echo $output;?>
    </section>
    <!-- /.content -->

