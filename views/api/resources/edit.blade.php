@include(theme_path('cello::api.widgets.menu'))

<div class="row-fluid">

	<div class="page-header">
		<h2>{{ $page_name }} 
			@if ( ! empty($page_desc))
			<small>{{ $page_desc ?: '' }}</small>
			@endif
		</h2>
	</div>

	{{ $form }}

</div>

<script>
jQuery(function($) {
	$('select').select2();
});
</script>
