<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="<?php echo APPNAME;?>">
    <meta name="author" content="<?php echo AUTHOR;?>">
    <title><?php echo APPNAME;?></title>
    <link href="<?php echo base_url().'assets/';?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/';?>css/font/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/';?>css/main.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/';?>css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url().'assets/';?>css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/';?>plugins/datepicker/datepicker3.css">
    <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
</head> 
<body>
<header id="header" role="banner">
  <div class="main-nav">
    <div class="container">
        <div class="header-top">
        <p align="center" style="background-color: #000000;color:#ffffff;">
        Selamat Datang di Portal Aplikasi Pendaftaran Peserta Didik Baru MA Sunniyyah Selo, Pilih Menu "Pendaftaran" Untuk Mendaftar PPDB MA Sunniyyah Selo Secara Online Sekarang Juga. PPDB Online ini Akan Kami Tutup Pada Tanggal 20 Juli 2017.  </p>      
        </div>
      <div class="row">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">
        <img class="img-responsive" src="<?php echo base_url().'assets/';?>images/logo.png" alt="logo">
        </a>
        </div>
        <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        <li class="scroll active"><a href="#home">Home</a></li>     
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Pendaftaran <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="scroll"><a href="#explore" id="menuumum">Jalur Umum</a></li>
            <li class="scroll"><a href="#explore" id="menuprestasi">Jalur Prestasi</a></li>
          </ul>
         </li>
        <li class="scroll"><a href="#event">Peringkat Sementara</a></li>
        <li class="no-scroll"><a href="#twitter">Download Brosur</a></li>

        </ul>
        </div>
      </div>
    </div>
    </div>
</header>
 
<section id="home">
  <div id="main-slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
    <li data-target="#main-slider" data-slide-to="1"></li>
    <li data-target="#main-slider" data-slide-to="2"></li>
  </ol>
<div class="carousel-inner">
<div class="item active">
  <img class="img-responsive" src="<?php echo base_url().'assets/';?>images/slider/bg1.jpg" alt="slider">
  <div class="carousel-caption">
  <h2>Penerimaan Siswa Baru</h2>
  <h4>MA Sunniyyah Selo</h4>
  </div>
  </div>
  <div class="item">
  <img class="img-responsive" src="<?php echo base_url().'assets/';?>images/slider/bg2.jpg" alt="slider">
  <div class="carousel-caption">
  <h2>Penerimaan Siswa Baru</h2>
  <h4>MA Sunniyyah Selo</h4>
  </div>
  </div>
  <div class="item">
  <img class="img-responsive" src="<?php echo base_url().'assets/';?>images/slider/bg3.jpg" alt="slider">
  <div class="carousel-caption">
  <h2>Penerimaan Siswa Baru</h2>
  <h4>MA Sunniyyah Selo</h4>
  </div>
  </div>
</div>
</div>
</section>


