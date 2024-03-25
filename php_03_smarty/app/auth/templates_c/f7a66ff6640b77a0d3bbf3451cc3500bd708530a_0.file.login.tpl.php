<?php
/* Smarty version 3.1.48, created on 2024-03-26 00:20:49
  from 'C:\xampp\htdocs\php_03_smarty\app\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_660206d154a7f6_59684199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f7a66ff6640b77a0d3bbf3451cc3500bd708530a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03_smarty\\app\\auth\\login.tpl',
      1 => 1711408687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660206d154a7f6_59684199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1197082843660206d15463d6_78211902', "content");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block "content"} */
class Block_1197082843660206d15463d6_78211902 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1197082843660206d15463d6_78211902',
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
				
				<form>
					<div class="top-margin">
						<label for="login">Login <span class="text-danger">*</span></label>
						<input type="text" class="form-control" name="login" id="login" value=<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
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
