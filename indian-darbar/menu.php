<?php include_once('header.php');?>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Food Menu</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Menu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">New</small>
                                    <h6 class="mt-n1 mb-0">Entrees</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Set</small>
                                    <h6 class="mt-n1 mb-0">Meals</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Delicious</small>
                                    <h6 class="mt-n1 mb-0">Soups</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-4">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Vegetarian</small>
                                    <h6 class="mt-n1 mb-0">Appetizers</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-5">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Non-Vegetarian</small>
                                    <h6 class="mt-n1 mb-0">Appetizers</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-80.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Lollipop</span>
                                                <span class="text-primary">฿230</span>
                                            </h5>
                                            <small class="fst-italic">It is an appetiser in Indo-Chinese cuisine served with Szechuan sauce.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-81.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mutton Vindaloo (Try with Rice/Nan Bread)</span>
                                                <span class="text-primary">฿340</span>
                                            </h5>
                                            <small class="fst-italic">Tender goat meat cooked with tomato ginger garlic and Indian herbs.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-82.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kadai Chicken (Try with Rice/Nan Bread)</span>
                                                <span class="text-primary">฿250</span>
                                            </h5>
                                            <small class="fst-italic">Spice the chicken cooked in tomato gravy with a touchup of bellpepper and onion.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-83.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Peas Pulao + Paneer Tikka Masala + Vinegar Onion</span>
                                                <span class="text-primary">฿290</span>
                                            </h5>
                                            <small class="fst-italic">A complete Indian vegetarian meals for your day.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-84.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Veg Thali</span>
                                                <span class="text-primary">฿259</span>
                                            </h5>
                                            <small class="fst-italic">(Mon-Fri 12:00 PM to 1:00 PM)</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-85.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tamatar Dhania Shorba</span>
                                                <span class="text-primary">฿130</span>
                                            </h5>
                                            <small class="fst-italic">Lightweight full bodied tomato broth flavoured with the refreshing fragrance of fresh cilantro.</small>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-86.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Masala Papad</span>
                                                <span class="text-primary">฿50</span>
                                            </h5>
                                            <small class="fst-italic">Chrisp wafers topped with a fresh and zingy onion tomato salsa and a sprinkling of a tangy spice blend.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-87.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mast Papri Chat</span>
                                                <span class="text-primary">฿170</span>
                                            </h5>
                                            <small class="fst-italic">Savoury crackers topped with potatoes and chickpeas liberally drizzled with mint chutney, Tangye tamarind sauce, and sweet yoghurt.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-88.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Corn Chaat</span>
                                                <span class="text-primary">฿160</span>
                                            </h5>
                                            <small class="fst-italic">Tender corn kernels tossed with diced vegetables and a zesty dressing.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-89.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Vegetable Samosa</span>
                                                <span class="text-primary">฿150</span>
                                            </h5>
                                            <small class="fst-italic">Spiced potato and green peas stuffed pastry triangles, fried crisp. Enjoy with our house tamarind chutney.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-90.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Aloo Tikki</span>
                                                <span class="text-primary">฿150</span>
                                            </h5>
                                            <small class="fst-italic">Sott, pan-tried golden potato patties. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-91.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Paneer Tikka Kati Roll</span>
                                                <span class="text-primary">฿170</span>
                                            </h5>
                                            <small class="fst-italic">Home-made spice cottage cheese and sweet onions wrapped in flat bread.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-92.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Hara-Bhara Kebab</span>
                                                <span class="text-primary">฿180</span>
                                            </h5>
                                            <small class="fst-italic">Pan Fried vegetable and spinach cutlets.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-93.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Onion Bhaji</span>
                                                <span class="text-primary">฿150</span>
                                            </h5>
                                            <small class="fst-italic">Spice-dusted fried onion fritters. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-94.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Vegetable Pakora</span>
                                                <span class="text-primary">฿160</span>
                                            </h5>
                                            <small class="fst-italic">Seasonal vegetable and spiced cottage cheese fritters </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
           <div id="tab-5" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-95.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Lamb Samosa </span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic">. Spiced Lamb mince ensconced in delicate pastry triangles and fried crisp.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-96.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Keema Samosa</span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic">Spiced chicken and mutton mince ensconced in delicate pastry triangles and fried crisp</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-97.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Murgh Tikka Chat</span>
                                                <span class="text-primary">฿170</span>
                                            </h5>
                                            <small class="fst-italic">Spiced and diced chicken tossed with onions, tomatoes, peppers and a tangy dressing..</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-98.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pani Puri Golgappa</span>
                                                <span class="text-primary">฿180</span>
                                            </h5>
                                            <small class="fst-italic">Watery Balls stuffed with mashed potatoe, peas and a tangy dressing. </small>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Menu End -->
           <section class="sticky">
         <div class="icons">
            <a class="call"><i class="fas fa-phone-alt" onclick="openpopup1()"></i>
            </a>
            <a class="whatsapp" onclick="openpopup()"><img src="img/what.png"></a>

        </div>
        </section>
        <div class="online">
            <h4>Order Online</h4>
        </div>
        <!-- Menu Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Food Menu</h5>
                    <h1 class="mb-5">Most Popular Items</h1>
                </div>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-6">
                                <i class="fa fa-coffee fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Non-Vegetarian</small>
                                    <h6 class="mt-n1 mb-0">Kebabs</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-7">
                                <i class="fa fa-hamburger fa-2x text-primary"></i>
                                <div class="ps-3">
                                     <small class="text-body">Vegetarian</small>
                                    <h6 class="mt-n1 mb-0">Kebabs</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-8">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Non-Vegetarian</small>
                                    <h6 class="mt-n1 mb-0">Entrees</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-9">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Vegetarian</small>
                                    <h6 class="mt-n1 mb-0">Entrees</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-10">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Indian</small>
                                    <h6 class="mt-n1 mb-0">Sides</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-11">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Delicious</small>
                                    <h6 class="mt-n1 mb-0">Grains</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-12">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Freshly Baked</small>
                                    <h6 class="mt-n1 mb-0">Indian Breads</h6>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-13">
                                <i class="fa fa-utensils fa-2x text-primary"></i>
                                <div class="ps-3">
                                    <small class="text-body">Desserts &</small>
                                    <h6 class="mt-n1 mb-0">Drinks</h6>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="tab-6" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-1.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Darbar's Kebab-e-Mal</span>
                                                <span class="text-primary">฿260</span>
                                            </h5>
                                            <small class="fst-italic">Tender chicken marinated in a spiced creamy yogurt blend and cooked over fleming charcoal to succulent perfection. Our signature dish.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-2.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Tikka</span>
                                                <span class="text-primary">฿239</span>
                                            </h5>
                                            <small class="fst-italic">Punjabi-style spicy chicken tenders cooked over flaming charcoal. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-3.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Murga Achaari Pudina Tikka</span>
                                                <span class="text-primary">฿249</span>
                                            </h5>
                                            <small class="fst-italic">Tender boneless chicken marinated in pickling spices and fresh mint, baked in a tandoor oven.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-4.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tandori Chicken</span>
                                                <span class="text-primary">฿350</span>
                                            </h5>
                                            <small class="fst-italic">Whole chicken leg marinated in cayenne pepper, red chili powder, and tumeric, cooked on skewers over flaming charcoal.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-5.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Shammi Kebaab</span>
                                                <span class="text-primary">฿680</span>
                                            </h5>
                                            <small class="fst-italic">Soft melt-in-the-mouth minced pan-fried mutton patties spiced with an exceptional blend of herbs.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-6.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Boti Kebaab</span>
                                                <span class="text-primary">฿350</span>
                                            </h5>
                                            <small class="fst-italic">Richly-flavoured tender marinated mutton pieces grilled over an open flame.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-7.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mulayam Sikh Kebaab</span>
                                                <span class="text-primary">฿250</span>
                                            </h5>
                                            <small class="fst-italic">Spiced mutton mince skewered and baked in a traditional clay oven. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-8.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Ajwani Fish Tikka</span>
                                                <span class="text-primary">฿270</span>
                                            </h5>
                                            <small class="fst-italic">Cubes of tender sea bass made the classic Amritsari way with the spicy flavour of carom seeds (ajwain).</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-61.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tandori Tiger Prawns</span>
                                                <span class="text-primary">฿350</span>
                                            </h5>
                                            <small class="fst-italic">Fresh Tiger Prawns marinated in a special tandoori masala made up of chillies, ginger, garlic, and ground coriander, then barbecued in a clay oven.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-62.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Seekh Kebab</span>
                                                <span class="text-primary">฿280</span>
                                            </h5>
                                            <small class="fst-italic">Chicken mince marinated to a velvety smoothness, skewered and barbecued to perfection in a clay oven. Served with a selection of chutneys and light salad.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-63.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Lamb Kebab</span>
                                                <span class="text-primary">฿300</span>
                                            </h5>
                                            <small class="fst-italic">classic spiced yoghurt with a dash of rum Pride of lamb meat marinated in our Indian Darbar!</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-64.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mixed Grill</span>
                                                <span class="text-primary">฿650</span>
                                            </h5>
                                            <small class="fst-italic">A selection of our best kebabs on offer: Kebab-e-malai, Chicken Tikka, Mulayam Seekh Kebab, and Ajwaini Fish Tikka. Served with Garlic Naan and a selection of chutneys.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-7" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-99.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Paneer Tikka</span>
                                                <span class="text-primary">฿230</span>
                                            </h5>
                                            <small class="fst-italic">Home-made cottage cheese marinated in tandoori masala.

