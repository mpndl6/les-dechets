<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Site Interactif</title>
</head>
<body>
    <div id="video-container">
        <!-- Intégration de la vidéo -->
        <iframe width="560" height="315" src="vide/jjk.mp4" frameborder="0" allowfullscreen></iframe>
    </div>
    <div id="question-container">
        <?php
        // Exemple de questions générées dynamiquement
        $questions = [
            "Quelle est votre couleur préférée?",
            "Quel est votre plat préféré?",
            // Ajoutez d'autres questions
        ];

        foreach ($questions as $index => $question) {
            $inputId = "question" . $index;
            echo '<label>' . $question . ' <input type="text" id="' . $inputId . '"></label>';
        }
        ?>
    </div>
    <script src="scriptVideo.js"></script>
</body>
</html>
