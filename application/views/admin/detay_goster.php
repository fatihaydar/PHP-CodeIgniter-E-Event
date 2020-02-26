


<div id="content-wrapper">

    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/etkinlikler" >Etkinliklere Geri Dön</a>
                <?php foreach ($detayy as $rc) { ?>
                <a href="<?=base_url()?>admin/etkinlikler/duzenle/<?=$rc->Id?>"  class="btn btn-warning" style="margin-left: 1250px; width: 160px;">Düzenle</a>
            <?php } ?>
            </li>

        </ol>

        <p class="text-green"><?=$this->session->flashdata("mesaj")?></p>

      <?php foreach ($detayy as $rs)
          {

          ?>
          <?=$rs->detay?>

          <?php } ?>
                  

    </div>


<?php
$this->load->view('admin\_footer');
?>