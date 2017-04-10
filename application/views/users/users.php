 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php 
          $id = $this->session->userdata('userID');
          $check_default = $this->Users_model->get_data_byId($id);
          if ((@$check_default->userPassword == 'qwerty')){
            echo "You must change default password.";
          }else{
            if (($this->uri->segment(2)=='index') && ($this->uri->segment(3)=='edit')){
              echo "Profile";
            }else {
              echo ucfirst($this->uri->segment(2,'Users'));
            }
                        
          }
        ?>
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

