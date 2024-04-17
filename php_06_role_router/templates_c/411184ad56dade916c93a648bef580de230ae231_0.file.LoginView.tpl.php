<?php
/* Smarty version 3.1.45, created on 2024-04-17 14:34:01
  from 'C:\xampp\htdocs\php_06_role_router\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_661fc1b93b9f44_37387174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '411184ad56dade916c93a648bef580de230ae231' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_role_router\\app\\views\\LoginView.tpl',
      1 => 1713357240,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661fc1b93b9f44_37387174 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1978591245661fc1b93b5b06_53318385', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block "content"} */
class Block_1978591245661fc1b93b5b06_53318385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1978591245661fc1b93b5b06_53318385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
        <h1 class="page-title">Formularz logowania</h1>
    </header>

    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3 class="thin text-center">Zaloguj się</h3>
                <p class="text-center text-muted">Nie zapomnij podać loginu i hasła.</p>
                <hr>

                <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
                    <div class="top-margin">
                        <label for="login">Login <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="login" id="login" value=<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
>
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
<?php
}
}
/* {/block "content"} */
}
