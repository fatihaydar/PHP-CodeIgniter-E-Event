


<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/mesajlar">Geri Dön</a>
            </li>
			</ol>

        <p class="text-green"><?=$this->session->flashdata("mesaj")?></p>

      <?php foreach ($oku as $rs)
          {

          ?>
          <?=$rs->mesaj?>

          <?php } ?>
                  

    </div>


<?php
$this->load->view('admin\_footer');
?>