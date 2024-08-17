<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color palette generator</title>

    <link rel="stylesheet" href="styles.css" >
</head>
<body>
    <div class="palette-wrapper">
        <h3 class="main-title">Random color palette generator</h3>
        <div class="grid-palette">
            <?php
                for ($i = 0; $i < 12; $i++) {
                    // red 0xFF0000
                    // green 0x00FF00
                    // blue 0x0000FF

                    $randValueHexStr = dechex(mt_rand(0, 0xFFFFFF)); //liczba szestnastkowa jako string
                    // funkcja mt_rand() losuję liczbę od 0 do 0xFFFFFF
                    $hexColor = "#" . str_pad($randValueHexStr, 6, "0", STR_PAD_LEFT); 
                    // funkcja str_pad() dopisuje do zmiennej $randValueHexStr, tak eby ciąg miał 6 znaków, uzupełnia 0 (zerazmi) od lewej strony
                        echo "<div class='color-card'> ";
                        echo "   <div class='color-display' style='background-color: {$hexColor};'> </div> ";
                        echo "  <p class='color-code'>{$hexColor}</p>";
                        echo "</div>";
                }
            ?>
        </div>

        <div class="controls">
            <button id="btnGenerate" onclick="window.location.reload();">New color palette</button>

        </div>
    </div>
    
</body>
</html>