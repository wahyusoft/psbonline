<?php
  $check="<img src='".base_url().'assets/images/box.jpg'."' >";
?>
<table width="100%" style="
        font-size: 11pt;">
  <tr><td colspan="5"><img width="500px" src="<?php echo base_url().'assets/images/header1.jpg';?>"></td></tr>
  <tr><td colspan="5"><b>Harap diisi daftar isian berikut dengan benar !</b></td></tr>
  <tr><td colspan="5">A. DATA CALON PESERTA DIDIK</td></tr>
  <tr><td colspan="2" width="30%">&nbsp;&nbsp;1. Nama</td><td width="70%" colspan="3">: <?php echo $siswa->nama;?></td></tr>
  
  <tr><td colspan="2" width="30%">&nbsp;&nbsp;2. NIS/NISN</td><td width="70%" colspan="3">: <?php echo $siswa->nis;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;3. Jenis Kelamin</td><td colspan="3">: <?php echo $siswa->jk;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;4. Tempat & Tgl Lahir</td><td colspan="3">: <?php echo $siswa->tmplahir.', '.tglIndo($siswa->tgllahir);?> </td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;5. Agama</td><td colspan="3">: <?php echo $siswa->agama;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;6. Anak Ke</td><td colspan="3">: <?php echo $siswa->anakke;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;7. Jumlah Saudara</td><td colspan="3">: Kandung <?php echo $siswa->jumsdrkandung;?> orang &nbsp; Tiri <?php echo $siswa->jumsdrtiri;?> orang &nbsp; Jumlah <?php echo ($siswa->jumsdrkandung+$siswa->jumsdrtiri);?> orang</td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;8. Hobi dan Cita-cita</td><td colspan="3">: <?php echo $siswa->hobi;?></td></tr>                    
  <tr><td colspan="2">&nbsp;&nbsp;9. Alamat</td><td colspan="3">&nbsp;Dsn : <?php echo $siswa->dusun;?> &nbsp; RT : <?php echo $siswa->rt;?> &nbsp; RW : <?php echo $siswa->rw;?> &nbsp;</td></tr> 
  <tr><td colspan="2"></td></td><td colspan="3">&nbsp;&nbsp;Desa/Kel. : <?php echo $siswa->desa;?> &nbsp; Kec. : <?php echo $siswa->kecamatan;?> &nbsp; Kode Pos : <?php echo $siswa->kodepos;?> &nbsp;</td></tr> 
  <tr><td colspan="5">B. DATA ORANG TUA/WALI</td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;1. Nama Orang Tua</td><td colspan="3">: Ayah : <?php echo $siswa->namaayah;?> &nbsp; Ibu : <?php echo $siswa->namaibu;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;2. Pekerjaan</td><td colspan="3">: Ayah : <?php echo $siswa->pekerjaanayah;?> &nbsp; Ibu : <?php echo $siswa->pekerjaanibu;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;3. Agama</td><td colspan="3">: Ayah : <?php echo $siswa->agamaayah;?> &nbsp; Ibu : <?php echo $siswa->agamaibu;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;4. Pendidikan Terakhir</td><td colspan="3">: Ayah : <?php echo $siswa->pendidikanayah;?> &nbsp; Ibu : <?php echo $siswa->pendidikanibu;?></td></tr>
   <tr><td colspan="2">&nbsp;&nbsp;5. Rata-rata Penghasilan</td><td colspan="3">: Ayah : <?php echo $siswa->penghasilanayah;?> &nbsp; Ibu : <?php echo $siswa->penghasilanibu;?></td></tr>
   <tr><td colspan="2">&nbsp;&nbsp;6. Alamat</td><td colspan="3">: Dsn : <?php echo $siswa->dusunortu;?> &nbsp; RT : <?php echo $siswa->rtortu;?> &nbsp; RW : <?php echo $siswa->rwortu;?> &nbsp;</td></tr> 
  <tr><td colspan="2"></td><td colspan="3">&nbsp;&nbsp;Desa/Kel. : <?php echo $siswa->desaortu;?> &nbsp; Kec. : <?php echo $siswa->kecamatanortu;?> &nbsp; </td></tr> 
  <tr><td colspan="5" align="center"><br><b><i>( Poin 7-10 diisi jika Peserta Didik tidak ikut orang tua kandung )</i></b></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;7. Nama Wali</td><td colspan="3">: <?php echo $siswa->namawali;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;8. Pekerjaan</td><td colspan="3">: <?php echo $siswa->kerjawali;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;9. Agama</td><td colspan="3">: <?php echo $siswa->kerjawali;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;10. Alamat</td><td colspan="3">: Dsn : <?php echo $siswa->dusunwali;?> &nbsp; RT : rtwali &nbsp; RW : <?php echo $siswa->rwwali;?> &nbsp;</td></tr> 
  <tr><td colspan="2"></td><td colspan="3">&nbsp;&nbsp;Desa/Kel. : <?php echo $siswa->desawali;?> &nbsp; Kec. : <?php echo $siswa->kecamatanwali;?> &nbsp; </td></tr>
  <tr><td colspan="5">C. PENDIDIKAN TERAKHIR PESERTA DIDIK</td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;1. Asal Sekolah / Madrasah</td><td colspan="3">: <?php echo $siswa->asalsekolah;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;2. Alamat Sekolah / Madrasah</td><td colspan="3">: <?php echo $siswa->alamatsekolah;?></td></tr>
  <tr><td colspan="2">&nbsp;&nbsp;3. Prestasi disekolah/Madrasah</td>
                          <td colspan="3">: Peringkat pada Semester 1 : <?php echo $siswa->prestasi17;?>  &nbsp; Semester 2 : <?php echo $siswa->prestasi27;?> di Kelas 7</td></tr>
  <tr><td colspan="2" ></td>
                          <td colspan="3">&nbsp;&nbsp;Peringkat pada Semester 1 : <?php echo $siswa->prestasi18;?>  &nbsp; Semester 2 : <?php echo $siswa->prestasi28;?> di Kelas 8</td></tr>   
  <tr><td colspan="2"></td>
                          <td colspan="3">&nbsp;&nbsp;Peringkat pada Semester 1 : <?php echo $siswa->prestasi19;?>   &nbsp; Semester 2 : <?php echo $siswa->prestasi29;?>  di Kelas 9</td></tr>  
  <tr><td colspan="2">&nbsp;&nbsp;4. Masuk SMP/MTs Tahun</td><td colspan="3">: <?php echo $siswa->thnmasuk;?> &nbsp; Lulus Tahun : <?php echo $siswa->thnlulus;?></td></tr>   
   <tr><td colspan="2">&nbsp;&nbsp;5. Prestasi Kejuaraan</td><td colspan="3">: Tingkat <?php echo $siswa->kejuaraantingkat;?> &nbsp; Juara ke : <?php echo $siswa->juarake;?> &nbsp; Jenis <?php echo $siswa->jenis;?></td></tr>     
  <tr><td colspan="5">&nbsp;&nbsp;6. Jenis prestasi ( diisi petugas pendaftaran)</td></tr>  
   <tr><td colspan="2"></td><td colspan="3"> &nbsp;: Akademik Kategori : 1. <?php echo $check;?> &nbsp; 2. <?php echo $check;?> &nbsp; 3. <?php echo $check;?> &nbsp; 4. <?php echo $check;?> &nbsp;</td></tr>
  <tr><td colspan="2">
                          <td colspan="3">&nbsp;: Non Akademik &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: 1. <?php echo $check;?> &nbsp; 2. <?php echo $check;?> &nbsp; 3. <?php echo $check;?> &nbsp; 4. <?php echo $check;?> &nbsp;</td></tr>                                            
   <tr><td colspan="5" align="right">Selo, <?php echo date('d-m-Y');?></td></tr>  
   <tr><td colspan="5" align="left">Mengetahui,</td> </tr>                     
   <tr><td colspan="5">
   <table width="100%">
    <tr><td align="left">Kepala Sekolah/Madrasah</td><td align="center">Petugas Pendaftaran</td><td align="center">Pendaftar</td></tr> 
    <tr><td colspan="3"><br><br></td></tr> 
     <tr><td align="left"><u>Moh. Nur Cholis, S.Pd</u><br/>NIP. 19600205200604104

     </td><td align="center">( <?php echo $this->session->userdata('FullName');?> )</td><td align="center">( <?php echo $siswa->nama;?> )</td></tr> 
  </table>
    </td></tr> 
  <tr><td colspan="5"><br><br></td></tr>            
  <tr><td colspan="2" align="right"><b>Melampirkan</b> <td colspan="3" ></td></tr>
  <tr><td colspan="2"></td><td colspan="3"><?php echo $check;?> IJAZAH  &nbsp; <?php echo $check;?> SKHUN &nbsp; <?php echo $check;?> KK</td></tr>  
  <tr><td colspan="2"></td><td  colspan="3"><?php echo $check;?> Kartu KPS ( Jika Mempunyai )</td></tr>  
  <tr><td colspan="2"></td><td colspan="3"><?php echo $check;?> Kartu KIP ( Jika Mempunyai )</td></tr>
<tr><td colspan="2"><td colspan="3"><?php echo $check;?> Kartu PKH ( Jika Mempunyai )</td></tr>
<tr><td colspan="5"><br><small><i>Dicetak pada tanggal/waktu <?php echo date('d-m-Y / H:i:s');?></i></small></td>                          
</table>


              
      
             