<form
    action="<?php echo SITE_ROOT ?>/controllers/login.php"
    method="GET"
>
    <legend>Login</legend>

    <fieldset class="mb-4">
        <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="seuemail@exemplo.com" name="senha" required>
            <label for="floatingInput">E-mail</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="email" required>
            <label for="floatingPassword">Senha</label>
        </div>
        <div class="mt-2 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
        </div>
    </fieldset>
    
    <button
        type="submit"
        class="btn btn-danger"
        name="submit"
        value="logar"
    >
        Entrar
    </button>

    <a href="/esqueci-a-senha" id="link-senha">Esqueceu sua senha?</a>
</form>