</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-100.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Chutney Paneer Tikka</span>
                                                <span class="text-primary">฿200</span>
                                            </h5>
                                            <small class="fst-italic">Creamy cottage cheese sandwiched with fresh mint chutney, barbecued to softness.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-101.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tandori Creamy Cauliflower</span>
                                                <span class="text-primary">฿180</span>
                                            </h5>
                                            <small class="fst-italic">Fresh Cauliflower florets marinated in a creamy tandoori blend and barbecued just so to retain a juicy yet bite. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-102.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tandori Stuffed Aloo</span>
                                                <span class="text-primary">฿200</span>
                                            </h5>
                                            <small class="fst-italic">Baby potatoes marinated in a special dressing, stuffed with minced vegetables and nuts.</small>
                                        </div>
                                    </div>
                                </div>
                               <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-103.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Vegetable Seekh Kebab </span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic"> Minced vegetables and cottage cheese flavoured with a secret blend of spices, skewered and barbecued to perfection. Served with a selection of chutneys and light salad. </small>
                                        </div>
                                    </div>
                                </div>
                              <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-104.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Vegetrian Starter Platter</span>
                                                <span class="text-primary">฿360</span>
                                            </h5>
                                            <small class="fst-italic">An array of our most popular vegetarian starters-Pancer Tiranga, Tandoori Creamy Broccoli, Hara-Bhara Kebab, and Vegetable Samosas.</small>
                                        </div>
                                    </div>
                                </div>  
                                
                                
                            </div>
                        </div>
                        <div id="tab-8" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-9.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Butter Chicken</span>
                                                <span class="text-primary">฿250</span>
                                            </h5>
                                            <small class="fst-italic">Chicken cooked in a delicately spiced curry of butter, tomatoes, cream.  </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-10.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Korma</span>
                                                <span class="text-primary">฿240</span>
                                            </h5>
                                            <small class="fst-italic">Tender boneless chicken in a sauce of creamy cashews and fresh light herbs.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-11.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Tikka Masala</span>
                                                <span class="text-primary">฿250</span>
                                            </h5>
                                            <small class="fst-italic">Spicy chicken tikkas teamed with luscious gravy.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-12.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Classic Chicken Curry</span>
                                                <span class="text-primary">฿230</span>
                                            </h5>
                                            <small class="fst-italic">Indian Darbar's version of the classic homemade chicken curry with essence of comfort food.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-13.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Achari</span>
                                                <span class="text-primary">฿250</span>
                                            </h5>
                                            <small class="fst-italic">Invented by the Portuguese and made famous by the Goans, this is our own version of the classic "meat in pickling spices" curry.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-14.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Chilli Chicken </span>
                                                <span class="text-primary">฿270</span>
                                            </h5>
                                            <small class="fst-italic">Juicy boneless chicken stir-fried with rich soya and robust chili sauces. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-15.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>kashmiri Roghan Josh</span>
                                                <span class="text-primary">฿350</span>
                                            </h5>
                                            <small class="fst-italic">Tender mutton chunks simmered in a rich sauce flavoured with aromatic ginger and fennel. An Indian Darbar signature dish.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-16.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Badshah Keema Aloo </span>
                                                <span class="text-primary">฿280</span>
                                            </h5>
                                            <small class="fst-italic">Succulent mutton mince tossed with tasty potatoes & exotic spices.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-105.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mutton Curry</span>
                                                <span class="text-primary">฿300</span>
                                            </h5>
                                            <small class="fst-italic">Tender marinated mutton braised in pickling spices.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-106.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mutton Saagwala</span>
                                                <span class="text-primary">฿320</span>
                                            </h5>
                                            <small class="fst-italic">Spiced and marinated mutton morsels blanketed by creamy spinach blended with herbs. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-107.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Spicy Gaon Prawn Curry</span>
                                                <span class="text-primary">฿350</span>
                                            </h5>
                                            <small class="fst-italic">Fresh prawns simmered in a sauce of coconut milk infused with robust spices.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-108.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Black Pepper Prawns</span>
                                                <span class="text-primary">฿300</span>
                                            </h5>
                                            <small class="fst-italic">fresh prawns tossed in a fresh hot black pepper sauce.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-109.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Sea Bass Curry</span>
                                                <span class="text-primary">฿270</span>
                                            </h5>
                                            <small class="fst-italic">Sea bass filet cooked in a fragrant tomato curry with a light touch of cream and herbs for an extra edge of savour.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-9" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-17.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bombay Potatoes</span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic">Potatoes boiled and cubed, then tossed in a fusing of cumin, tomatoes, and onions flavored with our special home-made spice blend.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-18.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>kashmiri Aloo </span>
                                                <span class="text-primary">฿210</span>
                                            </h5>
                                            <small class="fst-italic">Semi fried potato cooked with Kashmiri spices and tangy sauce.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-19.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Saag Aloo</span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic">Potato cubes cloaked in creamy spinach, chillies, and spices.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-20.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Aloo Goby Adraki</span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic">Boiled potatoes and cauliflower florets tossed in a typical Punjabi spice blend with vivid hints of fresh ginger. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-21.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Dam Aloo Kashmiri</span>
                                                <span class="text-primary">฿210</span>
                                            </h5>
                                            <small class="fst-italic">Fried baby potatoes stuffed with a creamy spiced cottage cheese filling all in a sea of rich, saffron-flavoured gravy. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-22.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Baingan Bharta </span>
                                                <span class="text-primary">฿220</span>
                                            </h5>
                                            <small class="fst-italic">Egg plkant rosted over charcoal,its smoke infused plup then sauteed with tomatoes, onions, spices. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-23.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Sabzi Jafrezi</span>
                                                <span class="text-primary">฿170</span>
                                            </h5>
                                            <small class="fst-italic">Mixed colourful vegetables freshly cut and then cooked with Indian spices garlic and ginger.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-24.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Vegetable Kroma</span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic">Mixed colourful vegetables freshly cut and then cooked in cashew nut gravy.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-65.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Katti Meethi Bhindi</span>
                                                <span class="text-primary">฿170</span>
                                            </h5>
                                            <small class="fst-italic">Crisp okra stir-fried with a piquant and tangy tomato onion sauce sweetened with a touch of jaggery.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-66.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Vegetable Koftas</span>
                                                <span class="text-primary">฿200</span>
                                            </h5>
                                            <small class="fst-italic">Smooth potato, creamy cottage cheese, and minced vegetable dumplings fried till crisp, then simmered in a mildly spiced golden gravy. 

