<?php
   echo "<meta charset='UTF-8'>";
   //HTTP
   //POST - formulários
   //GET  - hyperlinks
   //REQUEST - para os dois

   @$nome = $_POST['nome'];
   @$posto = $_POST['posto'];
   @$pontos= $_POST['pontos'];
   @$medalha= $_POST['medalha'];

   echo $nome."<br>";
   echo $posto."<br>";
   echo $pontos."<br>";
   echo $medalha."<br>";

   //versão email
   
   /*
     <?php
       $to      = 'instrutor.romulo@gmail.com';
       $subject = 'Seletiva WorldSkills';
       $message = 'oi';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
   
   */

//versão banco de dados

//Crie variáveis para configuração
$servername = "localhost";
$database = "megaponto";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}
 
//Mensagem de sucesso quebrando linha
echo "Connected successfully<br>";
 
//variável para DML
$sql = "INSERT INTO ranking (nome, posto, pontos, medalha) VALUES ('$nome', '$posto', '$pontos', '$medalha')";

//verificando a DML e executando pesquisa
if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//fECHANDO CONEXÃO 
mysqli_close($conn);
 
  


?>