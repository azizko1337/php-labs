{extends file="main.tpl"}

{block name="content"}
    <header class="page-header">
        <h1 class="page-title">Formularz logowania</h1>
    </header>

    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="thin text-center">Zaloguj się</h3>
                <p class="text-center text-muted">Nie zapomnij podać loginu i hasła.</p>
                <hr>

                <form action="{$conf->action_url}login" method="post">
                    <div class="top-margin">
                        <label for="login">Login <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="login" id="login" value={$form->login}>
                    </div>
                    <div class="top-margin">
                        <label for="password">Hasło <span class="text-danger">*</span></label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-action" type="submit">Zaloguj</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{/block}
