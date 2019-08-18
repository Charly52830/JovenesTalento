/* Funciones personales */

//Función para habilitar los popovers
$(function () {
	$('[data-toggle="popover"]').popover()
})

function increaseValue() {
	var value = parseFloat(document.getElementById('promedio').value, 10);
	value = isNaN(value) ? 0 : value;
	value=(value * 10)+1
	value=value/10
	if(value > 10)
		value=10
	document.getElementById('promedio').value = value;
}

function decreaseValue() {
	var value = parseFloat(document.getElementById('promedio').value, 10);
	value = isNaN(value) ? 0 : value;
	value=(value * 10)-1
	value=value/10
	if(value < 0)
		value=0
	document.getElementById('promedio').value = value;
}

function predict() {
	//Género
	var sex=document.getElementsByName('genderRadio')
	var sexval=undefined
	if( sex[0].checked ) 
		sexval=sex[0].value
	else
		sexval=sex[1].value
	
	//Promedio
	var gpa=document.getElementById('promedio').value
	
	//Libros
	var libros=document.getElementById('libros').value
	
	//Estado civil
	var edoCivil=document.getElementsByName('parentRadio')
	var edoCivilVal=undefined
	if( edoCivil[0].checked ) 
		edoCivilVal=edoCivil[0].value
	else
		edoCivilVal=edoCivil[1].value
	
	//Edad padre
	var edadPadre=document.getElementById('edadPadre').value
	
	//Relación esfuerzo exito
	var relEsfuerzoExito=document.getElementById('relacionEsfuerzoExito').value
	
	//Apoyo académico
	var sumApoyoAcademico=0
	for(var i=1;i<=4;i++) {
		var pregunta=document.getElementsByName('apoyoAcademico'+i)
		var valPregunta=0
		for(var j=0,len=pregunta.length;j<len;j++) if(pregunta[j].checked) 
			valPregunta=parseInt(pregunta[j].value)
		sumApoyoAcademico+=valPregunta
	}
	
	//Ambiente escolar
	var sumAmbienteEscolar=0
	for(var i=1;i<=5;i++) {
		var pregunta=document.getElementsByName('ambienteEscolar'+i)
		var valPregunta=0
		for(var j=0,len=pregunta.length;j<len;j++) if(pregunta[j].checked) 
			valPregunta=parseInt(pregunta[j].value)
		sumAmbienteEscolar+=valPregunta
	}
	
	//Presión familiar
	var sumPresionFamiliar=0
	for(var i=1;i<=4;i++) {
		var pregunta=document.getElementsByName('presionEscolar'+i)
		var valPregunta=0
		for(var j=0,len=pregunta.length;j<len;j++) if(pregunta[j].checked) 
			valPregunta=parseInt(pregunta[j].value)
		sumPresionFamiliar+=valPregunta
	}
	
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById("prediccion").innerHTML = this.responseText;
		}
	};
	xmlhttp.open("GET", "Predict.php?sex="+sexval+"&gpa="+gpa+"&libros="+libros+"&edoCivil="+edoCivilVal +
				"&edadPadre="+edadPadre+"&rel="+relEsfuerzoExito+"&apoyoAcademico="+sumApoyoAcademico +
				"&ambienteEscolar="+sumAmbienteEscolar+"&presionFamiliar="+sumPresionFamiliar, true);
	xmlhttp.send();
}

