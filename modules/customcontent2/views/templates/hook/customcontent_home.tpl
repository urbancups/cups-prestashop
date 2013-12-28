{foreach from=$xml->item item=itemPos name=items}
  {if $itemPos->hook == 'home'}{assign var='homeHook' value='true'}{/if}
{/foreach}
{if isset($homeHook) && $homeHook=='true'}
<div id="customcontent_home2">
  <ul class="customcontent-home clearfix">
    {foreach from=$xml->item item=item name=items}
      {if $item->hook == 'home'}
      <li class="item{if $smarty.foreach.items.last} last_item{/if}{if $smarty.foreach.items.iteration%4 == 0} last_in_line{elseif $smarty.foreach.items.iteration%4 == 1} first_in_line{/if} span3">
        <div class="bot-shadow"></div>
        {if $item->img && $item->url}
          <a href="{$item->url}">
            <img width="{$item->imgWidth}" height="{$item->imgHeight}" src="{$img_path}{$item->img}" alt=""/>
          </a>
        {/if}
        {if $item->img && !$item->url}
            <img width="{$item->imgWidth}" height="{$item->imgHeight}" src="{$img_path}{$item->img}" alt=""/>
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