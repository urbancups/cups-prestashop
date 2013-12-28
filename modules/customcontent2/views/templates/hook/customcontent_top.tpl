{if $page_name == 'index'}
{foreach from=$xml->item item=itemPos name=items}
  {if $itemPos->hook == 'top'}{assign var='TopHook' value='true'}{/if}
{/foreach}
{if isset($TopHook) && $TopHook=='true'}
<div id="customcontent_top2" class=" clearfix">
  <ul class="customcontent-top">
    {foreach from=$xml->item item=item name=items}
      {if $item->hook == 'top'}
      <li class="item {if $smarty.foreach.items.first} first_item{elseif $smarty.foreach.items.last} last_item{/if}">
        {if $item->img && $item->url}
          <a href="{$item->url}">
            <img src="{$img_path}{$item->img}" alt=""/>
          </a>
        {/if}
        {if $item->img && !$item->url}
            <img src="{$img_path}{$item->img}" alt=""/>
        {/if}
        {if $item->html->$html_lang}    
        <div class="item_html">
          {$item->html->$html_lang}
        </div>
        {/if}
      </li>
      {/if}
    {/foreach}
  </ul>
</div>
{/if}
{/if}