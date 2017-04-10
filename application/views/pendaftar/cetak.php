<table width="100%">
  <tr><td colspan="5"><img src="<?php echo base_url().'assets/images/header1.jpg';?>"></td></tr>
  <tr><td colspan="5"><b>Harap diisi daftar isian berikut dengan benar !</b></td></tr>
  <tr><td width="1%">A.</td><td colspan="4">DATA CALON PESERTA DIDIK</td></tr>
  <tr><td></td><td width="1%">1.</td><td width="20%">Nama</td><td width="1%">:</td><td><?php echo $siswa->nama;?></td></tr>
  <tr><td></td><td>2.</td><td>NIS/NISN</td><td width="1%">:</td><td><?php echo $siswa->nis;?></td></tr>
  <tr><td></td><td>3.</td><td>Jenis Kelamin</td><td width="1%">:</td><td><?php echo $siswa->jk;?></td></tr>
  <tr><td></td><td>4.</td><td>Tempat & Tgl Lahir</td><td width="1%">:</td><td><?php echo $siswa->tmplahir.' '.$siswa->tgllahir;?> </td></tr>
  <tr><td></td><td>5.</td><td>Agama</td><td width="1%">:</td><td><?php echo $siswa->agama;?></td></tr>
  <tr><td></td><td>6.</td><td>Anak Ke</td><td width="1%">:</td><td><?php echo $siswa->anakke;?></td></tr>
  <tr><td></td><td>7.</td><td>Jumlah Saudara</td><td width="1%">:</td>
                    <td>Kandung <?php echo $siswa->jumsdrkandung;?> orang &nbsp; Tiri <?php echo $siswa->jumsdrtiri;?> orang &nbsp; Jumlah <?php echo ($siswa->jumsdrkandung+$siswa->jumsdrtiri);?> orang</td></tr>
  <tr><td></td><td>8.</td><td>Hobi dan Cita-cita</td><td width="1%">:</td><td><?php echo $siswa->hobi;?></td></tr>                    
  <tr><td></td><td>9.</td><td>Alamat</td><td width="1%">:</td><td>Dsn : dusun &nbsp; RT : rt &nbsp; RW : rw &nbsp;</td></tr> 
  <tr><td></td><td></td><td></td><td width="1%"></td><td>Desa/Kel. : desa &nbsp; Kec. : kecamatan &nbsp; Kode Pos : kodepos &nbsp;</td></tr> 
  <tr><td width="1%">B.</td><td colspan="4">DATA ORANG TUA/WALI</td></tr>
  <tr><td></td><td>1.</td><td>Nama Orang Tua</td><td width="1%">:</td><td>Ayah : namaayah &nbsp; Ibu : namaibu</td></tr>
  <tr><td></td><td>2.</td><td>Pekerjaan</td><td width="1%">:</td><td>Ayah : pekerjaanayah &nbsp; Ibu : pekerjaanibu</td></tr>
  <tr><td></td><td>3.</td><td>Agama</td><td width="1%">:</td><td>Ayah : agamaayah &nbsp; Ibu : agamaibu</td></tr>
  <tr><td></td><td>4.</td><td>Pendidikan Terakhir</td><td width="1%">:</td><td>Ayah : pendidikanayah &nbsp; Ibu : pendidikanibu</td></tr>
   <tr><td></td><td>5.</td><td>Rata-rata Penghasilan</td><td width="1%">:</td><td>Ayah : penghasilanayah &nbsp; Ibu : penghasilanibu</td></tr>
   <tr><td></td><td>6.</td><td>Alamat</td><td width="1%">:</td><td>Dsn : dusunortu &nbsp; RT : rtortu &nbsp; RW : rwortu &nbsp;</td></tr> 
  <tr><td></td><td></td><td></td><td width="1%"></td><td>Desa/Kel. : desaortu &nbsp; Kec. : kecamatanortu &nbsp; </td></tr> <tr><td colspan="5" align="center"><br><b><i>( Poin 7-10 diisi jika Peserta Didik tidak ikut orang tua kandung )</i></b></td></tr>
  <tr><td></td><td>7.</td><td>Nama Wali</td><td width="1%">:</td><td>namawali</td></tr>
  <tr><td></td><td>8.</td><td>Pekerjaan</td><td width="1%">:</td><td>kerjawali</td></tr>
  <tr><td></td><td>9.</td><td>Agama</td><td width="1%">:</td><td>kerjawali</td></tr>
   <tr><td></td><td>10.</td><td>Alamat</td><td width="1%">:</td><td>Dsn : dusunwali &nbsp; RT : rtwali &nbsp; RW : rwwali &nbsp;</td></tr> 
  <tr><td></td><td></td><td></td><td width="1%"></td><td>Desa/Kel. : desawali &nbsp; Kec. : kecamatanwali &nbsp; </td></tr>
  <tr><td width="1%">C.</td><td colspan="4">PENDIDIKAN TERAKHIR PESERTA DIDIK</td></tr>
  <tr><td></td><td>1.</td><td>Asal Sekolah / Madrasah</td><td width="1%">:</td><td>asalsekolah</td></tr>
  <tr><td></td><td>2.</td><td>Alamat Sekolah / Madrasah</td><td width="1%">:</td><td>alamatsekolah</td></tr>
  <tr><td></td><td>3.</td><td>Prestasi di Sekolah/Madrasah</td>
                          <td width="1%">:</td><td>Peringkat pada Semester 1 : prestasi17  &nbsp; Semester 2 : prestasi27 di Kelas 7</td></tr>
  <tr><td></td><td></td><td></td>
                          <td width="1%"></td><td>Peringkat pada Semester 1 : prestasi28  &nbsp; Semester 2 : prestasi28 di Kelas 8</td></tr>   
  <tr><td></td><td></td><td></td>
                          <td width="1%"></td><td>Peringkat pada Semester 1 : prestasi38  &nbsp; Semester 2 : prestasi38 di Kelas 9</td></tr>  
  <tr><td></td><td>4.</td><td>Masuk SMP/MTs Tahun</td><td width="1%">:</td><td>thnmasuk &nbsp; Lulus Tahun : thnlulus</td></tr>   
   <tr><td></td><td>5.</td><td>Prestasi Kejuaraan</td><td width="1%">:</td><td>Tingkat kejuaraantingkat &nbsp; Juara ke : juarake &nbsp; Jenis jenis</td></tr>     
  <tr><td></td><td>6.</td><td colspan="3">Jenis prestasi ( diisi petugas pendaftaran)</td></tr>  
   <tr><td></td><td></td><td></td>
                          <td width="1%">:</td><td>Akademik Kategori : 1.&nbsp; 2.&nbsp; 3.&nbsp; 4.&nbsp;</td></tr>
  <tr><td></td><td></td><td></td>
                          <td width="1%">:</td><td>Non Akademik : 1.&nbsp; 2.&nbsp; 3.&nbsp; 4.&nbsp;</td></tr>                                            
   <tr><td colspan="5" align="right">Selo, ...2016</td></tr>  
   <tr><td colspan="5" align="left">Mengetahui,</td> </tr>                     
   <tr><td colspan="5">
   <table width="100%">
    <tr><td align="left">Kepala Sekolah/Madrasah</td><td align="center">Petugas Pendaftaran</td><td align="center">Pendaftar</td></tr> 
    <tr><td colspan="3"><br><br><br><br></td></tr> 
     <tr><td align="left"><u>Moh. Nur Cholis, S.Pd</u><br/>NIP. 19600205200604104

     </td><td align="center">(....................)</td><td align="center">(....................)</td></tr> 
  </table>
    </td></tr> 
  <tr><td colspan="5"><br><br></td></tr>            
  <tr><td></td><td></td><td align="right"><b>Melampirkan</b></td>
                          <td width="1%">:</td><td>IJAZAH  &nbsp; SKHUN &nbsp; KK</td></tr>  
  <tr><td></td><td></td><td align="right"></td>
                          <td width="1%"></td><td>Kartu KPS ( Jika Mempunyai )</td></tr>  
  <tr><td></td><td></td><td align="right"></td>
                          <td width="1%"></td><td>Kartu KIP ( Jika Mempunyai )</td></tr>
<tr><td></td><td></td><td align="right"></td>
                          <td width="1%"></td><td>Kartu PKH ( Jika Mempunyai )</td></tr>
<tr><td colspan="5"><small><i>Dicetak pada tanggal/waktu <?php echo date('d-m-Y / H:i:s');?></i></small></td>                          

</table>


              
      
             