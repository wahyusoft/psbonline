 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo ucfirst($this->uri->segment(1));?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-users"></i> Users</a></li>     
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <?php echo $output;?>

    </section>
    <!-- /.content -->

