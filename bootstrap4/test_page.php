<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" /> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .parallax {
  /* The image used */
  background-image: url("https://d2j6dbq0eux0bg.cloudfront.net/startersite/images/33513499/1597923712131.jpg");

  /* Set a specific height */
  min-height: 500px; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.logo img{
	max-width: 252px;
    max-height: 132px;
}
.catagories_desktop,.featured_product,.featured_product_content,.contc_details{
	text-align:center;
}
.catagories_desktop span{
	padding: 0 24px 8px;
}
.des_item{
text-align:left;
}

.fb_img .fa:hover {
    opacity: 0.7;
}
.fb_img .fa{
	text-align: center;
}
.fb_img .fa-facebook-square::before {
  
  color: #3B5998;
  padding: 5px 3px 0px 10px;
  font-size: 20px;
  width: 50px;
  text-decoration: none;
  margin: 5px 4px;
  border-radius: 3px;
  
}
.fb_img .fa-instagram::before{
	color: red;
	font-size: 29px;
	margin-right:4px;
}
.fb_img .fa-whatsapp::before{
	color: white;
	background-color: #54cc61;
	border-radius: 7px;
    font-size: 26px;
	margin-right:4px;
}
.footer_icon .fa-facebook::before {
	background: black;
  color: white;
  font-size: 10px;
  margin: 5px 2px;
  padding: 2px 2px 0px 5px;
}
.footer_icon .fa{
	color:black;
	
}
.footer_icon a{
	background:rgba(220,220,220,0.8);
}
.info{
	border-top: 3px solid rgba(220,220,220,0.8);
}
.order-info, .powered-info ,.powered-info a{
	color: #999;
}
.powered-info .fa::before{
	padding:2px;
}
.navbar-dark .navbar-nav .nav-link{
	color: white;
}

.des_item {
	width:100%;
    height:166px;
}
.des_item ,.des_item button
{
	font-size: 16px;
	font-family: "Proxima Nova",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Arial,sans-serif;
	font-weight:600;
	line-height: 1.3;
}
  </style>
</head>
<body>
<div class="parallax">
<nav class="navbar navbar-expand-sm navbar-expand-xs navbar-dark">
    <div class="collapse navbar-collapse" id="navigationbar">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Store </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact us</a>
            </li>
            
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link fa fa-phone" href="#">9830835054</a>
            </li>
            <li class="nav-item">
                <a class="nav-link fa fa-instagram" href="#"></a>
            </li>
			<li class="nav-item">
                <a class="nav-link fa fa-facebook" href="#"></a>
            </li>
			<li class="nav-item">
                <a class="nav-link fa fa-whatsapp" href="#"></a>
            </li>
			<li class="nav-item">
                <a class="nav-link fa fa-shopping-bag" href="#"></a>
            </li>
        </ul>
    </div>
