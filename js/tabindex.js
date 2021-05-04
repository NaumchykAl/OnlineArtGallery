$(document).ready(function (){
	init();
	
	function init(){
		var sliderModule = createSliderModule();
		sliderModule.start('.slider-my-cools', [
			'img/ракушка13.png',
			'img/ракушка12.png',
			'img/ракушка9.png'
		]);
		
		var sliderModule2 = createSliderModule();
		sliderModule2.start('.slider-my-bads',[
			'img/долина.png',
			'img/сакура.png',
			'img/ракушки.png'
		]);
	}
	
	
	$('.popup').hide();
	
	
	$('.showPreview').click(function (){
		var errors = validAndGetErrors();
		if (errors.length > 0){
			$('.errors').text('validation is fail');
			for(var i = 0; i < errors.length; i++){
				var error = errors[i];
				var p = $('<p>');
				p.text(error);
				$('.errors').append(p);
			}
			return;
		}else{
			$('.errors').empty();
		}
		
		fillName();
		
		fillSex();
		
		fillCity();
		
		fillAge();
		
		fillBorder();
	});
	
	$('.close').click(function (){
		$('.popup').hide();
	});
	
	$('.adv').hover(function (){
		$('.header').text('Smile');
	});
	
	$('.left .button').click(function (){
		$('.left .button').removeClass('active');
		$(this).addClass('active');
	});
	
	$('.sea .header').click(removeImageBlock);
	
	$('#addNewBlock').click(function (){
		var name = $('#nameNewSea').val();
		var url = $('#urlNewSea').val();
		
		var copy = $('.template .sea').clone();
		copy.find('.header').text(name);
		copy.find('.image img').attr('src', url);
		
		$('.gallery').append(copy);
	});
	
	function removeImageBlock(){
		var headerIntoSea = $(this);
		var SeaBlock = $(this).parent();
		SeaBlock.remove();
	}

	function validAndGetErrors(){
		var errors = [];
		var name = $('#login').val();
		if (name.length < 2){
			errors.push("name must be more than 2 symbol");
		}
		
		var pass = $('.password').val();
		if (pass == '123'){
			errors.push("pass not able 123");
		}
		
		var sex = $("[name=sex]:checked").val();
		if (!sex){
			errors.push("sex not choosen");
		}
		
		var age = getAge();
		if(!Number.isInteger(age)){
			errors.push("Select date");
		}
		if (age > 20){
			errors.push("Too old");
		}
		
		//RGB
		//#ab00f2
		var borderColor = $('.border-color').val();
		if (borderColor[1] != '0'
			|| borderColor[2] != '0'){
			errors.push("No Red!");
		}
		
		return errors;
	}
	
	function getAge(){
		var dateStr = $('.birthday').val();
		var date = Date.parse(dateStr);
		var age = (Date.now() - date)/1000/60/60/24/365;
		age = Math.round(age);
		return age;
	}

	function fillName(){
		var name = $('#login').val();
		$('.preview span.name').text(name);
	}

	function fillSex(){
		var sex = $("[name=sex]:checked").val();
		if (sex == 'm'){
			$('.preview span.sex').text('man');
		}else if (sex == 'f'){
			$('.preview span.sex').text('woman');
		}
	}

	function fillCity(){
		var city = $(".data .city option:checked").val();
		switch(city){
			case '1':
				$('.preview .city').text('capital');
				$('.cityImg').attr('src', 'https://static.tonkosti.ru/tonkosti/table_img/g192/0d0d/45612039.jpg');
				break;
			case '2':
				$('.preview .city').text('in another country');
				$('.cityImg').attr('src', 'http://clubtravel39.ru/wp-content/uploads/2017/01/Luchshie-plyazhi-Bali-dlya-kupaniya.jpg');
				break;
			case '3':
				$('.preview .city').text('not so far');
				$('.cityImg').attr('src', 'https://amazingtrip.org/wp-content/uploads/2012/08/balangan_beach.jpg');
				console.log('3');
				break;
		}
	}

	function fillAge(){
		var age = getAge();
		$('.preview .age').text(age);
	}
	
	function fillBorder(){
		var borderSize = $('#sizeInput').val() - 0;
		$('.preview').css('border-width', borderSize);
		// '#ff00ab'
		var borderColor = $('.border-color').val();
		$('.preview').css('border-color', borderColor);
	}
});

