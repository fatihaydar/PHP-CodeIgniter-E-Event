
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/uyeler">Kullanıcılar</a>
                <a href="<?=base_url()?>admin/uyeler/ekle/" class="btn btn-warning " style="margin-left: 1350px; width: 160px;">Kullanıcı Ekle </a>
            </li>
			</ol>

        <p class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ad Soyad</th>
                <th>E-mail</th>
                <th>Şifre</th>
                <th>Yetki</th>
                <th>Durum</th>
                <th>Resim</th>
				<th>Düzenle</th>
				<th>Sil</th>
				
            </tr>
        </thead>
        <tbody>
		<?php
		foreach ($veriler as $rs)
		{
		?>
            <tr>
                <td><?=$rs->Id?></td>
                <td><?=$rs->adsoy?></td>
                <td><?=$rs->email?></td>
                <td><?=$rs->sifre?></td>
                <td><?=$rs->yetki?></td>
                <td><?=$rs->durum?></td>
                <td> <?php if($rs->resim)
                    {?>
                        <a href ="<?=base_url()?>admin/uyeler/resimekle/<?=$rs->Id?>">
                            <img src="<?=base_url()?>uploads/<?=$rs->resim?>" width="50px" height="50px"></a>
                    <?php } else {?><a href ="<?=base_url()?>admin/uyeler/resimekle/<?=$rs->Id?>"  class="btn btn-block btn-success btn-xs">Resim Ekle</a><?php } ?></td>
				<td><a href ="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>" class="btn btn-block btn-info btn-xs">Düzenle</td>
				<td><a href ="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" class="btn btn-block btn-danger btn-xs">Sil</td>
            </tr>
		<?php } ?>
        </tbody>
    </table>

                  

    </div>

<?php
$this->load->view('admin\_footer');
?>