</nav>
<div class="px-4 text-white">
<div class="logo py-4"><img src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1604831850.jpg" alt="Hooghly Mart"></div>
<h1 class="display-1 font-weight-bold pb-4" style="font-family: 'Crimson Text';">Hooghly Mart</h1>
<div class="row">
<div class="col-md-6">
<h2 class="pb-4 text-height-2" style="font-family: 'Maven Pro';">We clean & wash with care so that they can be used directly. No more stinky hands cleaning fishes.</h2>
</div>
</div>
<h2 class="  pb-4" style="font-family: 'Maven Pro';">Free home delivery: Konnagar to Baidyabati
</h2>
<button type="button" class="btn my-5" style="background-color: rgba(254, 217, 119, 1.0);">See menu</button>
</div>
</div>
<span class="fa fa-search float-right sticky-top rounded-circle shadow p-3 bg-white mt-n4" style="font-size:36px;"></span>
<div class="container" style="margin-top:30px">

  <div class="catagories_desktop">
	<span>Fresh Water</span>
	<span>Meat & Poultry</span>
	<span>Sea Fish</span>
  </div>
  <div class="row featured_product">
  <div class="col-md-3 col-6" style="margin:auto;">
    <h3>Featured Products</h3>
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1623314475.jpg" title="BHETKI WEIGHT 3KG AND ABOVE (ভেটকি কাটা) CUT IN PIECES" alt="BHETKI WEIGHT 3KG AND ABOVE (ভেটকি কাটা) CUT IN PIECES" class="grid-product__picture" srcset="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1623314475.jpg 1x, https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1623314474.jpg 2x" style="width: 100%; height: 100%;">
	</div></div>
	<div class="row des_item pl-2 py-3 ">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">BHETKI WEIGHT 3KG AND ABOVE (ভেটকি কাটা) CUT IN PIECES<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹650.00</div>
	</div>
  </div>
  </div>
  </div>
	<div class="row featured_product">
	<div class="col-md-12" style="margin:auto;">
    <h3>Sea Fish</h3>
	<div class="row">
	<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605448060.jpg" style="width:100%;height:100%" title="POMFRET (মাঝারি সাইজ পমফ্রেট) 7/8 PCS PER KG" alt="POMFRET (মাঝারি সাইজ পমফ্রেট) 7/8 PCS PER KG">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">POMFRET (মাঝারি সাইজ পমফ্রেট) 7/8 PCS PER KG<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹500.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605550031.jpg" style="width:100%;height:100%" title="LARGE POMFRET (বড়ো পমফ্রেট) 3/4 COUNT" alt="LARGE POMFRET (বড়ো পমফ্রেট) 3/4 COUNT">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">LARGE POMFRET (বড়ো পমফ্রেট) 3/4 COUNT<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1"><strike>₹700.00</strike><br>₹650.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605867846.jpg" style="width:100%;height:100%" title="BOMBAY DUCK OR LOTEY (লোটে) 10/12 COUNT" alt="BOMBAY DUCK OR LOTEY (লোটে) 10/12 COUNT">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column">BOMBAY DUCK OR LOTEY (লোটে) 10/12 COUNT<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4"><strike>₹180.00</strike><br>₹150.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605982470.jpg" style="width:100%;height:100%" title="BHOLA (ভোলা মাছ) MEDIUM SIZE" alt="BHOLA (ভোলা মাছ) MEDIUM SIZE">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">BHOLA (ভোলা মাছ) MEDIUM SIZE<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹350.00</div>
	</div>
  </div>
</div>
</div>
  </div>
  </div>
  <div class="row featured_product">
	<div class="col-md-6" style="margin:auto;">
    <h3>Meat & Poultry</h3>
	<div class="row">
	<div class="col-md-6 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1606293036.jpg" style="width:100%;height:100%" title="Chicken (চিকেন)" alt="Chicken (চিকেন)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">Chicken (চিকেন)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1"><strike>₹230.00</strike><br>₹220.00</div>
	</div>
  </div>
</div>
<div class="col-md-6 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	
<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1606293212.jpg" style="width:100%;height:100%" title="Mutton (খাসির মাংস)" alt="Mutton (খাসির মাংস)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">Mutton (খাসির মাংস)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹700.00</div>
	</div>
  </div>
</div>
</div>
</div>
</div>
<div class="row featured_product">
	<div class="col-md-12" style="margin:auto;">
    <h3>Fresh Water</h3>
	<div class="row">
	<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605204130.jpg" style="width:100%;height:100%" title="HILSA (ইলিশ) 1kg to 1.2kg WHOLE CUT IN PIECES" alt="HILSA (ইলিশ) 1kg to 1.2kg WHOLE CUT IN PIECES">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">HILSA (ইলিশ) 1kg to 1.2kg WHOLE CUT IN PIECES<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹1800.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605226057.jpg" style="width:100%;height:100%" title="HILSA (ইলিশ) 700gram to 900gram" alt="HILSA (ইলিশ) 700gram to 900gram">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">HILSA (ইলিশ) 700gram to 900gram<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹1400.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605137186.jpg" style="width:100%;height:100%" title="HILSA (ইলিশ) 500gram to 600gram WHOLE CUT IN PIECES" alt="HILSA (ইলিশ) 500gram to 600gram WHOLE CUT IN PIECES">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">HILSA (ইলিশ) 500gram to 600gram WHOLE CUT IN PIECES<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹1000.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605266012.jpg" style="width:100%;height:100%" title="PABDA (পাবদা)(10/12 COUNT PER KG)" alt="PABDA (পাবদা)(10/12 COUNT PER KG)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">PABDA (পাবদা)(10/12 COUNT PER KG)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹500.00</div>
	</div>
  </div>