<section id="explore" class="content" style="width: 70%;">  
<div class="form-group" style="margin-top: 20px;">
Silahkan Isi Formulir Berikut ini, Pilih Jalur Pendaftaran Yang Anda Kehendaki (Pendaftaran Jalur Umum atau Pendaftaran Jalur Prestasi)
</div>  
<form method="post" id="frmregister" name="frmregister" action="<?php echo base_url().'main/register';?>" >
      <input type="hidden" name="jalur" id="jalur" value="umum">
      <h2 id="umum" class="heading">Pendaftaran Jalur Umum</h2>       
      <h2 id="prestasi" class="heading">Pendaftaran Jalur Prestasi</h2>       
       <!-- SELECT2 EXAMPLE -->
      <div class="box box-default" >
        <div class="box-header with-border">
          <h3 class="box-title">A. Data Calon Peserta Didik</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row" style="padding: 10px;">
            <div class="col-md-12">
              <div class="form-group">
                <label>Nama</label>
               <input type="text" name="nama" id="nama" class="form-control" placeholder="Isi nama sesuai ijazah SMP/MTS" >
              </div>
              
              <div class="form-group">
                <label>NIS/NISN</label>
                <input type="text" name="nis" id="nis" class="form-control" placeholder="Isi NIS" >
              </div>
              
              <div class="form-group">
                <label>Jenis Kelamin</label>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Laki-laki" checked="checked">
                      Laki - laki
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="jk" id="jk" value="Perempuan">
                      Perempuan
                    </label>
                  </div>
              </div>

              <div class="row">
                <div class="col-xs-5">
                  <label>Tempat Lahir</label>
                   <input type="text" name="tmplahir" id="tmplahir" class="form-control" placeholder="Diisi tempat lahir">
                </div>
                <div class="col-xs-7">
                  <label>Tanggal Lahir</label>
                  <div class="input-group date">
                    <div class="input-group-addon">
                      <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" class="form-control pull-right" id="tgllahir" name="tgllahir" required="required">
                  </div>  
                </div>
              </div>  

              <div class="form-group">
                <label>Agama</label>
                <select class="form-control" id="agama" name="agama">
                    <option value="Islam" selected="selected">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddsha">Buddsha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
              </div>

              <div class="row">
                <div class="col-xs-3">
                  <label>Anak Ke</label>
                   <select class="form-control" id="anakke" name="anakke">
                    <?php for($x=1;$x<=20;$x++){
                        echo "<option value='$x'>$x</option>";
                      }     
                    ?> 
                   </select>
                </div>
              </div>  
              <div class="row">
                <div class="col-xs-6">
                  <label>Jumlah Saudara Kandung</label>
                   <select class="form-control" id="jumsdrkandung" name="jumsdrkandung">
                    <?php for($a=1;$a<=20;$a++){
                        echo "<option value='$a'>$a</option>";
                      }     
                    ?> 
                   </select>
                </div>
                <div class="col-xs-6">
                  <label>Jumlah Saudara Tiri</label>
                   <select class="form-control" id="jumsdrtiri" name="jumsdrtiri">
                    <?php for($b=0;$b<=20;$b++){
                        echo "<option value='$b'>$b</option>";
                      }     
                    ?> 
                   </select>
                </div>
              </div> 

               <div class="form-group">
                <label>Hobi dan Cita-cita</label>
                <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Isi Hobi dan Cita-cita" >
              </div> 

              <div class="row">
                <div class="col-xs-3">
                   <label>Alamat</label>
                </div>
              </div>  
              <div class="row">
                <div class="col-xs-6">
                   <label>Dusun</label>
                   <input type="text" name="dusun" id="dusun" class="form-control">
                </div>
                <div class="col-xs-3">
                   <label>RT</label>
                   <input type="text" name="rt" id="rt" class="form-control">
                </div>
                <div class="col-xs-3">
                   <label>RW</label>
                   <input type="text" name="rw" id="rw" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                   <label>Desa/Kelurahan</label>
                   <input type="text" name="desa" id="desa" class="form-control">
                </div>
                <div class="col-xs-3">
                   <label>Kecamatan</label>
                   <input type="text" name="kecamatan" id="kecamatan" class="form-control">
                </div>
                <div class="col-xs-3">
                   <label>Kode Pos</label>
                   <input type="text" name="kodepos" id="kodepos" class="form-control">
                </div>
              </div>

            </div>
            </div>
            
            <!-- /.col -->
            <div class="col-md-12">
              
             
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

        <div class="box-header with-border">
          <h3 class="box-title">B. Data Orang Tua/Wali</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row" style="padding: 10px;">
            <div class="col-md-12">
              <div class="row">
                <div class="col-xs-6">
                    <label>Nama Ayah</label>
                    <input type="text" name="namaayah" id="namaayah" class="form-control" placeholder="Isi nama Ayah" required="required">
                </div>
                <div class="col-xs-6">
                    <label>Nama Ibu</label>
                    <input type="text" name="namaibu" id="namaibu" class="form-control" placeholder="Isi nama Ibu" required="required">
                </div>    
              </div>
              <div class="row">
                <div class="col-xs-6">
                    <label>Pekerjaan Ayah</label>
                    <input type="text" name="pekerjaanayah" id="pekerjaanayah" class="form-control" placeholder="Isi pekerjaan Ayah">
                </div>
                <div class="col-xs-6">
                    <label>Pekerjaan Ibu</label>
                    <input type="text" name="pekerjaanibu" id="pekerjaanibu" class="form-control" placeholder="Isi pekerjaan Ibu" >
                </div>    
              </div>
              <div class="row">
                <div class="col-xs-6">
                    <label>Agama Ayah</label>
                    <select class="form-control" id="agamaayah" name="agamaayah">
                    <option value="Islam" selected="selected">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katholik">Katholik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddsha">Buddsha</option>
                    <option value="Konghucu">Konghucu</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                </div>
                <div class="col-xs-6">
                    <label>Agama Ibu</label>
                     <select class="form-control" id="agamaibu" name="agamaibu">
                      <option value="Islam" selected="selected">Islam</option>
                      <option value="Kristen">Kristen</option>
                      <option value="Katholik">Katholik</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Buddsha">Buddsha</option>
                      <option value="Konghucu">Konghucu</option>
                      <option value="Lainnya">Lainnya</option>
                    </select>  
                </div>    
              </div>
              <div class="row">
                <div class="col-xs-6">
                    <label>Pendidikan Terakhir Ayah</label>
                    <select class="form-control" id="pendidikanayah" name="pendidikanayah">
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SLTP">SLTP</option>
                        <option value="SLTA">SLTA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="col-xs-6">
                    <label>Pendidikan Terakhir Ayah Ibu</label>
                     <select class="form-control" id="pendidikanibu" name="pendidikanibu">
                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                        <option value="SD">SD</option>
                        <option value="SLTP">SLTP</option>
                        <option value="SLTA">SLTA</option>
                        <option value="D3">D3</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>  
                </div>    
              </div>

               <div class="row">
                <div class="col-xs-6">
                    <label>Rata-rata Penghasilan Ayah</label>
                    <select class="form-control" id="penghasilanayah" name="penghasilanayah">
                        <option value="<500000"><500.000</option>
                        <option value="500000-1000000">500.000-1.000.000</option>
                        <option value="1000000-2000000">1.000000-2.000000</option>
                        <option value="2000000-3000000">2.000000-3.000000</option>
                        <option value="3000000-5000000">3.000000-5.000000</option>
                        <option value=">5000000">>5.000.000</option>
                    </select>
                </div>
                <div class="col-xs-6">
                    <label>Rata-rata Penghasilan Ibu</label>
                     <select class="form-control" id="penghasilanibu" name="penghasilanibu">
                        <option value="<500000"><500.000</option>
                        <option value="500000-1000000">500.000-1.000.000</option>
                        <option value="1000000-2000000">1.000000-2.000000</option>
                        <option value="2000000-3000000">2.000000-3.000000</option>
                        <option value="3000000-5000000">3.000000-5.000000</option>
                        <option value=">5000000">>5.000.000</option>
                    </select>  
                </div>    
              </div>

              <div class="row">
                <div class="col-xs-3">
                   <label>Alamat</label>
                </div>
              </div>  
              <div class="row">
                <div class="col-xs-6">
                   <label>Dusun</label>
                   <input type="text" name="dusunortu" id="dusunortu" class="form-control">
                </div>
                <div class="col-xs-3">
                   <label>RT</label>
                   <input type="text" name="rtortu" id="rtortu" class="form-control">
                </div>
                <div class="col-xs-3">
                   <label>RW</label>
                   <input type="text" name="rwortu" id="rwortu" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                   <label>Desa/Kelurahan</label>
                   <input type="text" name="desaortu" id="desaortu" class="form-control">
                </div>
                <div class="col-xs-6">
                   <label>Kecamatan</label>
                   <input type="text" name="kecamatanortu" id="kecamatanortu" class="form-control">
                </div>               
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <br/>
                    <i> Diisi jika Peserta Didik tidak ikut orang tua kandung</i>
                  <br/> 
                </div>
              </div>

              <div class="form-group">
                    <label>Nama Wali</label>
                    <input type="text" name="namawali" id="namawali" class="form-control" placeholder="Isi nama wali" >
              </div>
              <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="kerjawali" id="kerjawali" class="form-control" placeholder="Isi pekerjaan wali" >
              </div>
              <div class="form-group">
                    <label>Agama</label>
                     <select class="form-control" id="agamawali" name="agamawali">
                        <option value="Islam" selected="selected">Islam</option>
                        <option value="Kristen">Kristen</option>
                        <option value="Katholik">Katholik</option>
                        <option value="Hindu">Hindu</option>
                        <option value="Buddsha">Buddsha</option>
                        <option value="Konghucu">Konghucu</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
              </div>
              <div class="row">
                <div class="col-xs-3">
                   <label>Alamat</label>
                </div>
              </div>  
              <div class="row">
                <div class="col-xs-6">
                   <label>Dusun</label>
                   <input type="text" name="dusunwali" id="dusunwali" class="form-control">
                </div>
                <div class="col-xs-3">
                   <label>RT</label>
                   <input type="text" name="rtwali" id="rtwali" class="form-control">
                </div>
                <div class="col-xs-3">
                   <label>RW</label>
                   <input type="text" name="rwwali" id="rwwali" class="form-control">
                </div>
              </div>
              <div class="row">
                <div class="col-xs-6">
                   <label>Desa/Kelurahan</label>
                   <input type="text" name="desawali" id="desawali" class="form-control">
                </div>
                <div class="col-xs-6">
                   <label>Kecamatan</label>
                   <input type="text" name="kecamatanwali" id="kecamatanwali" class="form-control">
                </div>               
              </div>

            </div>

            <div class="col-md-12">
                             
            </div>

          </div>
        </div>      


        <div class="box-header with-border">
          <h3 class="box-title">C. PENDIDIKAN TERAKHIR PESERTA DIDIK</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row" style="padding: 10px;">
            <div class="col-md-12">
                <div class="form-group">
                  <label>Asal Sekolah / Madrasah</label>
                  <input type="text" name="asalsekolah" id="asalsekolah" class="form-control" placeholder="Isi Asal Sekolah / Madrasah" required="required">
                </div>
                <div class="form-group">
                  <label>Alamat Sekolah / Madrasah</label>
                  <input type="text" name="alamatsekolah" id="alamatsekolah" class="form-control" placeholder="Isi alamat Sekolah / Madrasah" required="required">
                </div>
                <div class="row">
                  <div class="col-xs-6">
                     <label>Prestasi di Sekolah/Madrasah</label>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-6">
                     <label>Peringkat pada Semester 1 Kelas 7</label>
                     <input type="text" name="prestasi17" id="prestasi17" class="form-control">
                  </div>
                  <div class="col-xs-6">
                     <label>Peringkat pada Semester 2 Kelas 7</label>
                     <input type="text" name="prestasi27" id="prestasi27" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                     <label>Peringkat pada Semester 1 Kelas 8</label>
                     <input type="text" name="prestasi18" id="prestasi18" class="form-control">
                  </div>
                  <div class="col-xs-6">
                     <label>Peringkat pada Semester 2 Kelas 8</label>
                     <input type="text" name="prestasi28" id="prestasi28" class="form-control">
                  </div>
                </div>

                 <div class="row">
                  <div class="col-xs-6">
                     <label>Peringkat pada Semester 1 Kelas 9</label>
                     <input type="text" name="prestasi19" id="prestasi19" class="form-control">
                  </div>
                  <div class="col-xs-6">
                     <label>Peringkat pada Semester 2 Kelas 9</label>
                     <input type="text" name="prestasi29" id="prestasi29" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                    <label>Masuk SMP/MTs Tahun</label>
                    <select name="thnmasuk" id="thnmasuk" class="form-control">
                    <?php 
                      for($tm=date('Y')-2;$tm>2010;$tm--){
                        echo "<option value='$tm'>$tm</option>";
                      }
                    ?>
                      
                    </select>
                  </div>  
                  <div class="col-xs-6">
                    <label>Lulus Tahun</label>
                    <select name="thnlulus" id="thnlulus" class="form-control">
                    <?php 
                      for($tm=date('Y');$tm>2010;$tm--){
                        echo "<option value='$tm'>$tm</option>";
                      }
                    ?>
                      
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-6">
                     <label>Prestasi Kejuaraan</label>
                  </div>
                </div>
                 <div class="row">
                  <div class="col-xs-4">
                     <label>Tingkat</label>
                     <input type="text" class="form-control" name="kejuaraantingkat" id="kejuaraantingkat">
                  </div>
                  <div class="col-xs-4">
                     <label>Juara Ke</label>
                     <input type="text" class="form-control" name="juarake" id="juarake">
                  </div>

                  <div class="col-xs-4">
                     <label>Jenis</label>
                     <input type="text" class="form-control" name="jenis" id="jenis">
                  </div>
                </div>

            </div>
            <div class="col-md-12">
            </div>
          </div>
        </div>    

        </div>
        <!-- /.box-body -->
        <div class="box-footer">
           <div class="col-xs-2">
              <input type="submit" name="btnSubmit" class="btn btn-primary btn-lg" value="Daftar">               
           </div> 
           <div class="col-xs-2">
             <div id="downloadform"></div>
           </div>            
        </div>
        <div class="form-group">
           <p id="notes" style="padding: 10px;">Silahkan klik Download PDF untuk mendownload data pendaftaran Anda, silahkan diprint pada kertas ukuran A4 lalu dibawa ke MA Sunniyyah Selo untuk diserahkan ke Panitia PPDB sekaligus untuk membayar biaya pendaftaran. Sertakan juga pas foto ukuran 3 x 4 sebanyak 4 lembar dan berkas-berkas lainnya, terima kasih.</p>
        </div>
        <div id="response"></div>
      </div>
   </form>    
