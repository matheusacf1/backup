<!DOCTYPE html>
<html>
<head>
  <title> Cupom salarial </title>

  <link href="./estilo_cupom.css"
  type="text/css" rel="stylesheet">
  <head>
    <body>
      <h1> <strong>Cupom salarial</strong></h1>
      <form action="cupom_salarial.html" method="post">
        <div>
          <label for ="cpf">CPF:</label>
          <input type="texta" value="<?php echo $_POST['_cpf']; ?>" id="cpf"/>
        </div>
        <div>

          <label for ="funcionario">Funcionario:</label>
          <input type="text" id="funcionario"/>
        </div>
        <div>
          <label for ="idade">Idade:</label>
          <input type="texta" id="idade"/>
        </div>
        <div>
          <label for ="salario base">Salario Base:</label>
          <input type="text" id="salario base"/>
        </div>
        <div>
          <label for ="salario familia">Salario Familia:</label>
          <input type="text" id="salario familia"/>
        </div>
        <div>
          <label for ="abono">Abono:</label>
          <input type="text" id="abono"/>
        </div>
        <div>
          <label for ="salario bruto">Salario Bruto:</label>
          <input type="text" id="salario bruto"/>
        </div>
        <div>
          <label for ="inss">INSS:</label>
          <input type="text" id="inss"/>
        </div>
        <div>
          <label for ="salario liquido">Salario Liquido:</label>
          <input type="text" id="salario liquido"/>
        </div>

        <div class = "butoon">
          <button type="button"> Imprimir</button>
        </div>





      </form>
    </body>
    </html>
