
    <style>
        * {
            box-sizing: border-box;
        }

        body {

            background: #f2f2f2;
        }
        .tabs {
            display: flex;
            height: 72px;
            flex-wrap: wrap;
            max-width: 1600px;
            background: #efefef;
            box-shadow: 0 48px 80px -32px rgba(0,0,0,0.3);
        }
        .input {
            position: absolute;
            opacity: 0;
        }
        .label {
            width: 100%;
            height: 72px;
            padding: 20px 30px;
            background: #e5e5e5;
            cursor: pointer;
            font-weight: bold;
            font-size: 35px;
            color: #7f7f7f;
            transition: background 0.1s, color 0.1s;
        }

        .label:hover {
            background: #d8d8d8;
        }

        .label:active {
            background: #ccc;
        }

        .input:focus + .label {
            box-shadow: inset 0px 0px 0px 3px #2aa1c0;
            z-index: 1;
        }

        .input:checked + .label {
            background: #fff;
            color: #000;
        }

        @media (min-width: 600px) {
            .label {
                width: auto;
            }
        }
        .panel {
            display: none;
            padding: 20px 30px 30px;
            background: #fff;
        }

        @media (min-width: 600px) {
            .panel {
                order: 99;
            }
        }

        .input:checked + .label + .panel {
            display: block;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"],
        input[type="datetime"],
        input[type="email"],
        input[type="number"],
        input[type="search"],
        input[type="tel"],
        input[type="time"],
        input[type="url"],
        textarea,
        select {
            background-color: #ffffff;
            border: 1px solid #e5e5e4;
            font-size: 16px;
            height: auto;
            margin: 0;
            outline: 0;
            padding: 8px 18px;
            height: 48px;
            width: 100%;
            color: #8a97a0;
            box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
            margin-bottom: 16px;
            transition: all .2s ease;
        }

        input::placeholder {
            color: #999;
        }

        input:focus,

    </style>
<?php
foreach ($veri as $rs)
{
    ?>
    <form method="post" style="margin-left:40px;" action="<?=base_url()?>admin/ayarlar/ayarlar_guncelle/<?=$rs->Id?>">
        <div class="tabs">
            <label for="tab-5" class="label" style="font-size: 18px; visibility: hidden;">Sosyal Medya</label>
            <label for="tab-5" class="label" style="font-size: 18px; visibility: hidden;">Sosyal Medya</label>
            <input name="tabs" type="radio" id="tab-1" checked="checked" class="input"/>

            <label for="tab-1" class="label" style="font-size: 18px; margin-left: 0%;">İletişim</label>
            <div style="width: 100%;" class="panel">
                <textarea id="textarea8"  name="iletişim" rows="10" cols="800" ><?=$rs->iletişim?></textarea>

                <button style="width: 1550px;margin-top: 35px;float: right"  type="submit" class="btn btn-info pull-right">KAYDET</button>

            </div>



            <input name="tabs" type="radio" id="tab-3" class="input"/>
            <label for="tab-3" class="label" style="font-size: 18px;">Smtp</label>
            <div style="width: 100%;" class="panel">




                <label for="name">Smtp Server</label>
                <input  type="text" id="name" name="smtpserver" value="<?=$rs->smtpserver?>">

                <label>Smtp Port</label>

                <input  type="text" id="name" name="smtpport" value="<?=$rs->smtpport?>">

                <label>Smtp Email</label>

                <input  type="text" id="name" name="smtpemail" value="<?=$rs->smtpemail?>">

                <button  style="width: 1550px;margin-top: 35px;float:right" type="submit" class="btn btn-info pull-right">KAYDET</button>

            </div>
            <input name="tabs" type="radio" id="tab-4" class="input"/>
            <label for="tab-4" class="label" style="font-size: 18px;"> Site Bilgileri</label>
            <div style="width: 100%;" class="panel">
                <label>Adı</label>
                <input  type="text" value="<?=$rs->adı?>" class="form-control" name="adı"
                        placeholder="Adı">
                <label>Şifre</label>
                <input  type="password" value="<?=$rs->password?>" class="form-control" name="password"
                        placeholder="Şifre">
                <label>Anahtar Kelimeler</label>
                <input  type="text" value="<?=$rs->keywords?>" class="form-control" name="keywords"
                        placeholder="Anahtar Kelimeler">
                <label>Açıklaması</label>
                <input  type="text" value="<?=$rs->description?>" class="form-control" name="description"
                        placeholder="Açıklama">
                <label>Adres</label>
                <input  type="text" value="<?=$rs->adres?>" class="form-control" name="adres"
                        placeholder="Adres">
                <label>Şehir</label>
                <input  type="text" value="<?=$rs->şehir?>" class="form-control" name="şehir"
                        placeholder="Şehir">
                <label>Telefon</label>
                <input  type="text" value="<?=$rs->tel?>" class="form-control" name="tel"
                        placeholder="Telefon">
                <label>Fax</label>
                <input  type="text" value="<?=$rs->fax?>" class="form-control" name="fax"
                        placeholder="Fax">
                <label>E-mail</label>
                <input  type="email" value="<?=$rs->email?>" class="form-control" name="email"
                        placeholder="E-mail">

                <button style="width: 1550px;margin-top: 35px;float:right"  type="submit" class="btn btn-info pull-right">KAYDET</button>
            </div>

            <input name="tabs" type="radio" id="tab-5" class="input"/>
            <label for="tab-5" class="label" style="font-size: 18px;">Sosyal Medya</label>
            <div style="width: 100%;" class="panel">

                <label>Facebook</label>
                <input  type="text" value="<?=$rs->facebook?>" class="form-control" name="facebook"
                        placeholder="Facebook">
                <label>Pinterest</label>
                <input  type="text" value="<?=$rs->pinterest?>" class="form-control" name="pinterest"
                        placeholder="Pinterest">
                <label>Twitter</label>
                <input  type="text" value="<?=$rs->twitter?>" class="form-control" name="twitter"
                        placeholder="Twitter">
                <label>Instagram</label>
                <input  type="text" value="<?=$rs->instagram?>" class="form-control" name="instagram"
                        placeholder="Instagram">
                <button style="width: 1550px;margin-top: 35px;float:right"  type="submit" class="btn btn-info pull-right">KAYDET</button>
            </div>
            <label for="tab-5" class="label" style="font-size: 18px; visibility: hidden;" >Sosyal Medya</label>
            <label for="tab-5" class="label" style="font-size: 18px; visibility: hidden;">Sosyal Medya</label>


            <?php } ?>







        </div>

    </form>
    <br>
    <br>



    <script>
        ClassicEditor
            .create( document.querySelector( '#textarea8' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textarea7' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textt' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textare10' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textare8' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textare6' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textare5' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textare4' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textare2' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textare1' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#textarea3' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>




<?php

?>