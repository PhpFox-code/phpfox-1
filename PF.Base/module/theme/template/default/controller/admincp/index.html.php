
<div class="themes">
{foreach from=$themes item=theme}
	<article class="image_load" data-src="{$theme.image}">
		<h1>
			<a href="{url link='admincp.theme.manage' id=$theme.theme_id}">
				<span>{$theme.name|clean}</span>
				<em>Edit</em>
			</a>
		</h1>
	</article>
{/foreach}
</div>