</div>
</div>
<div class="row">
	<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605340070.jpg" style="width:100%;height:100%" title="LIVE KATLA <2kg (জ্যান্ত গোটা কাতলা) WHOLE CUT IN PIECES" alt="LIVE KATLA <2kg (জ্যান্ত গোটা কাতলা) WHOLE CUT IN PIECES">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">LIVE KATLA <2kg (জ্যান্ত গোটা কাতলা) WHOLE CUT IN PIECES<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹320.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1606273379.jpg" style="width:100%;height:100%" title="KATLA CUT (কাতলা কাটা)" alt="KATLA CUT (কাতলা কাটা)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">KATLA CUT (কাতলা কাটা)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹420.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605327986.jpg" style="width:100%;height:100%" title="LIVE RUI 1KG &amp; ABOVE (জ্যান্ত গোটা রুই) CUT IN PIECES" alt="LIVE RUI 1KG &amp; ABOVE (জ্যান্ত গোটা রুই) CUT IN PIECES">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">LIVE RUI 1KG & ABOVE (জ্যান্ত গোটা রুই) CUT IN PIECES<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹250.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605395375.jpg" style="width:100%;height:100%" title="RUI CUT (রুই কাটা)" alt="RUI CUT (রুই কাটা)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">RUI CUT (রুই কাটা)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹300.00</div>
	</div>
  </div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605605436.jpg" style="width:100%;height:100%" title="LARGE TIGER PRAWN (বাগদা চিংড়ি)" alt="LARGE TIGER PRAWN (বাগদা চিংড়ি)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">LARGE TIGER PRAWN (বাগদা চিংড়ি)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1"><strike>₹900.00</strike><br>₹850.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605646344.jpg" style="width:100%;height:100%" title="PRAWN CHAPDA (চাপড়া চিংড়ি) 30/35 COUNT" alt="PRAWN CHAPDA (চাপড়া চিংড়ি) 30/35 COUNT">
	</div></div>
	<div class="row des_item pl-2 py-3 ">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">PRAWN CHAPDA (চাপড়া চিংড়ি) 30/35 COUNT<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1"><strike>₹450.00</strike><br>₹400.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605605965.jpg" style="width:100%;height:100%" title="SCAMPI OR GOLDA (গলদা চিংড়ি) 15-20 COUNT per kg" alt="SCAMPI OR GOLDA (গলদা চিংড়ি) 15-20 COUNT per kg">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">SCAMPI OR GOLDA (গলদা চিংড়ি) 15-20 COUNT per kg<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹800.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1623314475.jpg" style="width:100%;height:100%" title="BHETKI WEIGHT 3KG AND ABOVE (ভেটকি কাটা) CUT IN PIECES" alt="BHETKI WEIGHT 3KG AND ABOVE (ভেটকি কাটা) CUT IN PIECES">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">BHETKI WEIGHT 3KG AND ABOVE (ভেটকি কাটা) CUT IN PIECES<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹650.00</div>
	</div>
  </div>