</section> 



<section id="event">

  <div class="container">
    <div class="row" style="padding: 30px;">    
          <div class="form-group" style="margin-top: 30px;color: #ffffff;">
          Berikut ini adalah Data Calon Peserta Didik Baru Yang Sudag Mendaftar Secara Online Di Portal Aplikasi PPDB Online MA Sunniyyah Selo ini.
          </div>  
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Peringkat Sementara</h3>

              <div class="box-tools">
              
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Nama Pendaftar</th>
                  <th>Asal Sekolah</th>
                  <th>Waktu Pendaftaran</th>
                  <th>Skor Total</th>
                </tr>
                <?php 
                  if(empty($pendaftar)){
                ?>
                <tr><td colspan="5" align="center">Belum ada data pendaftar yang tersimpan dalam sistem.</td></tr>
                <?php } else{ 
                 foreach ($pendaftar->result() as $row) {
                    echo "<tr><th>$row->pendaftarId</th>
                          <th>$row->nama</th>
                          <th>$row->asalsekolah</th>
                          <th>$row->tglpost</th>
                          <th>$row->skor</th></tr>";  
                  }
                }   
                ?>
              </table>
      </div>
          <!-- /.box -->
      </div>    
    </div>
  </div>
</section> 

<section id="twitter">
  <div class="container">
    <div class="form-group" style="margin-top: 10px;">
          Silahkan Download /simpan browser berikut ini pada device/HP Anda, jika Anda menggunakan browser desktop/komputer PC klik kanan pada area gambar lalu pilih menu "Save Image As". Atau jika Anda menggunakan browser pada Handphone Anda, silahkan pada area gambar tab & tahan beberapa saat sampai muncul menu "Download image" dan simpan device/HP Anda. Terima kasih.
          </div> 
    <div class="text-center">
      <img class="img-responsive" src="<?php echo base_url().'assets/';?>images/Brosur-PPDB-MASS-2017.jpg" alt="">
    </div>
  </div>
