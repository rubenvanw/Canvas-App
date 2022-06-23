<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>expo</title>
    <link rel="stylesheet" href="https://85748.ict-lab.nl/Minor%20Verdieping/expo/css/home.css">
    <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div id="container-canvas" class="container-canvas">
            <div id="canvas" class="canvas"></div>
        </div>
        <div id="container-options" class="container-options">
            <div class="container-options-wrapper">
                <ul>
                    <li><a href="https://85748.ict-lab.nl/Minor%20Verdieping/expo">Canvas</a></li>
                    <li><a href="https://85748.ict-lab.nl/Minor%20Verdieping/expo?overview">Overview</a></li>
                    <?php
                    if (isset($_SESSION["user"])) {
                        echo "<a href='https://85748.ict-lab.nl/Minor%20Verdieping/expo?loginpage'>Logout</a>";
                    } else {
                        echo "<a href='https://85748.ict-lab.nl/Minor%20Verdieping/expo?loginpage'>Login</a>";
                    }
                    ?>

                </ul>
            </div>
            <div class="container-options-wrapper">
                <span>Adjust Stroke Weight</span>
                <div id="strokeSlider"></div>
            </div>
            <div class="container-options-wrapper">
                <span>Adjust Stroke Color</span>
                <!-- <div id="colorPicker"></div> -->
                <input type="color" id="strokeColor" value="#000000" />
            </div>
            <div class="container-options-wrapper">
                <span>Select Background Color</span>
                <!-- <div id="colorPickerBackground"></div> -->
                <br>
                <span>(Clears Canvas)</span>
                <br>
                <input type="color" id="backgroundColor" value="#FFFFFF" />
            </div>
            <div class="container-options-wrapper">
                <span>Clear The Canvas</span>
                <br>
                <button id="clearButton">X</button>
            </div>
            <div class="container-options-wrapper">
                <span>Name Your Creation</span>
                <br>
                <input type="text" id="titel" value="" required>
            </div>
            <div class="container-options-wrapper">
                <span>Submit Canvas Or Download</span>
                <br>
                <button id="submit" class="">Submit</button>
                <button id="download" class="">Download</button>
                <br>
            </div>
        </div>
    </div>
    <!-- <div id="container" class="container mx-auto flex flex-col justify-center items-center">
        <input type="text" id="titel" placeholder="titel" value="titel" class="text-4xl placeholder-black py-4 text-center outline-none">
        <div id="canvas" class="border border-gray-800"></div>
        <div class="w-full h-full">

            <div class="text-center">
                <button id="submit" class="px-6 py-2 border-solid border-2 border-black mt-4">Submit</button>
            </div>
        </div>

    </div>
    <nav class="flex justify-center py-6">
        <ul class="flex gap-x-6">
            <li><a href="https://85748.ict-lab.nl/Minor%20Verdieping/expo">Home</a></li>
            <li><a href="https://85748.ict-lab.nl/Minor%20Verdieping/expo?overzicht">Overview</a></li>
            <li><a href="">Login</a>
        </ul>
    </nav> -->
    <script src="scripts/canvas.js"></script>
</body>

</html>