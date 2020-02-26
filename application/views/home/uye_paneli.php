<div class="breadcrumb-area bc_type t3 bc-bg margin_bottom50">
    <div class="container">
        <h2 class="page-title">Giriş Yap</h2>
        <ul class="breadcrumb">
        </ul>
    </div>
</div>

<form action="<?=base_url()?>anasayfa/giris_yap" method="post">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="shop_login"> E-mail <span>*</span></label>
                <input type="email" class="form-control" name="uyeler[email]" placeholder=" email">
            </div>
        </div>

        <div class="col-xs-12 col-sm-6">
            <div class="form-group">
                <label for="shop_password">Şifre <span>*</span></label>
                <input type="password" class="form-control" name="uyeler[sifre]" placeholder="sifre">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12">
            <div class="remember-me clear">
                <input name="rememberme" id="rememberme" value="forever" class="custom_check" type="checkbox">
                <label for="rememberme" class="custom_label">Beni hatırla</label>
            </div>
            <input type="submit" class="btn btn-blue" value="Giriş Yap">
            <p class="password-reset">
                <a href="#">Şifremi Unuttum</a>
            </p>
        </div>

    </div>
</form>
