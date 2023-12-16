

// scriptVideo.js

function checkQuiz() {
    var q1 = document.getElementById("q1").value;
    var q2 = document.getElementById("q2").value;

    // Affichez les réponses dans la console (à des fins de débogage)
    console.log("Réponse 1 :", q1);
    console.log("Réponse 2 :", q2);

    // Vous pouvez maintenant traiter les réponses comme nécessaire
    // Par exemple, les envoyer à un serveur, les stocker dans une base de données, etc.

    // Pour l'instant, affichons simplement une alerte avec les réponses
    alert("Réponses enregistrées :\nQuestion 1: " + q1 + "\nQuestion 2: " + q2);
}
