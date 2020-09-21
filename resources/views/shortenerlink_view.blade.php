@include('header')
<div class="trivia out-topbar">
    <h1 class="title">
        Je m'amuse à faire un bit.ly-like !
    </h1>

</div>
<form action="" class="form out-topbar">
    <label for="" class="form-link-name" >Voici votre lien reduit !</label><br><br>
    <div class="short-url" style="text-align: center;">
        <a href="
        <?php
        $actual_link = "http://$_SERVER[HTTP_HOST]"."/ly/";
        echo "$actual_link".$id;
        ?>">
        <p>
            <?php
            $actual_link = "http://$_SERVER[HTTP_HOST]"."/ly/";
            echo "$actual_link".$id;
            ?>
        </p>
    </a>
    </div>
</form>
@include('footer')
