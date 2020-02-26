

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
                <a href="<?=base_url()?>admin/uyeler">Kullanıcı Ekle</a>
        </li>
    </ol>
    <body >




            <form method="post" action="<?=base_url()?>admin/uyeler/ekle_kaydet">


                <label for="name">Adı Soyadı</label>
                <input  type="text" id="name" name="adsoy" >

                <label for="mail">E-mail</label>
                <input type="email" id="name" name="email" >

                <label for="mail">Şifre</label>
                <input type="password" id="name" name="sifre" >


                <label for="courses">Yetki</label>
                <select id="courses" name="yetki">
                    <optgroup label="Yetki">

                            <option>Admin</option>
                            <option>Üye</option>

                    </optgroup>
                </select>





                <button type="submit">Kaydet</button>
            </form>













     

<?php
$this->load->view('admin\_footer');
?>