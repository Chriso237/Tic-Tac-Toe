<?php
//Page relative aux informations sur la partie
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f4f4;
      text-align: center;
      margin: 50px;
    }

    h2 {
      color: #333;
    }

    form {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 8px;
      color: #555;
    }

    select, input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
      font-size: 16px;
    }

    input[type="submit"] {
      background-color: #4caf50;
      color: #fff;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
  <title>Choix de difficulté</title>
</head>
<body>
  <h2>Choisissez le niveau de difficulté et votre symbole</h2>
  <form action="traitement_partie.php" method="post">
    <label for="difficulty">Niveau de difficulté :</label>
    <select id="difficulty" name="difficulty">
      <option value="easy">Facile</option>
      <option value="medium">Moyen</option>
      <option value="hard">Difficile</option>
    </select>

    <label for="symbol">Symbole :</label>
    <select id="symbol" name="symbol">
      <option value="X">X</option>
      <option value="O">O</option>
    </select>

    <input type="submit" value="Commencer le jeu" onclick="submitForm()">
  </form>

  <script>
    function submitForm() {
      alert('Formulaire soumis !');
    }
  </script>
</body>
</html>
