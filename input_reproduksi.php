<?php
include 'header_ternak.php' 
?>  
      
  <div class="container">

<h3>Format Input Data Reproduksi Ternak</h3>
  
  <form action="" method="">
    <div class="form-group row">
    <label div class="col-sm-2 col-form-label"> Nama Peternak</label>
        <div class="col-sm-10">
        <input type="text" name="nama_peternak" placeholder="Masukkan nama peternak" class="form-control">
        </div>
    </div>
  
 
  <div class="form-group row">
    <label div class= "col-sm-2 col-form-label"> Kode Ternak </label>
        <div class="col-sm-10">
        <input type="text" name="kode_ternak" placeholder="Masukkan kode ternak" class="form-control">
        </div>
  </div>
   
  <div class="form-group row">
    <label div class="col-sm-2 col-form-label">Periode Laktasi</label>
        <div class="col-sm-10">
            <select name="BCS">
                <option value="laktasi"></option>
                <option value "laktasi1">1</option>
                <option value "laktasi2">2</option>
                <option value "laktasi3">3</option>
                <option value "laktasi4">4</option>
                <option value "laktasi5">5</option>
                <option value "laktasi6">6</option>
                <option value "laktasi7">7</option>
                <option value "laktasi8">8</option>
                <option value "laktasi9">9</option>
                <option value "laktasi10">10</option>
            </select>
        </div>
   </div>
      
  
<div class="form-group row">
<label div class="col-sm-2 col-form-label">Bulan Laktasi</label>
<div class="col-sm-10">
            <select name="BCS">
                <option value="laktasi"></option>
                <option value "laktasi1">1</option>
                <option value "laktasi2">2</option>
                <option value "laktasi3">3</option>
                <option value "laktasi4">4</option>
                <option value "laktasi5">5</option>
                <option value "laktasi6">6</option>
                <option value "laktasi7">7</option>
                <option value "laktasi8">8</option>
                <option value "laktasi9">9</option>
                <option value "laktasi10">10</option>
            </select>
</div>    
</div>


<div class="form-group row">
    <label div class="col-sm-2 col-form-label">Rataan Produksi</label>
    <div class="col-sm-10">
    <input type="text" name="rataan_produksi" placeholder="Masukkan nilai rataan produksi ternak" class="form-control">
    </div>
</div>

  <div class="form-group row">
    <label div class="col-sm-2 col-form-label"> Kode Ternak </label>
        <div class="col-sm-10">
        <input type="text" name="kode_ternak" placeholder="Masukkan kode ternak" class="form-control">
        </div>
  </div>

  <div class="form-group row">
    <label div class="col-sm-2 col-form-label"> Catatan </label>
        <div class="col-sm-10">
        <textarea name="cat" class="form-control"></textarea>
        </div>
  </div>
      
  <div class="form-group row">
    <label div class= "col-sm-2 col-form-label"></label> 
        <div class="col-sm-10">
    <button type="submit" class="btn btn-success">Simpan Data</button>
    <a href="index_reproduksi.php" class="btn btn-danger">Batal</a>
        </div> 
  </div>    
  </form>


<?php
include 'footer_ternak.php' 
?>  

