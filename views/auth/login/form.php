<div class="wrapper">
    <div class="container" id="login">
        <form
            action="<?php echo SITE_ROOT ?>/controllers/login.php"
            method="GET"
            id="loginForm"
        >
            <legend>Login</legend>

            <fieldset>
                <label for="email">E-mail</label>
                <input
                    type="email"
                    id="email"
                    class="input-only-text"
                    name="email"
                    required
                />
            </fieldset>
            
            <fieldset>
                <label for="senha">Senha</label>
                <input
                    type="password"
                    id="exampleInputPassword1"
                    class="input-only-text"
                    name="senha"
                    required
                />
            </fieldset>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Lembrar-me</label>
            </div>

            <button
                type="submit"
                class="btn btn-danger"
                style="margin-bottom: 20px;"
                id="botao-login"
                name="submit"
                value="logar"
            >
                Entrar
            </button>

            <a href="esquecisenha.html" id="link-senha">Esqueceu sua senha?</a>
        </form>
    </div>
</div>