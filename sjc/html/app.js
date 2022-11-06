let sliderwrap = document.queryselector('.sliderwrap');
let slider = document.queryselector('.slider');
let cloneswidth;
let sliderwidth;
let clones = [];
let disablescroll= false;
let scrollpos;

let items = [...document.queryselectorall('.slider-item')];
let images =[...document.queryselectorall('img-giv')];

images.foreach((image,idx)  {
	image.style.backgroundimage = 'url(./images/${idx+1}.jpg)'
})