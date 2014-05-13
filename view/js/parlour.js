document.getElementById('ask-btn').addEventListener('click',function(e){
	document.getElementById('question-section').setAttribute('class','');
});
document.getElementById('hide-btn').addEventListener('click',function(e){
	document.getElementById('question-section').setAttribute('class','hidden');
});

document.getElementById('navigation').addEventListener('click',function(e){
	var child = this.children;
	var pages = document.getElementById('pages').children;
	for(var i=0;i<child.length;i++){
		var temp = child[i].firstElementChild;
		if(temp===e.target){ //firstElementChild -> span
			temp.className = 'selected';
			pages[i].className = 'nav-page';
		}
		else{
			temp.className = '';
			pages[i].className = 'hidden';
		}
	}
});

document.getElementById('gallery_thumbnail_list').addEventListener('click',function(e){
	var cld = this.children;
	var image = document.getElementById('gallery-main-image');
	for(var c = 0 ; c < cld.length ; c++ ){
		if(e.target === cld[c].firstElementChild){
			var selected = e.target.getAttribute('src');
			image.setAttribute('src',selected);
		}
	}
});

window.addEventListener('load',function(e){
	var init_image = document.getElementById('gallery_thumbnail_list').children[0].firstElementChild.getAttribute('src');
	document.getElementById('gallery-main-image').setAttribute('src',init_image);
});