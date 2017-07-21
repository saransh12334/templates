
									function move1() {
								    var elem = document.getElementById("myBar1"); 
								    var width = 1;
								    var id = setInterval(frame,3);
								    function frame() {
								        if (width >= 100) {
								            clearInterval(id);
								        } else {
								            width++; 
								            elem.style.width = width + '%'; 
								            elem.innerHTML = width * 1 + '%';
								        }
								    }
								}
								function move2() {
								    var elem = document.getElementById("myBar2"); 
								    var width = 1;
								    var id = setInterval(frame, 3);
								    function frame() {
								        if (width >= 80) {
								            clearInterval(id);
								        } else {
								            width++; 
								            elem.style.width = width + '%'; 
								            elem.innerHTML = width * 1 + '%';
								        }
								    }
								}
								function move3() {
								    var elem = document.getElementById("myBar3"); 
								    var width = 1;
								    var id = setInterval(frame, 3);
								    function frame() {								     
if (width >= 90)
 clearInterval(id);
  } else {
			  width++; 
		   elem.style.width = width + '%'; 
	   elem.innerHTML = width * 1 + '%';
	} 
  }
}

$(function() {
		$('.pop').on('click', function() {
			$('.imagepreview').attr('src', $(this).find('img').attr('src'));
			$('#imagemodal').modal('show');   
		});	
	});