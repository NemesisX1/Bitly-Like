@include('header')
<div class="trivia out-topbar">
    <h1 class="title">
        Je m'amuse à faire un bit.ly-like !
    </h1>

</div>
<form action="" class="form out-topbar">
    <label for="" class="form-link-name" >Voici votre super short-url!Il a été bien enregistré</label><br><br>
    <div class="short-url" style="text-align: center;">
        <p>
            {{ $url }}
        </p>
    </div>
</form>
@include('footer')
