<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">

         <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/uyeler">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Kullanıcılar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/kullanicilar">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Üyeler</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/etkinlikler">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>İçerikler</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/etkinlikler/bekleyen_etk">
                <?php foreach ($sayi2[0] as $rc) { ?>
                <i class="fas fa-fw fa-chart-area"></i>
                <?php } ?>
                <span>Bekleyen İçerikler<i style="color: yellow">  <?=$rc?></i></span></a>

        </li><li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/kategoriler">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Kategoriler</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/ayarlar">
                <i class="fas fa-fw fa-table"></i>
                <span>Ayarlar</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/dernegimiz">
                <i class="fas fa-fw fa-table"></i>
                <span>Derneğimiz Sayfası</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/bilgiler">
                <i class="fas fa-fw fa-table"></i>
                <span>Bilgiler Sayfası</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/home/videolar">
                <i class="fas fa-fw fa-table"></i>
                <span>Videolar</span></a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?=base_url()?>admin/mesajlar">
                <?php foreach ($sayi[0] as $rs) { ?>
                <i class="fas fa-fw fa-table"></i>
                <?php } ?>
                <span> Mesajlar <i style="color: yellow"><?=$rs?></i> </span></a>

        </li>
    </ul>
