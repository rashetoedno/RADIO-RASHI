<?php
include("inc/header.php");
?>

<div>
    <h2 class="zabavleniq">КОНВЕРТОР</h2>
</div>

<?php
include("inc/navigames.php");
?>

<div class="converter">
    <div class="euro">
        <h2>евро</h2>
        <input type="number" id="euroInput">
        <br>
        <br>
        <button class="btn" id="euroBtn">Конвертиране в левове</button>
    </div>
    <div class="bgn">
        <h2>лв</h2>
        <input type="number" id="bgnInput">
        <br>
        <br>
        <button class="btn" id="bgnBtn">Конвертиране в евро</button>
    </div>
</div>
<br>
<br>
<br>
        <div class="vsbuttonob">
            <div class="buttonob" id="btsn">
                <div class="buton">
                    <a class="atr" id="atrsn" href="rashi convertor.php">НАЧАЛО</a>
                </div>
            </div>
        </div>

<?php
include("inc/fouter.php");
?>


<script src="jsfiles/rashi convertor.js"></script>