
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


<style>

    #lightbox .modal-content {
        display: inline-block;
        text-align: center;
    }



    #lightbox .close {

        color: rgb(255, 255, 255);
        background-color: rgb(25, 25, 25);
        padding: 5px 8px;
        border-radius: 30px;
        border: 2px solid rgb(255, 255, 255);
        position: absolute;
        top: -15px;
        right: -55px;

        z-index:1032;
    }
</style>
<script>
    $(document).ready(function() {
        var $lightbox = $('#lightbox');

        $('[data-target="#lightbox"]').on('click', function(event) {
            var $img = $(this).find('img'),
                src = $img.attr('src'),
                alt = $img.attr('alt'),
                css = {
                    'maxWidth': $(window).width() - 100,
                    'maxHeight': $(window).height() - 100
                };

            $lightbox.find('.close').addClass('hidden');
            $lightbox.find('img').attr('src', src);
            $lightbox.find('img').attr('alt', alt);
            $lightbox.find('img').css(css);
        });

        $lightbox.on('shown.bs.modal', function (e) {
            var $img = $lightbox.find('img');

            $lightbox.find('.modal-dialog').css({'width': $img.width()});
            $lightbox.find('.close').removeClass('hidden');
        });
    });
</script>











<!------ Include the above in your HEAD tag ---------->
<section  id="contentSection">
<div class="row">
    <?php foreach ($fotog as $rs) {?>
    <div style="float: left;width: 255px;height: 200px;margin-left: 17px">

        <a  href="#" class="thumbnail" data-toggle="modal" data-target="#lightbox">

            <img  width="300px" height="285px" src="<?=base_url()?>/uploads/<?=$rs->resim?>" alt="...">

        </a>

    </div>
    <?php } ?>


</div>
</section>
<div  id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div  class="modal-dialog">
        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
        <div  class="modal-content">
            <div  class="modal-body">
                <img width="1000px" height="600px" src="" alt="" />
            </div>
        </div>
    </div>
</div>