</div>
</div>
<div class="row">
	<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605867202.jpg" style="width:100%;height:100%" title="AAR (আড় মাছ) CUT IN PIECES" alt="AAR (আড় মাছ) CUT IN PIECES">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">AAR (আড় মাছ) CUT IN PIECES<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹400.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605875204.jpg" style="width:100%;height:100%" title="LIVE BATA (জ্যান্ত বাটা) 7-10 PIECES" alt="LIVE BATA (জ্যান্ত বাটা) 7-10 PIECES">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">LIVE BATA (জ্যান্ত বাটা) 7-10 PIECES<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹300.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605949636.jpg" style="width:100%;height:100%" title="TANGRA (ট্যাংরা) 7/10 COUNT" alt="TANGRA (ট্যাংরা) 7/10 COUNT">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">TANGRA (ট্যাংরা) 7/10 COUNT<br>
	<button type="button" class="btn border mt-auto ">Buy Now</button></div>
	<div class="col-md-4 order-1"><strike>₹550.00</strike><br>₹500.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605987789.jpg" style="width:100%;height:100%" title="DESI PARSHEY (দেশি পার্শে) 12/14 COUNT" alt="DESI PARSHEY (দেশি পার্শে) 12/14 COUNT">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">DESI PARSHEY (দেশি পার্শে) 12/14 COUNT<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹400.00</div>
	</div>
  </div>
</div>
</div>
<div class="row">
	<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1606003413.jpg" style="width:100%;height:100%" title="LIVE CHARA PONA (জ্যান্ত চারাপোনা) 7/8 COUNT" alt="LIVE CHARA PONA (জ্যান্ত চারাপোনা) 7/8 COUNT">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">LIVE CHARA PONA (জ্যান্ত চারাপোনা) 7/8 COUNT<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1"><strike>₹250.00</strike><br>₹230.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1605903106.jpg" style="width:100%;height:100%" title="TELAPIA DESI (দেশি তেলপিয়া) *EXCLUSIVE 7/9 COUNT" alt="TELAPIA DESI (দেশি তেলপিয়া) *EXCLUSIVE 7/9 COUNT">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">TELAPIA DESI (দেশি তেলপিয়া) *EXCLUSIVE 7/9 COUNT<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1"><strike>₹220.00</strike><br>₹200.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1606277364.jpg" style="width:100%;height:100%" title="FISH EGGS (মাছের ডিম)" alt="FISH EGGS (মাছের ডিম)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">FISH EGGS (মাছের ডিম)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹250.00</div>
	</div>
  </div>
</div>
<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
	
	<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1620634874.jpg" style="width:100%;height:100%" title="GURJALI OR RAVAS (WHOLE, CUT IN PIECES) (গুরজালি)" alt="GURJALI OR RAVAS (WHOLE, CUT IN PIECES) (গুরজালি)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">GURJALI OR RAVAS (WHOLE, CUT IN PIECES) (গুরজালি)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹500.00</div>
	</div>
  </div>
</div>
</div>
<div class="row">
	<div class="col-md-3 col-6">
	<div class="shadow-sm mb-5 bg-white rounded featured_product_content" >
<div class="row">
	<div class="col-md-12">
	<img class="grid-product__picture" src="https://d2j6dbq0eux0bg.cloudfront.net/images/33513499/1621580810.jpg" style="width:100%;height:100%" title="Live desi Koi Fish (দেশি জ্যান্ত কৈ মাছ)" alt="Live desi Koi Fish (দেশি জ্যান্ত কৈ মাছ)">
	</div></div>
	<div class="row des_item pl-2 py-3">
	<div class="col-md-8 text-left d-flex flex-column order-sm-1 order-2">Live desi Koi Fish (দেশি জ্যান্ত কৈ মাছ)<br>
	<button type="button" class="btn border mt-auto">Buy Now</button></div>
	<div class="col-md-4 order-1">₹450.00</div>
	</div>
  </div>
