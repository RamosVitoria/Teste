<br><br><br><br><BR><BR>

<style>
    .tamanho{
    max-width: 600px;
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, 0%);
    place-items: center;
    }
</style>
<div class="tamanho">
<!--FORMULÁRIO DO MÉTODO POST-->
<!--ACTION É QUEM VAI RECEBER-->
     <form action="?pagina=receber" method="POST">
     <h1 class="h3 mb-3 fw-normal">LOGAR</h1>
    <div class="form-floating">
        <!--NAME É A VARIÁVEL DO PHP-->
        <!--ID É A VARIÁVEL DO JAVASCRIPT-->
        <label for="floatingInput">Digite Login</label>
      <input type="text" class="form-control" name="login" id="username" placeholder="Digite Usuário" required>
    </div>
    <div class="form-floating">
    <label for="floatingPassword">Password</label>
      <input type="password" class="form-control" name="senha" id="inputPassword" placeholder="Password" required>
    </div>
    <br>
    <center><button class="btn btn-primary w-80 py-1" type="submit">Fazer Login</button></center>
</div>
     </div>
</form>