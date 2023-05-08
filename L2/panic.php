<?php
$Ans1 = "Blank";
$Ans2 = "Blank";
$Ans3 = "Blank";
$Ans4 = "Blank";
$Ans5 = "Blank";
$Ans6 = "Blank";
$Ans7 = "Blank";
$Ans8 = "Blank";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["Ans1"])) {
        $Ans1 = "Answer is required";
      } else {
        $Ans1 = $_POST["Ans1"];
      }
    
    if (empty($_POST["Ans2"])) {
        $Ans2 = "Answer is required";
      } else {
        $Ans2 = $_POST["Ans2"];
      }
    if (empty($_POST["Ans3"])) {
        $Ans3 = "Answer is required";
      } else {
        $Ans3 = $_POST["Ans3"];
      }
    if (empty($_POST["Ans4"])) {
        $Ans4 = "Answer is required";
      } else {
        $Ans4 = $_POST["Ans4"];
      }
    if (empty($_POST["Ans5"])) {
        $Ans5 = "Answer is required";
      } else {
        $Ans5 = $_POST["Ans5"];
      }
    if (empty($_POST["Ans6"])) {
        $Ans6 = "Answer is required";
      } else {
        $Ans6 = $_POST["Ans6"];
      }
    if (empty($_POST["Ans7"])) {
        $Ans7 = "Answer is required";
      } else {
        $Ans7 = $_POST["Ans7"];
      }
    if (empty($_POST["Ans8"])) {
        $Ans8 = "Answer is required";
      } else {
        $Ans8 = $_POST["Ans8"];
      }
    
};


?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h1>Er heerst paniek...</h1>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="Ans1">Welk dier zou je nooit als huisdier willen hebben?</label><br>
            <input type="text" id="Ans1" name="Ans1"><br>
            <label for="Ans2">Wie is de belangrijkste persoon in je leven?</label><br>
            <input type="text" id="Ans2" name="Ans2"><br>
            <label for="Ans3">In welk land zou jij graag willen wonen?</label><br>
            <input type="text" id="Ans3" name="Ans3"><br>
            <label for="Ans4">Wat doe je als je je verveelt?</label><br>
            <input type="text" id="Ans4" name="Ans4"><br>
            <label for="Ans5">Met welk speelgoed speelde je als kind het meest?</label><br>
            <input type="text" id="Ans5" name="Ans5"><br>
            <label for="Ans6">Bij welke docent spijbel je het liefst?</label><br>
            <input type="text" id="Ans6" name="Ans6"><br>
            <label for="Ans7">Als je $ 100.000,- had, wat zou je kopen?</label><br>
            <input type="text" id="Ans7" name="Ans7"><br>
            <label for="Ans8">Wat is je favoriete bezigheid?</label><br>
            <input type="text" id="Ans8" name="Ans8"><br>
            <input type="submit" value="Send">
        </form>

        <p>lol</p>

        <h1>Results:</h1>
        <p>Er heerst paniek in het konkrijk <var><? echo $Ans3 ?></var>, Koning <var><? echo $Ans6 ?></var> is ten einde raad en als koning <var><? echo $Ans6 ?></var> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <var><? echo $Ans2 ?></var>.</p>
        <p>"<var><? echo $Ans2 ?></var>! Het is een ramp! Het is een schande!"</p>
        <p>"Sire, Majesteit, Uwe Luidruchtigheid, was is er aan de hand?"</p>
        <p>"Mijn <var><? echo $Ans1 ?></var> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <var><? echo $Ans5 ?></var> voor hem gekocht!"</p>
        <p>"Majesteit, uw <var><? echo $Ans1 ?></var> komt vast vanzelf weer terug?"</p>
        <p>"Ja, da's lek en aardig, maar hoe moet ik in  de tussentijd <var><? echo $Ans8 ?></var> leren?"</p>
        <p>"Maar Sire, daar kunt u toch uw <var><? echo $Ans7 ?></var> voor gebruiken."</p>
        <p>"<var><? echo $Ans2 ?></var>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
        <p>"<var><? echo $Ans4 ?></var>, Sire."</p>

    </body>
</html>
</body>
</html>