<?php
/* Smarty version 3.1.45, created on 2024-04-15 23:22:30
  from 'C:\xampp\htdocs\php_05_kontroler_glowny\app\loan\LoanView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_661d9a965b9ae2_13908635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7255aeabcf81e94d2008a56a25ac30d3e2ad1752' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_05_kontroler_glowny\\app\\loan\\LoanView.tpl',
      1 => 1713216146,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_661d9a965b9ae2_13908635 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_778029984661d9a965b1fe9_64277414', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../../templates/main.tpl");
}
/* {block "content"} */
class Block_778029984661d9a965b1fe9_64277414 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_778029984661d9a965b1fe9_64277414',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <header class="page-header">
        <h1 class="page-title">Kalkulator kredytowy</h1>
    </header>


    <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
loanCompute">
        <div class="row">
            <div class="col-sm-4">
                <label for="amount">Kwota</label>
                <input class="form-control" type="number" placeholder="Kwota" name="amount" id="amount" min="0" value=<?php echo $_smarty_tpl->tpl_vars['form']->value->amount;?>
>
            </div>
            <div class="col-sm-4">
                <label for="years">Dlugosc (w latach)</label>
                <input class="form-control" type="number" placeholder="Dlugosc (w latach)" name="years" id="years" min="0" value=<?php echo $_smarty_tpl->tpl_vars['form']->value->years;?>
>
            </div>
            <div class="col-sm-4">
                <label for="percentage">Oprocentowanie</label>
                <input class="form-control" type="number" placeholder="Oprocentowanie" name="percentage" id="percentage" step="0.01" min="0" value=<?php echo $_smarty_tpl->tpl_vars['form']->value->percentage;?>
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

    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->monthlyInstallment))) {?>
        <h3><b>Wynik</b></h3>
        <p>
            Rata to: <b><?php echo $_smarty_tpl->tpl_vars['res']->value->getPretty();?>
</b>PLN miesięcznie
        </p>
    <?php }
}
}
/* {/block "content"} */
}
