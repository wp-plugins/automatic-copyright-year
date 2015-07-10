jQuery(document).ready(function($) {
	//If the footer element exists
	if($('footer').length){
		//Finds the element that contains [wpsos_year] and doesn't have any children (to eliminate the possibility of removing binded events from child objects
		var element = $('footer *').filter(function(){ 
			return $(this).text().toLowerCase().indexOf('[wpsos_year]') !== -1 && $(this).children().length == 0 ;
			});
		//If element found
		if(element){
			//Get the original text
			var originTxt = element.html();
			//Replace the year in the original text
			element.html(originTxt.replace('[wpsos_year]', new Date().getFullYear()));
		}
	}
});