</section> 


 
<footer id="footer">
  <div class="container">
    <div class="text-center">
      <p> Copyright &copy;2017<a href="#"> MA Sunniyyah Selo </a>. All Rights Reserved. 
    </div>
  </div>
</footer>
 
<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/coundown-timer.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/jquery.nav.js"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/';?>js/main.js"></script>
<script src="<?php echo base_url().'assets/';?>plugins/datepicker/bootstrap-datepicker.js"></script>
 <link href="<?php echo site_url('assets/plugins/bootstrapValidator/bootstrapValidator.min.css');?>" rel="stylesheet" />
<script src="<?php echo base_url().'assets/plugins/bootstrapValidator/formValidation.min.js';?>"></script>   
<script src="<?php echo base_url().'assets/plugins/bootstrapValidator/bootstrap.min.js';?>"></script>

<script type="text/javascript">  
  $(document).ready(function() {
    //Date picker

     $('#prestasi').hide(); 
     $("#notes").hide();
     $('#menuumum').on('click', function (e) {
        $('#prestasi').hide(); 
        $('#umum').show(); 
        $('#jalur').val('umum');
        $("#downloadform").hide();
        $("#notes").hide();
     });
     $('#menuprestasi').on('click', function (e) {
        $('#prestasi').show(); 
        $('#umum').hide(); 
        $('#jalur').val('prestasi');
        $("#downloadform").hide();
        $("#notes").hide();
     });


    $('#tgllahir').datepicker({
      autoclose: true
    });

     $('#frmregister').bootstrapValidator({    
        fields: {
                nama: {
                    validators: {
                            notEmpty: {
                            message: 'Nama harus diisi'
                          }
                     }                    
                },
                nis: {
                    validators: {
                            notEmpty: {
                            message: 'Nis/NISN harus diisi'
                        }
                  }

                },
                tmplahir: {
                    validators: {
                            notEmpty: {
                            message: 'Tempat lahir harus diisi'
                        }
                  }

                },
                dusun: {
                    validators: {
                            notEmpty: {
                            message: 'Dusun harus diisi'
                        }
                  }

                },
                desa: {
                    validators: {
                            notEmpty: {
                            message: 'Desa harus diisi'
                        }
                  }

                },
                asalsekolah: {
                    validators: {
                            notEmpty: {
                            message: 'Asal sekolah harus diisi'
                        }
                  }

                },
                alamatsekolah: {
                    validators: {
                            notEmpty: {
                            message: 'Alamat sekolah harus diisi'
                        }
                  }

                },
              }
            }).on('success.form.bv', function(e) {                
                e.preventDefault();      
                $("#response").hide();
                $("#downloadform").hide();
                var url = $(this).attr('action');
                var data = $(this).serialize();
                var base_url = '<?php echo base_url();?>';
                $.ajax({
                    url:url,
                    type:'POST',
                    data:data,
                    dataType: "JSON"                  
                }).done(function (data){                     
                    if(data.ok == 0){ 
                        $("#response").show();
                        $("#response").html(data.msg);
                        $("#downloadform").show();
                        $("#notes").show();
                        $("#downloadform").html(data.btn);
                        $('#response').delay(5000).fadeOut('slow');                  
                    }
                });
            });

  });  

</script>
</body>
</html>

  