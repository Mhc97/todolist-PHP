<?php
    $title = "Page d'Acceuil";
    $nav = "index";
    require "header.php";
?>

<main role="main" class="container">

  <div class="starter-template">
    <h1>Todolist</h1>

    <?php
  $todo_list = array();

  // Ajouter des éléments à la liste
  array_push($todo_list, "Finir de parcourir les idées de projets en développement web PHP");
  array_push($todo_list, "En apprendre plus sur le développement PHP");
  array_push($todo_list, "Réussir 100 pompes");
  array_push($todo_list,"pousser 150 kilos au développer coucher");
  array_push($todo_list,"devenir un développeur Back-end");
  array_push($todo_list,"faire mon site sécuriser");
  array_push($todo_list,"devenir developpeur junior avant 29 ans");
  array_push($todo_list,"avoir 2/3 revenue avant 30 ans");
  array_push($todo_list,"atteindre les 70kg-78kg de muscle sec");
  array_push($todo_list, "avoir pour la première fois des abdos mdr");
  array_push($todo_list,"devenir un être supprème");

  // Afficher la liste de tâches
  echo "<ul>";
  foreach ($todo_list as $list) {
    echo "<li>" . $list . "</li>";
  }
  echo "</ul>";
?>

<?php
  require "footer.php";
?>




