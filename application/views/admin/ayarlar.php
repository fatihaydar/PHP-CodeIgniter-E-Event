
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/ayarlar">Ayarlar</a>
            </li>
			</ol>
            
        <p class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
				<th>Adı</th>
                <th>Anahtar Kelimeler</th>
                <th>Açıklama</th>
                <th>Name</th>
                <th>SmtpServer</th>
                <th>SmtpPort</th>
                <th>SmtpEmail</th>
		<!-- ugursamsa.com yan menü		<th>Password</th>
				<th>Adres</th>
				<th>Şehir</th>
                <th>Telefon</th>
                <th>Fax</th>
                <th>Email</th>
                <th>Hakkımızda</th>
                <th>İletişim</th>
                <th>Facebook</th>
				<th>Twitter</th>
				<th>Instagram</th>
				<th>Pinterest</th>
				<th>Düzenle</th>-->
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
				<td><?=$rs->adı?></td>
                <td><?=$rs->keywords?></td>
				<td><?=$rs->description?></td>
                <td><?=$rs->name?></td>
                <td><?=$rs->smtpserver?></td>
                <td><?=$rs->smtpport?></td>
                <td><?=$rs->smtpemail?></td>
				<td><?=$rs->password?></td>
				<td><?=$rs->adres?></td>
				<td><?=$rs->şehir?></td>
				<td><?=$rs->tel?></td>
				<td><?=$rs->fax?></td>
				<td><?=$rs->email?></td>
				<td><?=$rs->hakkımızda?></td>
				<td><?=$rs->iletişim?></td>
				<td><?=$rs->facebook?></td>
	 			<td><?=$rs->twitter?></td>
				<td><?=$rs->instagram?></td>
				<td><?=$rs->pinterest?></td>
				<td><a href ="<?=base_url()?>admin/ayarlar/duzenle/<?=$rs->Id?>" class="btn btn-block btn-info btn-xs">Düzenle</td>
				<td><a href ="<?=base_url()?>admin/ayarlar/sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" class="btn btn-block btn-danger btn-xs">Sil</td>
            </tr>
		<?php } ?>
        </tbody>
    </table>
                  

    </div>

<?php
$this->load->view('admin\_footer');
?>