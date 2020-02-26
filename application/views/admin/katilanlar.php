
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
<script>

    $(document).ready(function(){


            $('#toggle-event').change(function() {

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
            </li>

			</ol>

        <p style="color: #4c009e" class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Üye Id</th>
                <th>Katıldığı Etkinlik</th>
                <th>Detay</th>

				<th>Düzenle</th>
				<th>Sil</th>
				
            </tr>
        </thead>
        <tbody>
		<?php
            $i=0;
		foreach ($katilanlar as $rs)
		{
		?>
            <tr >
                <td><?=$rs->Id?></td>
                <td><?=$rs->uye_id?></td>
                <td><?=$rs->etkinlik_id?></td>
                <?php $i++; ?>

                <td><a href ="<?=base_url()?>admin/etkinlikler/sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" class="btn btn-block btn-danger btn-xs">Sil</a></td>
            </tr>
		<?php } ?>
        </tbody>
    </table>


    </div>


<?php
$this->load->view('admin/_footer');
?>