</div>
</div>
<div class="row justify-content-center align-items-center pb-5 order-info">
    <div class="col-md-2">
	<figure><svg width="16" height="18" viewBox="0 0 16 18" xmlns="http://www.w3.org/2000/svg">
							<g fill-rule="nonzero" fill="currentColor">
								<path d="M1 5.414V17h14V1H5.414L1 5.414zM15 0c.552 0 1 .445 1 .993v16.014c0 .548-.445.993-1 .993H1c-.552 0-1-.445-1-.993V5l5-5h10z"></path>
								<path d="M5.108 9.832c-.19-.2-.508-.205-.707-.013-.198.19-.204.507-.012.706l2.823 2.93c.216.225.58.2.765-.05l5.153-7.04c.164-.223.115-.536-.108-.7-.222-.162-.535-.114-.698.11l-4.803 6.56L5.107 9.83zM0 5v1h6V0H5v5"></path>
							</g>
						</svg> <figcaption>Track Orders</figcaption></figure></div>
						
    <div class="col-md-2">
	<figure><svg width="16" height="20" viewBox="0 0 16 20" xmlns="http://www.w3.org/2000/svg">
						<g fill="none" fill-rule="evenodd"><path d="M1 5v13.006c0 .548.446.994.994.994h12.012c.548 0 .994-.446.994-.994V5H1zm15-1v14.006c0 1.1-.895 1.994-1.994 1.994H1.994C.894 20 0 19.105 0 18.006V4h16z" fill="currentColor" fill-rule="nonzero"></path>
							<path d="M5 7s-.005.5-.504.5C3.996 7.5 4 7 4 7V4c0-2.21 1.79-4 4-4s4 1.79 4 4v3s-.002.5-.5.5S11 7 11 7V4c0-1.657-1.343-3-3-3S5 2.343 5 4v3z" fill="currentColor"></path>
						</g>
					</svg><figcaption>Shopping Bag</figcaption></figure></div>
    <div class="col-md-2">
	<figure><svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
							<g fill-rule="nonzero" fill="currentColor">
								<path d="M11 21c5.523 0 10-4.477 10-10S16.523 1 11 1 1 5.477 1 11s4.477 10 10 10zm0 1C4.925 22 0 17.075 0 11S4.925 0 11 0s11 4.925 11 11-4.925 11-11 11z"></path>
								<path d="M18.08 18.854c-.502-.617-1.156-1.143-1.974-1.612-.168-.096-.46-.248-.902-.47-.358-.18-.97-.483-.94-.466-.543-.295-.927-.56-1.117-.782l-.155-.824c1.625-.848 2.563-2.847 2.563-5.24 0-2.96-1.872-5.04-4.555-5.04S6.446 6.5 6.446 9.46c0 2.42.945 4.427 2.588 5.26l-.135.725c-.16.214-.7.595-1.188.865.032-.018-.567.28-.973.485-.4.2-.69.353-.856.45-.81.463-1.457.986-1.956 1.595.092.29.512.498.81.588.426-.507.973-.932 1.644-1.317.407-.233 1.794-.914 1.814-.925.352-.195 1.17-.694 1.504-1.143l.14-.186.315-1.69-.67-.34c-1.25-.633-2.04-2.272-2.04-4.365 0-2.472 1.49-4.04 3.555-4.04 2.067 0 3.555 1.568 3.555 4.04 0 2.07-.784 3.705-2.026 4.353l-.657.343.34 1.816.175.204c.33.385.884.73 1.4 1.01.024.01 1.413.69 1.82.924.697.398 1.26.838 1.69 1.368.468-.186.663-.403.782-.624z"></path>
							</g>
						</svg><figcaption>Sign In</figcaption></figure></div>
						</div>
						
						
  </div>
  </div>
  </div>
