<?php
include 'header_ternak.php' 
?>  
      
  <div class="container">

<h3>Format Input Data Ternak</h3>
  
  <form action="" method="">
    <div class="form-group row">
    <label div class="col-sm-2 col-form-label"> Kode ternak</label>
        <div class="col-sm-10">
        <input type="text" name="kode_ternak" placeholder="Masukkan kode ternak" class="form-control">
        </div>
    </div>
  
 
  <div class="form-group row">
    <label div class= "col-sm-2 col-form-label">Status Fisiologi</label>
        <div class="col-sm-10">
            <select name="status_fisiologi">
                <option value="sapi"></option>
                <option value "bunting"> Laktasi bunting</option>
                <option value "kering> Laktasi kering</option>
                <option value "dara"> dara</option>
                <option value "kk"> Kering kandang</option>
            </select>
        </div>
  </div>
       
   
  <div class="form-group row">
    <label div class="col-sm-2 col-form-label">BCS</label>
        <div class="col-sm-10">
            <select name="BCS">
                <option value="BCS"></option>
                <option value "bcs25>2.5</option>
                <option value "bcs3">3</option>
                <option value "bcs35">3.5</option>
                <option value "bcs4">4</option>
            </select>
        </div>
   </div>
      
  
<div class="form-group row">
<label div class="col-sm-2 col-form-label">Perkiraan Umur</label>
<div class="col-sm-10">
    <input type="week"/><br>
    <input type="submit"/>
</div>
</div>
      
  <div class="form-group row">
    <label div class= "col-sm-2 col-form-label">Catatan</label>
        <div class="col-sm-10">
        <textarea name="cat" class="form-control"></textarea>
        </div>
  </div>
      
  <div class="form-group row">
    <label div class= "col-sm-2 col-form-label"></label> 
        <div class="col-sm-10">
    <button type="submit" class="btn btn-success">Simpan Data</button>
    <a href="index_ternak.php" class="btn btn-danger">Batal</a>
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

