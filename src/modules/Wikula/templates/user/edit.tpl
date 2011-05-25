{include file='user/menu.tpl' tag=$tag}

<div id="wikula">
  <div class="page">

    {if $submit eq $smarty.const.Preview}
    <div id="wikula_editpreview">
      [ <a href="#wikula_editform">{gt text='Go to the edit form'}</a> ]
      <br /><br />
      {$body|transform}
    </div>
    {/if}

    <form name="editform" action="{modurl modname='Wikula' type='user' func='edit' fqurl=true}" method="post" enctype="application/x-www-form-urlencoded">
    

    <input type="hidden" name="previous" value="{$previous|safehtml}" />
    <input type="hidden" name="tag" value="{$tag|safehtml}" />

    <!-- We need to escape ALL entity refs before display so we display them _as_ entities instead of interpreting them
    // hence htmlspecialchars() instead of htmlspecialchars_ent() which UNescapes entities! -->
    {editor}
    <textarea id="wikula_body" name="body" cols="10" rows="10" style="width:98%;height:500px">{$body|htmlspecialchars}</textarea>



    <!-- note add Edit
    // We need to escape ALL entity refs before display so we display them _as_ entities instead of interpreting them
    // so we use htmlspecialchars on the edit note (as on the body)-->
    {gt text='Please add a note with details of your submission'}:<br />
    <input id="wikula_note" name="note" size="40" type="text" value="{$note|htmlspecialchars}" style="width: 98%;" />
    <br />
    <!--//finish-->

    {if $canedit eq true}<input name="submit" type="submit" value="{gt text='Store'}" accesskey="s" />&nbsp;{/if}
    <input name="submit" type="submit" value="{gt text='Preview'}" accesskey="p" />&nbsp;
    <input name="submit" type="submit" value="{gt text='Cancel'}" accesskey="c" />
    {if $submit eq $smarty.const.Preview}
    &nbsp;[ <a href="#wikula_editpreview">{gt text='Go to the preview'}</a> ]
    {/if}

    </form>
  </div>

   
</div>
