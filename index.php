<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizzaria</title>
    <link rel="iconcut" href="pizzaicon.png">
    <script type="text/javascript">
        function primeiraFuncao(value){
            alert("Agradecemos a preferência, volte sempre!");
        }
    </script>
</head>

<body>
    <header>
        <div class="ft">
        <img src="pizzaicon.png" alt="" height="100px">
    <h1>Lali Gi Pizzas</h1>
</div>
    <p>Bem-vindos a pizzaria da Lali &  Gi</p>
 </header>
<div class="piz">
 <img src="pizzapeperoni.jpg" alt="" height="100px">
 <img src="margherita.jpeg" alt="" height="100px">
 <img src="pizzaqueijo.jpg" alt="" height="100px">
</div>
    <h2>confira nossos cardápios</h2>
    <table>
        <thead>
            <tr>
                <th>
                    SABORES
                </th>
                <th>
                   VALORES
                </th>
            <tr>

        </thead>

        <tbody>
            <tr>
                <td>
                    Pizza de Calabresa
                </td>
                <td> R$ 40,00 </td>

            </tr>

            <tr>
                <td> Pizza de Pepperoni </td>
                <td> R$ 40,00 </td>
            </tr>
            <tr>
                <td>Pizza Portuguesa</td>
                <td> R$ 45,00 </td>
            </tr>

            <tr>
                <td> Pizza de Coração</td>
                <td> R$ 50,00 </td>
            </tr>

            <tr>
                <td>Pizza Margherita </td>
                <td>R$ 35,00 </td>
            </tr>

            <tr>
                <td> Pizza de Quatro Queijos </td>
                <td> R$ 40,00 </td>
            </tr>

            <tr>
                <td> Pizza ninho com nutella</td>
                <td> R$ 35,00 </td>
            </tr>
            <tr>
                <td> Pizza de chocolate com morango </td>
                <td> R$ 35,00 </td>
            </tr>


        </tbody>

    </table>
 <div class="car">
    <table>
        <thead>
            <tr>
                <th> BEBIDAS </th>
                <th> VALORES</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td> Coca-Cola 2L</td>
                <td> R$ 15,00 </td>
            </tr>

            <tr>
                <td>Guárana Fruki 2L</td>
                <td> R$10,00</td>
            </tr>
            <tr>
                <td>Sprit 2L</td>
                <td> R$ 11,00</td>
            </tr>
            <tr><td> Fanta Uva</td>
            <td>R$ 10,00 </td></tr>
            <tr>
                <td>
                    água sem gás 500ml
                </td>
                <td> R$ 5,00</td>
            </tr>







        </tbody>
    </table>
    </div>









    <?php
    $servename = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pizzarias";

    //criar a conexão
    
    $conn = new mysqli($servename, $username, $password, $dbname);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $codigo = $_POST["nome"];
        $nome = $_POST["nome"];
        $celular = $_POST["celular"];
        $endereco = $_POST["endereco"];

        $sql = "INSERT INTO pizzaria (codigo, nome, celular, endereco) VALUES ('$codigo', '$nome', '$celular', '$endereco') "; 
        if ($conn->query($sql) === TRUE) {
            echo "";
        } else {
            echo "Erro:" . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();

    $conn = new mysqli($servename, $username, $password, $dbname);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sabor = $_POST["sabor"];
        $quantidade = $_POST["quantidade"];
        $tamanho = $_POST["tamanho"];
        $bebidas = $_POST["bebidas"];

        $sql2 = "INSERT INTO pedido ( sabor, quantidade,tamanho, bebidas) VALUES ('$sabor', '$quantidade', '$tamanho', '$bebidas' ) ";

        if ($conn->query($sql) === TRUE) {
            echo "Novo registro criado com sucesso";
        } else {
            echo "Erro:" . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();

    ?>
    <h4>eifolghda</h4>

    

  <div class="fo"><form action="" method="post">
   <h2>Cadastro do cliente</h2>
        Nome: <input type="text" name="nome" id=""> <br>
        celular: <input type="number" name="celular" id="" required autocomplete="off"> <br>
        endereço: <input type="text" name="endereco" id="" required> <br>  <br><br>

       
       
        <h2>faça seu pedido!</h2>

        sabor: <input type="text" name="sabor" id="" required> <br>

    quantidade: <input type="text" name="quantidade" id="" required> <br>
     tamanho: <input type="text" name="tamanho" id="" required> <br>
      bebidas: <input type="text" name="bebidas" id="" required> <br>
       


       <div class="sub"> <input type="submit" value="cadastrar"></div>


    </form> </div> 
  <div class="bt">
    <input type="button" value="lali&gi" onclick="primeiraFuncao()">
 </div>
    <footer>
        <p>pizzaria&copyLali&Gi</p>
    </footer>
</body>

</html>