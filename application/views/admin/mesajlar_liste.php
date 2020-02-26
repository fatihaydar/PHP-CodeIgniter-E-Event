


<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/mesajlar">MESAJLAR</a>
            </li>
			</ol>

        <p class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Ad Soyad</th>
                <th>E-mail</th>
                <th>Mesaj</th>
                <th>Durum</th>
				<th >Mesajı Oku</th>
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
                <td><?=$rs->mesaj?></td>
                <td><?=$rs->durum?></td>
				<td><a href ="<?=base_url()?>admin/mesajlar/oku/<?=$rs->Id?>" style="width: 100px" class="btn btn-block btn-info btn-xs"> Oku</a> </td>
				<td><a href ="<?=base_url()?>admin/mesajlar/sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" style="width: 100px;" class="btn btn-block btn-danger btn-xs">Sil</td>
            </tr>
		<?php } ?>
        </tbody>
    </table>
                  

    </div>


<?php
$this->load->view('admin\_footer');
?>