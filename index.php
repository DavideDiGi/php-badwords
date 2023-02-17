<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs censor</title>

</head>

<body>

    <?php $paragraph =

        "Ora, ora, ora, ora. 
        Te la ricordi ancora, 
        quella notte io e te, 
        sesso ibuprofene,
        avevo il cuore malato,
        ma tu non lo vedevi,
        mi tenevo le pezze gelide dentro al petto,
        ci tenevo a mostrarmi come un drago nel letto.
        Mi sono perso nel silenzio delle mie paure,
        l'atteggiamento di uno stronzo, invece era terrore.
        Non riuscivo a dirti che mi ricordavi di lei,
        mi ricordavi di lui, ero fuori da poco...
        Mi sono perso nella notte, non mi hai mai abbracciato,
        e mi vergogno a dirlo di solito sputo fuoco,
        non riuscivo a dirti che mi ricordavi di lei,
        mi ricordavi di lui, ero fuori da poco.
        Ho visto foto di te,
        il tuo compagno, una bambina...
        Poi quella casa l'hai finita,
        dovevi portarci me,
        dovevi portarci me,
        sesso ibuprofene!
        Eh,
        mi sono perso nel silenzio delle mie paure,
        l'atteggiamento di uno stronzo, invece era terrore,
        non riuscivo a dirti che mi ricordavi di lei,
        mi ricordavi di lui, ero fuori da poco.
        Mi sono perso nella notte, non mi hai mai abbracciato,
        e mi vergogno a dirlo di solito sputo fuoco,
        non riuscivo a dirti che mi ricordavi di lei,
        mi ricordavi di lui, ero fuori da poco.";

    ?>

    <div class="container">

        <div class="left-side">

            <h2>Ora - Aiello</h2>

            <div class="song">
                <p class="parag"><?php echo $paragraph; ?></p>
                <br>
            </div>

            <div class="characters">(<?php echo strlen($paragraph); ?> caratteri)</div>

        </div>


        <?php
        $stringaDaModificare = $_GET["censura"];
        $stringaModificata = str_replace($stringaDaModificare, '***', $paragraph);
        ?>

        <div class="right-side">
            <div class="form-container">
                <form action="" method="get">
                    <br>
                    <input type="text" name="censura" placeholder="Scrivi la parola che vuoi censurare">

                </form>
                <div>Hai censurato:<span id="word"> <?php echo $stringaDaModificare ?> </span> </div>
                <div class="disclaimer"><span>La canzone in realtà non mi piace, l'ho scelta per il meme</span></div>

            </div>


            <br>
            <div class="cesored-song">

                <h2>Ora - Aiello (censored)</h2>
                <br>
                <div class="parag"><?php echo $stringaModificata; ?></div>
                <br>
                <div class="characters">(<?php echo strlen($stringaModificata); ?> caratteri)</div>

            </div>
        </div>
    </div>

</body>

</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        width: 100vw;
        background-color: black;
        color: white;
    }

    .container {
        width: 90vw;
        margin: 0 auto;
        display: flex;
        border: 1px solid white;
        margin-top: 20px;
        padding: 30px;
    }

    h2 {
        margin-top: 10px;
        color: skyblue;
    }

    .song {
        margin-top: 20px;
    }

    .left-side {
        width: 40%;
        display: flex;
        flex-direction: column;
        align-items: center;

    }

    .right-side {
        width: 50%;
        display: flex;
    }

    .form-container {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: relative;
    }

    input {
        width: 250px;
        padding: 10px;
        font-size: 0.8rem;
        border: 1px solid gold;
        margin-bottom: 10px;
        margin-right: 100px;
    }

    #word {
        color: red;
        font-style: italic;
        margin-bottom: 300px;
    }

    .parag {
        max-width: 250px;

    }

    .censored-song {
        width: 50%;

    }

    .characters {
        width: 250px;
        text-align: end;
        color: skyblue;
    }

    .disclaimer {
        font-size: 0.7rem;
        position: absolute;
        bottom: 0;
        left: 0;
        color: skyblue;
        text-decoration: underline;
        /* padding-top: 300px; */
        /* text-align: center; */
    }
</style>