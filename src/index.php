<!DOCTYPE html>  
     <head>  
      <title>Bienvenido</title>
     </head>   

     <body>  
      <h1>Bienvenido</h1>  
      <p><?php echo 'PHP version: ' . phpversion(); ?></p>  
      <?  
       $database ="db";
       $user = "userdb";
       $password = "userPass";  
       $host = "mysql";  

       $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);  
       $query = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_TYPE='BASE TABLE'");  
       $tables = $query->fetchAll(PDO::FETCH_COLUMN);  

        if (empty($tables)) {
          echo "<p>No hay tablas en la base de datos: \"{$database}\".</p>";
        } else {
          echo "<p>La Base de Datos: \"{$database}\" tiene las siguientes tablas:</p>";
          echo "<ul>";
            foreach ($tables as $table) {
              echo "<li>{$table}</li>";
            }
          echo "</ul>";
        }
        ?>
    </body>
</html>