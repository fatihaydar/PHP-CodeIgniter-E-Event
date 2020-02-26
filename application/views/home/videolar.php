<section id="contentSection">
    <div style="margin-left: 0px" class="row">
        <?php foreach ($videoo as $rs) { ?>
        <div class="fashion" style="width: 266px; margin-right: 9%;height: 350px;float: left;">

            <div class="single_post_content"  >

                <ul class="business_catgnav wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown; width: 340px">

                    <li>

                        <iframe width="340" height="300" src="<?=$rs->video?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    </li>

                </ul>

            </div>

        </div>
        <?php } ?>



    </div>
</section>