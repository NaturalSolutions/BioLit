jQuery( document ).ready(function() {


	//Changer qq label si on est connecté en anglais
	var alterLabelForLangInLoginBlock = function(){

		if(jQuery('body').hasClass('not-logged-in') && language == 'en'){
			jQuery('a#inscription').text('SIGN UP');
			jQuery('a#connexion').html('Already a member?<br><span>Log in</span></a>');



		}

	};


	
	var alterLogoIfEnLang = function(){
		
		

        if(language == 'en'){
        	
          jQuery('a.logo img').attr('src',base_url+'/sites/all/themes/bootstrap/images/logo_en.jpg');
        }
        
	}

	window.init = function() {
		alterLabelForLangInLoginBlock();
		alterLogoIfEnLang();
	}

	
	init(); // true	
});

