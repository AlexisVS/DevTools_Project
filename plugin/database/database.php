<? php
  $user = "root";
  $pass = "";
  try {

/* -------------------------------- Connexion ------------------------------- */

    $db = new PDO('mysql:host=localhost;dbname=devTools_project', $user, $pass);

/* --------------------------------- Queries -------------------------------- */

    $db->query('INSERT INTO `test` (`ligneUne`) VALUES ('bonjour')');

/* ------------------------------- Try & catch ------------------------------ */

    foreach($db->query('SELECT * from FOO') as $row) {
      print_r($row);
    }
    $db = null;
  } catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
  }

?>