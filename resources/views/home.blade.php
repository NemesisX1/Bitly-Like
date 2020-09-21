@include('header')
<div class="trivia out-topbar">
    <h1 class="title">
        Je m'amuse à faire un bit.ly-like !
    </h1>
    <p style="text-align: center;">
        Entrez le lien à reduire ici !
    </p>

</div>
<form action= "/link" method='post' class="form out-topbar">

    {{ csrf_field() }}
    <label for="" class="form-link-name">Votre lien</label><br><br>
    <input type="url" name=url class="form-link-input custom-input"><br><br>
    <input id='submitButton' type="submit" value="Envoyer">
    <span> &nbsp;&nbsp;&nbsp;&nbsp; Où vous voulez valider un <a href="/check">lien</a> ?</span>
</form>

@include('footer')