<p class="info"></p>
<div class="container">
<div class="row d-flex justify-content-center align-items-center  pt-4">
<div class="col-md-3 d-flex justify-content-center align-items-center py-1"><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path d="M13.332 11.426l-2.16-2.166c-.234-.232-.63-.225-.883.03l-1.357 1.357-.33-.182-.215-.12c-1.193-.663-1.882-1.13-2.732-1.983-.85-.854-1.315-1.54-1.982-2.743-.06-.11-.085-.155-.114-.205l-.19-.33.27-.27.73-.732.36-.36c.255-.256.262-.655.03-.888L2.598.668c-.23-.232-.628-.225-.88.03l-.55.54c-.186.275-.33.54-.433.802-.102.27-.165.525-.194.783-.263 2.19.75 4.225 3.59 7.07 1.724 1.728 3.414 2.77 5 3.278.555.18 1.057.277 1.5.314.267.023.455.02.554.01.267-.033.52-.097.778-.197.276-.108.534-.255.722-.4l.62-.582c.253-.255.26-.655.028-.89zM4.615 5.254l-.267.267-.354-.353.435-.247.12.216c.02.04.043.08.065.118z" stroke="#999" fill-rule="nonzero" fill="none"></path></svg>9830835054</div>
						<div class='col-md-3 d-flex justify-content-center align-items-center py-1'><svg width="16" height="12" viewBox="0 0 16 12" xmlns="http://www.w3.org/2000/svg"><path d="M2 0h12c1.105 0 2 .895 2 2v8c0 1.105-.895 2-2 2H2c-1.105 0-2-.895-2-2V2C0 .895.895 0 2 0zm0 1c-.552 0-1 .448-1 1v8c0 .552.448 1 1 1h12c.552 0 1-.448 1-1V2c0-.552-.448-1-1-1H2zm.817 1.114L8 6.368l5.183-4.254c.213-.176.528-.145.703.07.176.212.145.527-.07.702L8.317 7.4c-.183.152-.45.152-.633 0l-5.5-4.514c-.214-.175-.245-.49-.07-.703.176-.214.49-.245.704-.07z" fill-rule="nonzero" fill="#999"></path></svg>hooghlymartt@gmail.com</div>
						<div class='col-md-3 d-flex justify-content-center align-items-center py-1'><svg width="14" height="14" viewBox="0 0 14 14" xmlns="http://www.w3.org/2000/svg"><path d="M12 8.118V12c0 1.105-.895 2-2 2H2c-1.105 0-2-.895-2-2V4c0-1.105.895-2 2-2h3.946v1H2c-.552 0-1 .448-1 1v8c0 .552.448 1 1 1h8c.552 0 1-.448 1-1V8.118h1zM12.293 1H10c-.276 0-.5-.224-.5-.5s.224-.5.5-.5h3.5c.276 0 .5.224.5.5V4c0 .276-.224.5-.5.5S13 4.276 13 4V1.707L6.854 7.854c-.196.195-.512.195-.708 0-.195-.196-.195-.512 0-.708L12.293 1z" fill="#999" fill-rule="evenodd"></path></svg>www.hooghlymart.com</div></div>
						
							<div class="row d-flex justify-content-center align-items-center fb_img m-4 text-center">
						<div class="col-md-2 d-flex justify-content-center align-items-center text-center"><a href="#" class="fa fa-facebook-square px-3 py-1  ">Facebook</a></div>
						<div class="col-md-2 d-flex justify-content-center align-items-center"><a href="#" class="fa fa-instagram px-3 py-1">@hooghlymart</a></div>
						<div class="col-md-2d-flex justify-content-center align-items-center"><a href="#" class="fa fa-whatsapp px-3 py-1">WhatsApp</a></div>
						
						</div>
						
</div>

					

<div class="jumbotron text-center" style="margin-bottom:0">
	<div class="footer_icon pb-3">
		<a href="#" class="fa fa-facebook-square mx-3 p-1 ">Share</a>
		<a href="#" class="fa fa-twitter mx-3 p-1">Tweet</a>
		<a href="#" class="fa fa-pinterest mx-3 p-1">Pin</a>
	</div>
	
    
  <div class="footer_links">
  <p>© Hooghly Mart. Cover image by <a href="#">Caroline Attwood</a> from <a href="#">Unsplash</a></p>
		<a href="#" class="px-3">About Us</a>
		<a href="#" class="px-3">Shipping & Payment</a>
		<a href="#" class="px-3">InfoReturn</a>
		<a href="#" class="px-3">PolicyTerms & Conditions</a>
		<a href="#" class="px-3">Privacy Policy</a>
	</div>
	<div class="powered-info">
	<p class="mt-3">Powered by</p>
	<a href="#" class="fa fa-shopping-cart">Ecwid</a>
	
	</div>

	
</div>
<span class="fixed-bottom p-3 "><img class="float-right" src="images/facebook-messenger.svg" height="50" width="50"></span>

</body>
</html>
