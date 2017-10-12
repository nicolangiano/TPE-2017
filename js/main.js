function getLocalServerURL(){
	return ((location.href.split('/'))[0])+'//'+((location.href.split('/'))[2]) + "/";
}

function getSiteURL(){
	return getLocalServerURL() + 'Web2/TPE2017/templates/';
}

function loadSiteComponent(path, target, callback){
  $.ajax({
    method: 'GET',
    url: getSiteURL() + path + '.tpl',
    dataType: 'html',
    success: function(data){
      $(target).html(data);
      if( typeof callback !== 'undefined' && jQuery.isFunction( callback ) ){
			callback();
		}
    },
    error: function(){
      alert(getSiteURL() + path);
    }
  })
}


function sendContentToServer(path, FormID, callback){
	$.ajax({
		type: "POST",
		url: getSiteURL() + path,
		data: $('#'+FormID).serialize(),
		success: function(data){
			if( typeof callback !== 'undefined' && jQuery.isFunction( callback ) ){
				callback(data);
			}
		},
		error: function( jqXHR, textStatus, errorThrown){
			alert(textStatus);
		}
	})
}

/*
 * Metodos asociados al CRUD - API
 * */

function createvoluntariadoHTML(voluntariado){
	$.ajax({
		url: 'js/templates/voluntariado.mst',
		success: function(template){
			var result = Mustache.render(template, voluntariado);
			$('#listvoluntariados').append(result);
		},
		error: function(){
			alert('se rompio todo');
		}
	})
}

function listvoluntariados(){
	$.ajax({
		method: 'GET',
		url:'api/voluntariado',
		datatype: 'JSON',
		success: function(voluntariados){
			$('#content').html('');
			$('#content').html('<ul id="listvoluntariados"></ul>');
			$.each( voluntariados, function( key, voluntariado ){
				createvoluntariadoHTML(voluntariado);
			});
		},
	    error: function () {
	    	alert('Error');
		}
	});
}

function createtypeHTML(type){
	$.ajax({
		url: 'js/templates/type.mst',
		success: function(template){
			var result = Mustache.render(template, type);
			$('#listtypes').append(result);
		},
		error: function(){
			alert('se rompio todo');
		}
	})
}

function listtypes(){
	$.ajax({
		method: 'GET',
		url:'api/type',
		datatype: 'JSON',
		success: function(types){
			$('#content').html('');
			$('#content').html('<ul id="listtypes"></ul>');
			$.each( types, function( key, type ){
				createtypeHTML(type);
			});
		},
	    error: function () {
	    	alert('Error');
		}
	});
}

function deletevoluntariado(idvoluntariado) {
	$.ajax({
		method: 'DELETE',
		url: 'api/voluntariado/'+idvoluntariado,
		datatype: 'JSON',
		success: function(data) {
			console.log(data);
			$('#voluntariado'+idvoluntariado).remove();
		},
		error: function(){
			alert('Error! No se ha borrado el voluntariado');
		}
});
}

function deletetype(idType) {
	$.ajax({
		method: 'DELETE',
		url: 'api/type/'+idtype,
		success: function(data) {
			console.log(data);
			if (data)
				$('#type'+idType).remove();
			else
				alert('No se puede borrar el tipo porque hay voluntariados asociados');
		},
		error: function(){
			alert('Error! No se ha borrado el tipo de voluntariado');
		}
	});
}

function modifytype() {

	$.ajax({
		method: 'PUT',
		url: 'api/type/'+$('#updatetype').attr('data-id') +"/"+$('#typeInput').val(),
		datatype: 'JSON',
		success: function(data){
			console.log(data);
			alert('se modifico el tipo de voluntariado correctamente');
		},
		error: function(){
			alert('No se hay modificado el tipo de voluntariado');
		}

	});
}

function savetype() {
	$.ajax({
		method: 'POST',
		url:'api/type/'+$('#typeInputAdd').val(),
		datatype: 'JSON',
		success: function(){
			 alert('Se guardó con exito la sección');
		},
			error: function () {
				 alert("Se produjo un erro de red. Charlale al admin para que lo arregle");
		}
	});
}

