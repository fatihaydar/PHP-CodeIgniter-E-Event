
    <style>
        *, *:before, *:after {
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: 'Lato', sans-serif;
            color: #333;
            background-color: #f8f8f9;
        }

        form {
            max-width: 1200%;
            margin: 20px auto;
            padding: 16px;
            border: 1px solid #eaeaea;
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
        textarea:focus,
        select:focus {
            border-color: #0f868c;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin: 0 4px 8px 0;
        }

        select {
            padding: 6px;
            height: 32px;
            border-radius: 2px;
        }

        button {
            font-size: 16px;
            font-weight: 600;
            text-transform: uppercase;
            padding: 15px 26px;
            color: #FFF;
            background-color: #0f868c;
            border-radius: 4px;
            border: 1px solid #0f868c;
            text-align: center;
            width: 100%;
        }

        fieldset {
            margin-bottom: 28px;
            border: none;
        }

        legend {
            font-size: 28px;
            font-weight: 400;
            margin-bottom: 16px;
        }

        label {
            display: block;
            line-height: 24px;
            font-size: 16px;
            font-weight: 400;
            margin-bottom: 4px;
        }

        label.light {
            font-weight: 300;
            display: inline;
        }
    </style>

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?=base_url()?>admin/etkinlikler">Etkinlik Ekle</a>
                </li>
            </ol>
            <body >

            <form method="post" action="<?=base_url()?>admin/etkinlikler/ekle_kaydet" style="margin-left: 5px;">

                <label for="name" >Başlık</label>
                <input  type="text" id="name" name="başlık" >

                <label for="mail">Açıklama</label>
                <input type="text" id="name" name="açıklama" >

                <label for="mail">Anahtar Kelimeler</label>
                <input type="text" id="name" name="keywords" >

                <label for="password">Detay</label>
                <textarea id="editor" name="detay"   rows="110" cols="80"></textarea>





                <label for="courses">Kategori</label>
                <select id="courses" name="kategori">
                    <optgroup label="Kategori">
                        <?php
                        foreach ($verii as $rs)
                        {
                            ?>
                            <option><?=$rs->başlık?></option>
                        <?php } ?>
                    </optgroup>
                </select>
                <label>Editör</label>
                <select name="editör_id" class="form-control">
                    <?php
                    foreach ($veriii as $rs)
                    {
                        ?>
                        <option><?=$rs->adsoy?></option>
                    <?php } ?>
                </select>


                <label for="courses">Etkinik Tarihi</label>
                <input type="date" name="etkinlik_tarih" >



                <button type="submit">Kaydet</button>
            </form>


            </body></div></div>


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