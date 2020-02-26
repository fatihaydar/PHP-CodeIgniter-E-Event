
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/kategoriler" >Kategoriler</a>
                <a href="<?=base_url()?>admin/kategoriler/ekle/" class="btn btn-warning " style="margin-left: 1350px; width: 160px;">KATEGORİ EKLE</a>
            </li>
			</ol>

        <p class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
				<th>başlık</th>
                <th>Anahtar Kelimeler</th>
                <th>Açıklama</th>
                <th>Detay</th>
				<th>Durum</th>
				<th>Düzenle</th>
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
                <td><?=$rs->detay?></td>



				<td><?=$rs->durum?></td>
				<td><a href ="<?=base_url()?>admin/kategoriler/duzenle/<?=$rs->Id?>" class="btn btn-block btn-info btn-xs">Düzenle</td>
				<td><a href ="<?=base_url()?>admin/kategoriler/sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" class="btn btn-block btn-danger btn-xs">Sil</td>
            </tr>
		<?php } ?>
        </tbody>
    </table>


    </div>

<?php
$this->load->view('admin\_footer');
?>