function modifyvoluntariado() {
	$.ajax({
		method: 'PUT',
		url:'api/voluntariado/'+$('#updatevoluntariado').attr('data-id') +"/"+$('#voluntariadoName').val()+"/"+$('#voluntariadoAuthor').val(),
		datatype: 'JSON',
		success: function(data){
			console.log(data);
			alert('se modifico el voluntariado correctamente');
		},
		error: function(){
			alert('No se hay modificado el voluntariado');
		}
	});
}

function savevoluntariado(){
	var datos = new FormData($('#uploadvoluntariado')[0]);
    datos.append('voluntariadotype', $('select[name="voluntariadotype"] option:selected').attr('id'));

	$.ajax({
		method: 'POST',
		url:'api/voluntariado',
		datatype: 'JSON',
        data: datos,
	    contentType : false,
	    processData : false,
		success: function(data){
			 alert(data);
		},
	    error: function () {
	    	 alert("Se produjo un erro de red. Charlale al admin para que lo arregle");
		}
	});
}


$(function(){

  $('nav li.action > a').click(function(event){
	 event.preventDefault();
  	 loadSiteComponent(this.id, '#content');
  })


  /* para que al cargar el catalogo se clickee automaticamente
   * el primer elemento de la lista
   */
  $('body').on('click', '#catalog', function(){
		event.stopPropagation();
	  	loadSiteComponent(this.id, '#content', function(){
	  		$('.list-group-item:first').click();
	  	});
  })

  $('body').on('click', '.list-group-item.sec', function(event){
		event.preventDefault();
		loadSiteComponent('voluntariados-list/'+ this.id, '#voluntariadoList');
		$(this).addClass('active');
		$(this).siblings().removeClass('active');
  })

  $('body').on('click', '#listtypes a.modifytype', function(event){
		event.stopPropagation();
	  id=$(this).data("id");
	  loadSiteComponent('editFormtype', '#content', function(){
		  $('#updatetype').attr('data-id', id);
	  });
  })

  $('body').on('click', '#listtypes a.deletetype', function(event){
	event.stopPropagation();
	var id=$(this).data("id");
	deletetype(id);
  });

  /*
   * Se envía el contenido del formulario de login.
   */
  $('body').on('click', '#loginForm button', function(event){
	  event.preventDefault();
	 event.stopPropagation();
	  sendContentToServer($(this).attr('data-action'), 'loginForm', function(data){
		  $('body').html(data);
	  });
  })

  $('body').on('click', '#logout', function(event){
	event.stopPropagation();
	loadSiteComponent('logout', 'body');
  })

  $('body').on('click', '#listvoluntariados a.deletevoluntariado', function(event){
		event.stopPropagation();
	var id=$(this).data("id");
	deletevoluntariado(id);
  });


  $('body').on('click', '#updatetype', function(event){
	event.preventDefault();
	event.stopPropagation();
	modifytype();
  });

  $('body').on('click', '#updatevoluntariado', function(event){
		event.preventDefault();
		event.stopPropagation();
		modifyvoluntariado();
	  });

  $('body').on('click', '#admin-list-voluntariados', function(event){
	event.stopPropagation();
	listvoluntariados();
  });


  $('body').on('click', '#admin-list-type', function(event){
		event.stopPropagation();
	listtypes();
  });

  $('body').on('click', '#addvoluntariado', function(event){
		event.preventDefault();
		event.stopPropagation();
	savevoluntariado();
  });

  $('body').on('click', '#addtype', function(event){
		event.preventDefault();
		event.stopPropagation();
		savetype();
	});

  $('body').on('click', '#listvoluntariados a.modifyvoluntariado', function(event){
		event.stopPropagation();
	  id=$(this).data("id");
	  loadSiteComponent('editFormvoluntariado', '#content', function(){
		  $('#updatevoluntariado').attr('data-id', id);
	  });
  })



})
