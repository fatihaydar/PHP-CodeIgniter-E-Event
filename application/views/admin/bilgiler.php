

    <div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?=base_url()?>admin/bilgiler">Bilgiler Sayfası</a>
                <a href="<?=base_url()?>admin/bilgiler/ekle/"class="btn btn-warning " style="margin-left: 1350px; width: 160px;">YENİ SAYFA EKLE</a>
            </li>
        </ol>

        <p class="text-green"><?=$this->session->flashdata("mesaj")?></p>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Sayfa Adı</th>
                <th>Sayfa İçeriği</th>

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
                    <td><?=$rs->adıı?></td>
                    <td><?=$rs->içerikk?></td>

                    <td><a href ="<?=base_url()?>admin/bilgiler/duzenle/<?=$rs->Id?>" class="btn btn-block btn-info btn-xs">Düzenle</td>
                    <td><a href ="<?=base_url()?>admin/bilgiler/sil/<?=$rs->Id?>" onclick="return confirm('Emin misin?')" class="btn btn-block btn-danger btn-xs">Sil</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>


    </div>





    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
     

<?php
$this->load->view('admin\_footer');
?>