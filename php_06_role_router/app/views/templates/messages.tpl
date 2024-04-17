{if $msgs->hasErrors()}
    <h4 style="color:red;">Wystąpiły błędy: </h4>
    <ol>
        {foreach  $msgs->getErrors() as $msg}
            {strip}
                <li>{$msg}</li>
            {/strip}
        {/foreach}
    </ol>
{/if}

{if $msgs->hasInfos()}
    <h4 style="color:orange">Informacje: </h4>
    <ol class="inf">
        {foreach  $msgs->getInfos() as $msg}
            {strip}
                <li>{$msg}</li>
            {/strip}
        {/foreach}
    </ol>
{/if}