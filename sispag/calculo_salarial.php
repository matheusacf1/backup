<!DOCTYPE html>
<html>
<head>
  <title> Calculo salarial </title>

  <link href="./estilo_formulario.css"
  type="text/css" rel="stylesheet">

  <head>
    <body>

      <h1> <strong>Calculo salarial</strong></h1>
      <form action="cupom_salarial.php" method="post">
        <div>
          <label for ="cpf">CPF:</label>
          <input type="text" name="_cpf" id="cpf"
        </div>
        <div>
          <br/>
          <label for ="funcionario">Funcionario:</label>
          <input type="text" name="_funcionario" id="funcionario"/>
        </div>
        <div>
          <label for ="nascimento">Ano/Nascimento:</label>
          <input type="texta" name="nascimento" id="nascimento"/>
        </div>
        <div>
          <label for ="salario base">Salario Base:</label>
          <input type="text" name="_salBase" id="salario base"/>
        </div>
        <div>
          <label for ="filhos">Qtd filhos:</label>
          <input type="text" name="_filhos" id="filhos"/>
        </div>

        <div class = "butoon">
          <button type="submit"> Calcular</button>
        </div>



      </form>
    </body>
    </html>
