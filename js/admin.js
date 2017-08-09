//Esconde administradores para os gestores
jQuery(document).ready(function() {
	var element = jQuery('#the-list tr');
	roles = new Array();
	element.each(function(){
		roles.push(jQuery(this).find('td.column-role'));
	});
	var t = 0;
	roles.forEach(function(entry){
		if (entry.text() != "Corretor") {
			t++;
			var id = entry.parent().attr('id');
			/*console.log(id);*/
			jQuery('#'+id+'').hide();
		}
	});
	console.log('Oi');
});

//Esconde administradores para os gestores
jQuery(document).ready(function() {
	jQuery('#role').find('option').hide();
	jQuery('#role').find('[value="corretor"]').attr('selected','').show();
});