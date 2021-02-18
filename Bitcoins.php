<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoins converter</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body class="container" style="background : linear-gradient(to right, #191970, #008080 ); color:#ffffff">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



    <?php
    $eur = null;
    // $_GET['ValEur'] = null;
    if (isset($_GET['ValEur']) && !empty($_GET['ValEur'])) {
        //echo '<p>Vous avez recherché : '.$_GET['q'].'</p>';
        //echo '<p>Vous avez recherché : ' . $q . '</p>';
        $eur = $_GET['ValEur'];
        // $trim = trim($eur, " ");
    }
    $op = null;
    if (isset($_GET['sens']) && !empty($_GET['sens'])) {
        $op = $_GET['sens'];
    }
    // $cours = 15368.56;
    $cours = 42936.90;
    $conv1 = round(($eur / $cours), 2);
    $conv2 = round(($eur * $cours), 2);
    //echo $cours;
    echo '<br/>';
    //echo $conv1;
    // echo $eur;
    // echo '<br/>';
    // var_dump($trim);
    // echo '<br/>';
    //value="<?php echo $nombre1; 
    ?>

    <div class="container">
        <form class="d-flexbox text-center" autocomplete="off"'>
            <label class="" for="ValEur">Valeur en Euros ou en Bitcoins</label>
            <input type="text" class="form-control" name='ValEur' placeholder="Valeur en Eur ou Bit">

            <label for="sens">Sens de conversion</label>
            <select name="sens" id="sens">
                <option <?php if ($op ==="EtoB") {echo 'selected';} ?> value="EtoB">Euros => Bitcoins</option>
                <option <?php if ($op ==="BtoE") {echo 'selected';} ?> value="BtoE">Bitcoins => Euros</option>
            </select><br>
            <button class="btn btn-block">Convertir</button>
        </form>
    </div>

    <?php
    echo '<div class="container" style="font-size : 25px; text-align:center">';
    if ($op === "EtoB" && $eur !== null) {
        echo $eur . ' Eur = ' . $conv1 . ' Bitcoins';
    }
    if ($op === "BtoE" && $eur !== null) {
        echo $eur . ' Bitcoins = ' . $conv2 . " Eur";
    }
    // if ($_GET['ValEur'] = null) {
    if (!empty($_GET)) {
    // if ($eur = null) {
        echo "";
    }
    echo '</div>';
    ?>
</body>

<style>
    .btn {
        background-color: #AFEEEE;
        animation-duration: 3s;
        animation-name: bgc;
        animation-iteration-count: infinite;
    }

    @keyframes bgc {

        50% {
            background-color: #20B2AA;
        }
    }

    .btn {
        color: #0c4d78;
        animation-duration: 1.5s;
        /*animation-name : fc;*/
        animation-iteration-count: infinite;
    }

    @keyframes fc {

        50% {
            color: #AFEEEE;
        }
    }

    /* .btn:hover{    
    color :#191c71;
    position:absolute;
    animation-duration : 5s;
    animation-name : fc;
    animation-iteration-count: infinite;
}
@keyframes fc{
    10%{left:1px; top:1px;}   
    20%{right:1px; bottom:1px;}   
    30%{left:1px; top:1px;}   
    40%{right:1px; bottom:1px;}   
    50%{left:1px; top:1px;}   
    60%{right:1px; bottom:1px;}   
    70%{left:1px; top:1px;}   
    80%{right:1px; bottom:1px;}   
    90%{left:1px; top:1px;}      
} */

    label {
        /*margin-left: auto;
        margin-right: auto;*/
        /*margin: auto 0;*/
        /*position: absolute;*/
        /*top: 50%;*/
        /*left: 50%;*/
        display : inline; 
        text-align : center ;
    }
</style>

</html>