$(document).ready(function(){
	$("#s").autocomplete({
		minLength: 2,
		select: function(event, ui){
			$("#s").val(ui.item.label)
		},
		
		source: function(request, response)
		{
			$.ajax({
				url: basePath + "alumnos/searchjson",
				date: {
					term: request.term	
				},
				dataType: "json",
				source: function(data){
					response($.map(data, function(el, index){
						return{
							value: el.Alumno.nombre,
							nombre: el.Alumno.nombre,
						};
					}));
				}
			});
			}
		}).data("ui-autocomplete")._renderItem ) function(ul, item){
		return $("<li></li>")
		.data("item.autocomplete", item)
		.append("<a></a>")
		.appendTo(ul)
	};
});