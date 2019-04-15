function myFunctionAdd() {
	 var x = document.getElementById("mySecret");
	 var y = document.getElementById("myDostyp");
	 var z = document.getElementById("addSecret");
	 var t = document.getElementById("readSecret");
	 var bb = document.getElementById("buttonAdd");
	 document.getElementById("buttonOk").innerHTML = "Добавить секрет";
	 t.style.display = "none";
	if (x.style.display != "none") {
		x.style.display = "none"; 
	 	y.style.display = "none";  
		 z.style.display = "inline-block";
		 bb.style.display = "inline-block";
		 document.getElementById("buttonOk").innerHTML = "Отмена";
	} 
	else {
		x.style.display = "inline-block";  
	 	y.style.display = "inline-block"; 
		z.style.display = "none";
		bb.style.display = "none"; 
		document.getElementById("buttonOk").innerHTML = "Добавить секрет";
	} 
}

/* $('#buttonAdd').click(function() {
	console.log("sfsfs");
	$.ajax({
		type: 'POST',
		url: '/api/v1/addSecret/',
		data: {'id': 1,'name' : 'Lol', 'text' : 'Hello1'},
		dataType: 'json',
		cache: false,
		success: function(result) {
			console.log("sfsfs");
			console.log(result);
			}
		});
	}); */


$(document).ready( function() {

	$('#buttonAdd').click(function() {
		console.log("sfsfs");
		$.ajax({
			type: 'POST',
			url: '/api/v1/addSecret/',
			data: {'name' : 'Lol', 'text' : 'Hello1'},
			dataType: 'json',
			cache: false,
			success: function(result) {
				console.log("sfsfs");
				console.log(result);
				}
			});
		});

	$.ajax({
		type: 'GET',
		url: '/api/v1/getList/',
		data: 'id=testdata',
		dataType: 'json',
		cache: false,
		success: function(result) {
			console.log(result);
			var t = "";
			var my = result.my;
			for (var i = 0; i < my.length; i++){
				var tr = "<tr>";
				tr += "<td>"+my[i].text+"</td>";
				tr += "<td>"+my[i].id+"</td>";
				tr += "<td class='choicem' data-id=" + my[i].id + ">"+my[i].name+"</td>";
				tr += "<td class='del' data-del=" + my[i].id + ">Удалить</td>";
				tr += "</tr>";
				t += tr;
			}
			document.getElementById("tableMySecret").innerHTML += t;

			/* var t = "";
			var notmy = result.notmy;
			for (var i = 0; i < notmy.length; i++){
				var tr = "<tr>";
				tr += "<td>"+notmy[i].text+"</td>";
				tr += "<td>"+notmy[i].id+"</td>";
				tr += "<td class='choicem' data-id=" + notmy[i].id + ">"+notmy[i].name+"</td>";
				tr += "<td class='del' data-del=" + notmy[i].id + ">Удалить</td>";
				tr += "</tr>";			
				t += tr;
			}
			document.getElementById("tableDostypnoSecret").innerHTML += t; */

			$('.choicem').click(function() {
				var flag=1;
				console.log($(this).data( "id"));


				for (var i = 0; i < my.length; i++) {
					if(my[i].id==$(this).data( "id")){
						//console.log(my[i].text);
						var flag=0;
						myFunctLook();
						document.getElementById("lookSecterName").innerHTML = my[i].name;
						document.getElementById("lookSecterText").innerHTML = my[i].text;
						break;
					}
				}

/* 				if(flag) {
					for (var i = 0; i < notmy.length; i++){
						if(notmy[i].id==$(this).data( "id")){
							//console.log(my[i].id);
							myFunctLook();
							document.getElementById("lookSecterName").innerHTML = notmy[i].name;
							document.getElementById("lookSecterText").innerHTML = notmy[i].text;
							break;
						}
					}
				} */
			});	

			$('.del').click(function() {
				var flag=1;
/* 				console.log($(this).data( "del")); */
				klick=$(this).data( "del");
				delSecter(my, klick, this);

				
/* 				for (var i = 0; i < my.length; i++) {
					if(my[i].id==$(this).data( "del")){
						console.log(my[i].id);
						this.parentNode.parentNode.removeChild(this.parentNode);
						var flag=0;
						break;
					}
				}

				if(flag) {
					for (var i = 0; i < notmy.length; i++){
						if(notmy[i].id==$(this).data( "del")){
							console.log(my[i].id);
							this.parentNode.parentNode.removeChild(this.parentNode);
							break;
						}
					}
				} */
			});	


		}
    });
});

function myFunctLook() {
	var x = document.getElementById("mySecret");
	var y = document.getElementById("myDostyp");
	var z = document.getElementById("readSecret");
	x.style.display = "none"; 
	y.style.display = "none";  
	z.style.display = "inline-block";
	document.getElementById("buttonOk").innerHTML = "Ok";
}


function delSecter(my, klick, clickElem){
	console.log(my);
	console.log(klick);
	for (var i = 0; i < my.length; i++) {
		if(my[i].id==klick){
			console.log(my[i].id);
			clickElem.parentNode.parentNode.removeChild(clickElem.parentNode);//

			$.ajax({
				type: 'POST',
				url: '/api/v1/delSecret/',
				data: {'id':my[i].id},
				dataType: 'json',
				cache: false,
				success: function(result) {
					console.log("sfsfs");
					console.log(result);
					}
				});

			break;
		}
	}
}