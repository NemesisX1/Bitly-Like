@include('header')
<div class="trivia out-topbar">
    <h1 class="title">
        Je m'amuse à faire un bit.ly-like !
    </h1>
    <p style="text-align: center;">
        Entrez le lien reduit ici.
    </p>

</div>
<form action="/redirect" class="form out-topbar" method="post">
    {{ csrf_field() }}
    <input type="text" name="url_id" class="form-link-input custom-input"><br><br>
    <input id='submitButton' type="submit" value="Tester">
</form>
@include('footer')