</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-67.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Vegatable Manchurian</span>
                                                <span class="text-primary">฿170</span>
                                            </h5>
                                            <small class="fst-italic">Fried vegetable dumplings tossed in a light onion, soya, ginger, and garlic sauce. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-68.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pindi Chana</span>
                                                <span class="text-primary">฿170</span>
                                            </h5>
                                            <small class="fst-italic">The classic Punjabi chickpeas tossed with tomatoes, onions, and our specially made pindi chana masala blend.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-69.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kadhai Mutton Mushroom</span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic">Fresh button mushrooms coated with onion-tomato gravy suffused with the fragrances of cilantro and ginger.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-70.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Dal Makhani</span>
                                                <span class="text-primary">฿220</span>
                                            </h5>
                                            <small class="fst-italic">Lentils slow-cooked to a luscious creamy consistency finished with a dollop of butter and mild spices.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-71.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Darbar's Tarka Dal</span>
                                                <span class="text-primary">฿190</span>
                                            </h5>
                                            <small class="fst-italic">Yellow lentils gently simmered until smooth in a flavourful broth of onion, tomato chili and garlic.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-72.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Raj Mah</span>
                                                <span class="text-primary">฿210</span>
                                            </h5>
                                            <small class="fst-italic">Red kidney beans simmered in a homemade spiced tomato puree with a glimmer of ginger.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-73.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mutton Paneer</span>
                                                <span class="text-primary">฿240</span>
                                            </h5>
                                            <small class="fst-italic">Succulent home-made cottage cheese chunks sautéed with fresh green peas in a mild sauce inspired by cardamom and cloves.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-79.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kadhai Paneer </span>
                                                <span class="text-primary">฿230</span>
                                            </h5>
                                            <small class="fst-italic">Tender cottage cheese cubes joined with spiced green peppers and lightly caramelized onions in a rich gravy.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-75.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Palak Paneer </span>
                                                <span class="text-primary">฿250</span>
                                            </h5>
                                            <small class="fst-italic">Freshly made cottage cheese gently simmered in a creamy spinach flavored with herbs and spices. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-76.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Paneer Butter Masala</span>
                                                <span class="text-primary">฿250</span>
                                            </h5>
                                            <small class="fst-italic">Cottage cheese cubes cloaked in a moderately spicy blend of tomatoes, onions, and butter.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-78.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Paneer Makhan Wala </span>
                                                <span class="text-primary">฿240</span>
                                            </h5>
                                            <small class="fst-italic">Cottage cheese cubes cooked in a buttery tomato onion gravy, slightly spicy, slightly tangy. With a hint of fenugreek.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-77.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Chilli Paneer</span>
                                                <span class="text-primary">฿240</span>
                                            </h5>
                                            <small class="fst-italic">Fresh cottage cheese tossed with soya and chili sauces, and fresh green chilies.</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div id="tab-10" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-54.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Baghicha Salad</span>
                                                <span class="text-primary">฿100</span>
                                            </h5>
                                            <small class="fst-italic">Crisp cucumbers, tomatoes, carrots, and onions with fresh lime, and a cumin masala sprinkled on top.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-55.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Kachumbar Salad </span>
                                                <span class="text-primary">฿100</span>
                                            </h5>
                                            <small class="fst-italic">Finely chopped cucumbers, carrots, and onions tossed in a freshly made lime vinaigrette. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-56.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Curd</span>
                                                <span class="text-primary">฿90</span>
                                            </h5>
                                            <small class="fst-italic">Traditional plain home-made yoghurt.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-57.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span> Apple & Walnut Raita</span>
                                                <span class="text-primary">฿140</span>
                                            </h5>
                                            <small class="fst-italic">Chopped green apples and crunchy walnuts in yoghurt with a touch of salt.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-58.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tomato & Cucumber Raita</span>
                                                <span class="text-primary">฿110</span>
                                            </h5>
                                            <small class="fst-italic">Finely chopped tomatoes and cucumbers in a slightly salted yoghurt whisked with cumin. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-59.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Onion Raita</span>
                                                <span class="text-primary">฿70</span>
                                            </h5>
                                            <small class="fst-italic">Crisp-fried gram flour pearls mixed with sweet and saltyyoghurt. </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-60.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Sweet Dahi</span>
                                                <span class="text-primary">฿90</span>
                                            </h5>
                                            <small class="fst-italic">Traditional plain home-made sweet yogurt</small>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            </div>
                            <div id="tab-11" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-47.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Hyderabadi Mutton Dum Biryani</span>
                                                <span class="text-primary">฿250</span>
                                            </h5>
                                            <small class="fst-italic"> Fragrant long grained rice layered with tender mutton cooked in a spice blend from the regal kitchens of Hyderabad, then sealed and cooked in its own steam.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-48.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chicken Dum Biryani</span>
                                                <span class="text-primary">฿220</span>
                                            </h5>
                                            <small class="fst-italic">Basmati rice and chicken in a hearty sauce with a rainbow of spices, slow cooked.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-49.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Vegetable Dum Biryani</span>
                                                <span class="text-primary">฿150</span>
                                            </h5>
                                            <small class="fst-italic">Flavourful spiced vegetable & rice casserole.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-50.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Saffron Rice</span>
                                                <span class="text-primary">฿140</span>
                                            </h5>
                                            <small class="fst-italic">Flavourful spiced vegetable & rice casserole.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-51.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Jeera or Peas Palao</span>
                                                <span class="text-primary">฿100</span>
                                            </h5>
                                            <small class="fst-italic">Choose between the earthy fragrance of cumin or the sweetness of fresh green peas. We will mix your choice with perfectly cooked basmati rice.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-52.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Steam basmati Rice</span>
                                                <span class="text-primary">฿80</span>
                                            </h5>
                                            <small class="fst-italic">Premium quality steamed basmati rice.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-53.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Indian-Chinese Style Freid Rice</span>
                                                <span class="text-primary">฿100/฿130/฿150</span>
                                            </h5>
                                            <small class="fst-italic">Fragrant basmati rice stir-fried with your choice of vegetables, chicken, or prawns, and flavored with garlic, ginger and soya sauce</small>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            </div>
                            <div id="tab-12" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-30.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Plain Naan</span>
                                                <span class="text-primary">฿25</span>
                                            </h5>
                                            <small class="fst-italic">The famous thick yet fluffy, soft yet crisp, tan- door-baked flatbread is freshly baked and comes in an inventive array of choices:</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-31.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Buttered Naan</span>
                                                <span class="text-primary">฿35</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-32.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Garlic Naan</span>
                                                <span class="text-primary">฿45</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-33.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Family Size</span>
                                                <span class="text-primary">฿150</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-34.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Basil Chicken/Basil Mushroom</span>
                                                <span class="text-primary">฿70</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-35.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Cheddar Cheese</span>
                                                <span class="text-primary">฿90</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-36.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Tandoori Roti</span>
                                                <span class="text-primary">฿40</span>
                                            </h5>
                                            <small class="fst-italic">(Baked to smooth crispness in the wood-fueled heat of the tandoor)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-37.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Romali Roti</span>
                                                <span class="text-primary">฿50</span>
                                            </h5>
                                            <small class="fst-italic">(Known as The Handkerchief, this roti is gossamer light).</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-38.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Laccha Buttered Paratha</span>
                                                <span class="text-primary">฿50</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-39.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Pudina (Mint) Paratha</span>
                                                <span class="text-primary">฿50</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-40.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mirchi (Chillies) Paratha</span>
                                                <span class="text-primary">฿50</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-41.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Aloo (Potato) Paratha</span>
                                                <span class="text-primary">฿100</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-42.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Minced Chicken Paratha</span>
                                                <span class="text-primary">฿140</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-43.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Piaz (Onion) Paratha</span>
                                                <span class="text-primary">฿50</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-44.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bhatura</span>
                                                <span class="text-primary">฿90</span>
                                            </h5>
                                            <small class="fst-italic">(Deep-fried leavened bread)</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-45.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Phulka</span>
                                                <span class="text-primary">฿30</span>
                                            </h5>
                                            <small class="fst-italic">(Thin & fluffy whole wheat fathread prepared on a flat griddle) </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-46.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Bread Basket</span>
                                                <span class="text-primary">฿160</span>
                                            </h5>
                                            <small class="fst-italic">Garlic Naan, Laccha Parantha, and Tandoori Roti. </small>
                                        </div>
                                    </div>
                                </div>
                             </div>
                            </div>
                            <div id="tab-13" class="tab-pane fade show p-0">
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-25.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Gulam Jamun</span>
                                                <span class="text-primary">฿130</span>
                                            </h5>
                                            <small class="fst-italic">Milk dumplings, deep-fried and poached gently in a syrup scented with cardamom and rose.</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-26.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Masala Tea</span>
                                                <span class="text-primary">฿80</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-28.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Lassi</span>
                                                <span class="text-primary">฿80</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-27.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Mango Lassi</span>
                                                <span class="text-primary">฿100</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="d-flex align-items-center">
                                        <img class="flex-shrink-0 img-fluid rounded" src="img/menu-29.jpg" alt="" style="width: 80px;">
                                        <div class="w-100 d-flex flex-column text-start ps-4">
                                            <h5 class="d-flex justify-content-between border-bottom pb-2">
                                                <span>Chass(Butter Milk)</span>
                                                <span class="text-primary">฿80</span>
                                            </h5>
                                            <small class="fst-italic"></small>
                                        </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
        <!-- Menu End -->
        <div id="overlay">
    <div><h2><a class="popup-close-btn" onclick="closepopup()">&times;</a></h2></div>
    <div class="form2">
      <img src="img/logo.png" alt="" width="130px" height="100px">
      <h4 style="color: #fff;">Select Your Location</h4>
    
    
    <div class="mb-3 tx">
      
     <a href="https://api.whatsapp.com/send?phone=66846718318" style="color:#fff;">
      Nonthaburi 11120, Thailand</a>
    </div>
   
    <div class="mb-3 tx">
      
     <a href="https://api.whatsapp.com/send?phone=66821493269" style="color:#fff;">
      Bang Kho Laem, Bangkok 10120, Thailand</a>
    </div>
    <div class="mb-3 tx">
      
     <a href="https://api.whatsapp.com/send?phone=66801699149" style="color:#fff;">
      Ratchathewi, Bangkok 10400, Thailand</a>
    </div>
    
      
    
    </div>
    </div>
    <div id="openit">
    <div><h2><a class="popup-close-btn" onclick="closepopup1()">&times;</a></h2></div>
    <div class="form2">
      <img src="img/logo.png" alt="" width="130px" height="100px">
      <h4 style="color: #fff;">Select Your Location</h4>
    
    
    <div class="mb-3 tx">
      
     <a href="tel:+66846718318" style="color:#fff;">
      Nonthaburi 11120, Thailand</a>
    </div>
   
    <div class="mb-3 tx">
      
     <a href="tel:+66821493269" style="color:#fff;">
      Bang Kho Laem, Bangkok 10120, Thailand</a>
    </div>
    <div class="mb-3 tx">
      
     <a href="tel:+66801699149" style="color:#fff;">
      Ratchathewi, Bangkok 10400, Thailand</a>
    </div>
    
      
    
    </div>
    </div>

<?php include_once('footer.php');?>
<div class="sticky-footer mobile">
<div class="btn-group" role="group" aria-label="Basic mixed styles example">
  <button type="button" class="btn btn-danger phone"><i class="fas fa-phone-alt" onclick="openpopup1()"></i></button>
  
  <button type="button" class="btn btn-warning what"><i class="fab fa-whatsapp" onclick="openpopup()"></i></button>
  <button type="button" class="btn btn-success con">Book A Table</button>
</div>
  </div>

</body>
<script type="text/javascript">
      function closepopup(){
        document.getElementById('overlay').style.display='none';
      }
      function openpopup(){
        document.getElementById('overlay').style.display='block';
      }
    </script> 
    <script type="text/javascript">
      function closepopup1(){
        document.getElementById('openit').style.display='none';
      }
      function openpopup1(){
        document.getElementById('openit').style.display='block';
      }
    </script>
</html>