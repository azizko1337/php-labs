<?php
/* Smarty version 3.1.48, created on 2024-03-25 23:52:29
  from 'C:\xampp\htdocs\php_03_smarty\app\loan.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6602002dad6516_74191059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33a683578dcc1f769438187139c805cb284a9a5a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_03_smarty\\app\\loan.tpl',
      1 => 1711407148,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6602002dad6516_74191059 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12938240336602002dac9a92_16982415', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block "content"} */
class Block_12938240336602002dac9a92_16982415 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12938240336602002dac9a92_16982415',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
        <h1 class="page-title">Kalkulator kredytowy</h1>
	</header>


    <form>
        <div class="row">
            <div class="col-sm-4">
                <label for="amount">Kwota</label>
                <input class="form-control" type="number" placeholder="Kwota" name="amount" id="amount" value=<?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
>
            </div>
            <div class="col-sm-4">
                <label for="years">Dlugosc (w latach)</label>
                <input class="form-control" type="number" placeholder="Dlugosc (w latach)" name="years" id="years" value=<?php echo $_smarty_tpl->tpl_vars['years']->value;?>
>
            </div>
            <div class="col-sm-4">
                <label for="percentage">Oprocentowanie</label>
                <input class="form-control" type="number" placeholder="Oprocentowanie" name="percentage" id="percentage" value=<?php echo $_smarty_tpl->tpl_vars['percentage']->value;?>
>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-12 text-right">
                <input class="btn btn-action" type="submit" value="Oblicz">
            </div>
        </div>
        <br><br><br>
    </form>

    <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <h3><b>Wynik</b></h3>
        <p>
            <b><?php echo $_smarty_tpl->tpl_vars['result']->value;?>
</b>PLN miesięcznie
        </p>
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
        <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ol>
        <?php }?>
    <?php }
}
}
/* {/block "content"} */
}
