
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
                <a href="<?=base_url()?>admin/home/videolar" >Videolar</a>
                <a href="<?=base_url()?>admin/home/video_ekle"  class="btn btn-warning" style="margin-left: 1350px; width: 160px;">Video Ekle</a>
            </li>

			</ol>

        <p style="color: #4c009e" class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Video</th>
				<th>Sil</th>
				
            </tr>
        </thead>
        <tbody>
		<?php
		foreach ($video as $rs)
		{
		?>
            <tr >
                <td><?=$rs->Id?></td>
                <td>                            <iframe width="300" height="170" src="<?=$rs->video?>" frameborder="10" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </td>
                <td><a href ="<?=base_url()?>admin/home/video_sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" class="btn btn-block btn-danger btn-xs">Sil</a></td>
            </tr>
		<?php } ?>
        </tbody>
    </table>


    </div>


<?php
$this->load->view('admin\_footer');
?>