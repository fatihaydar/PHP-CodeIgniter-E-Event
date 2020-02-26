
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/etkinlikler">Bekleyen Etkinlikler</a>

            </li>

			</ol>

        <p class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
				<th>başlık</th>
                <th width="150px">Anahtar Kelimeler</th>
                <th>Açıklama</th>
                <th>Editör</th>
                <th width="150px">Etkinlik Tarih</th>
                <th>Detay</th>
                <th>Kategori</th>
                <th>Resim</th>
                <th>Galeri</th>
				<th>Onayla</th>
				<th>Sil</th>
				
            </tr>
        </thead>
        <tbody>
		<?php
		foreach ($veri as $rs)
		{
		?>
            <tr>
                <td><?=$rs->Id?></td>
                <td><?=$rs->başlık?></td>
                <td><?=$rs->keywords?></td>
                <td><?=$rs->açıklama?></td>
                <td><?=$rs->editör_id?></td>
                <td><?=$rs->etkinlik_tarih?></td>
                <div>
                    <td ><a class=" btn btn-warning" href="<?=base_url()?>admin/etkinlikler/bekleyen_detay/<?=$rs->Id?>">İçerik Detayını Gör</a> </td>
                </div>
				<td><?=$rs->kategori?></td>
                <td>
                    <?php if($rs->resim)
                        {?>
                    <a href ="<?=base_url()?>admin/etkinlikler/resimekle/<?=$rs->Id?>">
                        <img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="50px" height="50px"></a>
                        <?php } else {?><a href ="<?=base_url()?>admin/etkinlikler/resimekle/<?=$rs->Id?>"  class="btn btn-block btn-success btn-xs">Resim Ekle<?php } ?>
                </td>
               <td>
               <a href ="<?=base_url()?>admin/etkinlikler/galeriekle/<?=$rs->Id?>"  class="btn btn-block btn-success btn-xs">Galeri Göster</td>



                <td><a href ="<?=base_url()?>admin/etkinlikler/bekleyen_etk_onay/<?=$rs->Id?>" class="btn btn-block btn-info btn-xs">Onayla</td>
				<td><a href ="<?=base_url()?>admin/etkinlikler/bkl_sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" class="btn btn-block btn-danger btn-xs">Sil</td>
            </tr>
		<?php } ?>
        </tbody>
    </table>


    </div>


<?php
$this->load->view('admin\_footer');
?>