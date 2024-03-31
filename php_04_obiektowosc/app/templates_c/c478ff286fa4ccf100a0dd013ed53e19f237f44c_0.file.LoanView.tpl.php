<?php
/* Smarty version 3.1.45, created on 2024-03-31 14:31:52
  from 'C:\xampp\htdocs\php_04_obiektowosc\app\LoanView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.45',
  'unifunc' => 'content_660957b8bc5963_75640298',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c478ff286fa4ccf100a0dd013ed53e19f237f44c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_04_obiektowosc\\app\\LoanView.tpl',
      1 => 1711887596,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660957b8bc5963_75640298 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_726140347660957b8bbd7a2_58002897', "content");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block "content"} */
class Block_726140347660957b8bbd7a2_58002897 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_726140347660957b8bbd7a2_58002897',
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
