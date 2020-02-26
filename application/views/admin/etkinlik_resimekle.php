


    <div class="container-fluid">

        <!-- Breadcrumbs-->

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Resim Ekle</div>
        <div class="card-body">
          <form method="post" action="<?=base_url()?>admin/etkinlikler/resim_upload/<?=$id?>" enctype="multipart/form-data">

              <input type="file" name="userfile" size="20"/>
              <input type="submit" value="Yükle" />



          </form>
        </div>
      </div>
    </div>
        

     

<?php
$this->load->view('admin\_footer');
?>