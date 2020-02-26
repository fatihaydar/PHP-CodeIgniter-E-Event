
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>

    $(document).ready(function(){


        $('.toggle-event').change(function() {

            var isActive= $(this).prop('checked');
            var base_url = $(".base_url").text();
            var id =$(this).attr("dataID");
            $.post(base_url + "admin/etkinlikler/isActiveSetter",{id: id, isActive:isActive},
                function (response) {


                })

        })
    })



</script>
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/etkinlikler" >Etkinlikler</a>
                <a href="<?=base_url()?>admin/etkinlikler/ekle/"  class="btn btn-warning" style="margin-left: 1350px; width: 160px;">ETKİNLİK EKLE</a>
            </li>

			</ol>

        <p style="color: #4c009e" class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
				<th>Başlık</th>
                <th width="150px">Anahtar Kelimeler</th>
                <th>Açıklama</th>
                <th>Editör</th>
                <th width="150px">Etkinlik Tarih</th>
                <th>Detay</th>
                <th>Kategori</th>
                <th>Resim</th>
                <th>Galeri</th>
				<th>Durum</th>
                <th>Katılım Sayısı</th>
				<th>Düzenle</th>
				<th>Sil</th>
				
            </tr>
        </thead>
        <tbody>
		<?php
		foreach ($veri as $rs)
		{
		?>
            <tr >
                <td><?=$rs->Id?></td>
                <td><?=$rs->başlık?></td>
                <td><?=$rs->keywords?></td>
                <td><?=$rs->açıklama?></td>
                <td><?=$rs->editör_id?></td>
                <td><?=$rs->etkinlik_tarih?></td>
                <div>
                <td ><a class=" btn btn-warning" href="<?=base_url()?>admin/etkinlikler/detay/<?=$rs->Id?>">İçerik Detayını Gör</a> </td>
                </div>
				<td><?=$rs->kategori?></td>
                <td>
                    <?php if($rs->resim)
                        {?>
                    <a href ="<?=base_url()?>admin/etkinlikler/resimekle/<?=$rs->Id?>">
                        <img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="50px" height="50px"></a>
                        <?php } else {?><a href ="<?=base_url()?>admin/etkinlikler/resimekle/<?=$rs->Id?>"  class="btn btn-block btn-success btn-xs">Resim Ekle</a><?php } ?>
                </td>
               <td>
                   <a href ="<?=base_url()?>admin/etkinlikler/galeriekle/<?=$rs->Id?>"  class="btn btn-block btn-success btn-xs">Galeri Ekle</a></td>

                <td>

                    <input class="toggle-event"
                           data-onstyle="danger"
                           data-size="mini"
                           data-on="Pasif"
                           data-off="Aktif"
                           data-offstyle="success"
                           type="checkbox"
                           data-toggle="toggle"
                           dataID="<?=$rs->Id?>"
                    <?php echo ($rs->durum == 'active') ? "" : "checked"; ?>>
                </td>
                <td><a href="<?=base_url()?>admin/etkinlikler/katilanlar/<?=$rs->Id?>" class="btn btn-block btn-primary btn-xs">Katılanlar</a></td>
                <td><a href ="<?=base_url()?>admin/etkinlikler/duzenle/<?=$rs->Id?>" class="btn btn-block btn-info btn-xs">Düzenle</a></td>
                <td><a href ="<?=base_url()?>admin/etkinlikler/sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" class="btn btn-block btn-danger btn-xs">Sil</a></td>
            </tr>
		<?php } ?>
        </tbody>
    </table>


    </div>


<?php
$this->load->view('admin\_footer');
?>