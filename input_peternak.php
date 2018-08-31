<?php
include 'header_ternak.php' 
?>  
      
  <div class="container">

<h3>Format Input Data Peternak</h3>
  
  <form action="" method="">
    <div class="form-group row">
    <label div class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
        <input type="text" name="nama_peternak" placeholder="Masukkan nama peternak" class="form-control">
        </div>
    </div>
      
    <div class="form-group row">
    <label div class="col-sm-2 col-form-label">ttl</label>
        <div class="col-sm-10">
        <input type="text" name="ttl_peternak" placeholder="Masukkan Tempat Tanggal Lahir" class="form-control">
        </div>
    </div>  
 
  <div class="form-group row">
    <label div class= "col-sm-2 col-form-label"> Pendidikan </label>
        <div class="col-sm-10">
            <select name="pend_peternak">
                <option value="pend_peternak"></option>
                <option value "sd">Sekolah Dasar (SD)</option>
                <option value "smp>Sekolah Menengah Pertama (SMP) </option>
                <option value "sma">Sekolah Menengah Atas (SMA)</option>
                <option value "univ"> Diploma / Sarjana </option>
            </select>
        </div>
  </div>
      
  <div class="form-group row">
    <label div class="col-sm-2 col-form-label">Mulai beternak</label>
        <div class="col-sm-10">
        <input type="text" name="mulai_beternak" placeholder="Mulai Beternak" class="form-control">
        </div>
  </div>

  <div class="form-group row">
    <label div class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
        <input type="text" name="alamat_peternak" placeholder="Masukkan Alamat Rumah" class="form-control">
        </div>
  </div>
  
  <div class="form-group row">
    <label div class="col-sm-2 col-form-label">Kelompok Ternak</label>
        <div class="col-sm-10">
        <input type="text" name="kel_peternak" placeholder="Mulai Kelompok Ternak" class="form-control">
        </div>
  </div>
      

  <div class="form-group row">
    <label div class= "col-sm-2 col-form-label"></label> 
        <div class="col-sm-10">
    <button type="submit" class="btn btn-success">Simpan Data</button>
    <a href="index_peternak.php" class="btn btn-danger">Batal</a>
        </div>
  </div>    
  </form>


<?php
include 'footer_ternak.php' 
?>  
      <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

