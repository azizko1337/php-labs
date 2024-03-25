{extends file="../templates/main.tpl"}

{block name="content"}
    <header class="page-header">
        <h1 class="page-title">Kalkulator kredytowy</h1>
	</header>


    <form>
        <div class="row">
            <div class="col-sm-4">
                <label for="amount">Kwota</label>
                <input class="form-control" type="number" placeholder="Kwota" name="amount" id="amount" value={$amount}>
            </div>
            <div class="col-sm-4">
                <label for="years">Dlugosc (w latach)</label>
                <input class="form-control" type="number" placeholder="Dlugosc (w latach)" name="years" id="years" value={$years}>
            </div>
            <div class="col-sm-4">
                <label for="percentage">Oprocentowanie</label>
                <input class="form-control" type="number" placeholder="Oprocentowanie" name="percentage" id="percentage" value={$percentage}>
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

    {if isset($result)}
        <h3><b>Wynik</b></h3>
        <p>
            <b>{$result}</b>PLN miesięcznie
        </p>
    {/if}
{/block}