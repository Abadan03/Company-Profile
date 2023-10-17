@extends('layouts.defaults')
@section('content')
<?php 

    
?>

<!-- Hero Start -->
<div class="hero">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
                <div class="hero-text">
                    <h1>Your Self Confidence Recipe</h1>
                    <p>
                        Fresh Embrace Deodorant Spray!
                    </p>
                    <div class="hero-btn">
                        {{-- <a class="btn" href="">Join Now</a> --}}
                        <a class="btn" href="">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 d-none d-md-block">
                <div class="hero-image">
                    {{-- <img src="img/hero.png" alt="Hero Image"> --}}
                    {{-- <img src="{{ Vite::asset('resources/images/hero.png') }}" alt="img_hero"> --}}
                    <img src="{{ Vite::asset('resources/images/production_image/yuka-product-80.jpg') }}" style="height: 100%; border: 2px solid #eeeeee; border-radius: 16px; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);" alt="img_hero">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

 <!-- About Start -->
 <div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    {{-- <img src="img/about.png" alt="Image"> --}}
                    <img src="{{ Vite::asset('resources/images/production_image/yuka-product-108.jpg') }}" style="border-radius: 8px" alt="img_about">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Learn About Us</p>
                    <h2>Solusi Inovasi Terbaru Untuk Prodak Deodorant-mu</h2>
                </div>
                <div class="about-text">
                    <p>
                        Didirikan dengan keyakinan bahwa alam memiliki jawaban terbaik untuk perawatan tubuh, Sthira berkomitmen menyediakan produk yang efektif, alami, dan aman. Nama 'Sthira', yang berarti 'teguh' dalam Sanskerta, mencerminkan tekad kami untuk selalu menyediakan kualitas terbaik dalam setiap produk. 
                    </p>
                    <p>
                        Kami mengedepankan penelitian dan inovasi, memastikan bahwa setiap bahan yang digunakan tidak hanya bersumber dari alam tetapi juga memiliki manfaat nyata untuk kulit. Dari tawas hingga rose water, setiap komponen dipilih dengan hati-hati untuk menciptakan solusi perawatan tubuh yang optimal. Di Sthira, kami percaya bahwa kecantikan dan kesehatan berjalan beriringan. Kami bangga menjadi bagian dari rutinitas perawatan Anda dan berkomitmen untuk terus mendorong batas keunggulan produk alami. 
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="service">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Self Confidence Recipe</p>
            <h2>Benefits Deodorant Spray Tawas</h2>
        </div>
        <div class="row">
            @for ($i = 1; $i <= 6; $i++)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                    <div class="service-item card dynamic-card" onmouseover="showDescription(this, '{{ $i }}')" onmouseout="hideDescription(this)">
                        {{-- <img src="{{ Vite::asset('resources/images/production_image/{{ $i }}.png') }}" style="border-radius: 8px; width: 126" alt="img_about"> --}}
                        <img src="{{ Vite::asset('resources/images/production_image/' . $i . '.png') }}" style="border-radius: 8px; width: 126" alt="img_about">
                        {{-- <div class="service-icon">
                            <i class="flaticon-workout"></i>
                        </div> --}}
                        <h3 class="mt-4">
                            @if ($i == 1)
                                Odorless
                            @elseif ($i == 2)
                                Anti Yellow Stain 
                            @elseif ($i == 3)
                                Brightening
                            @elseif ($i == 4)
                                Anti-Chicken Skin 
                            @elseif ($i == 5)
                                Non-Sticky & Non-Comedogenic 
                            @elseif ($i == 6)
                                Soft Fragrance 
                            @endif
                        </h3>
                        <p class="description-overlay">
                            Hover me!
                        </p>
                    </div>
                </div>
            @endfor
            {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ Vite::asset('resources/images/production_image/yuka-product-80.jpg') }}" style="width:100%; opacity: 1" alt="img_about">
                <div class="service-item active">
                    <div class="service-icon">
                        <i class="flaticon-workout-1"></i>
                    </div>
                    <h3>Anti Yellow Stain</h3>
                    <p>
                        Tidak Menyebabkan Noda Kuning Dan Noda Putih Di Pakaian
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <img src="{{ Vite::asset('resources/images/production_image/yuka-product-56.jpg') }}" style="width:100%; opacity: 1" alt="img_about">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-workout-2"></i>
                    </div>
                    <h3>Brightening</h3>
                    <p>
                        Mencerahkan Kulit Ketiak
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <img src="{{ Vite::asset('resources/images/production_image/yuka-product-56.jpg') }}" style="width:100%; opacity: 1" alt="img_about">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-workout-3"></i>
                    </div>
                    <h3>Anti-Chicken Skin</h3>
                    <p>
                        Menghaluskan Kulit Ketiak Akibat Penggunaan Cukur Dan Waxing
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
                <img src="{{ Vite::asset('resources/images/production_image/yuka-product-31.jpg') }}" style="width:100%; opacity: 1" alt="img_about">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-workout-4"></i>
                    </div>
                    <h3>Non-Sticky & Non-Comedogenic</h3>
                    <p>
                        Tidak menimbulkan rasa lengket di kulit dan tidak menyebabkan jerawat
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="1s">
                <img src="{{ Vite::asset('resources/images/production_image/yuka-product-59.jpg') }}" style="width:100%;  opacity: 1" alt="img_about">
                <div class="service-item">
                    <div class="service-icon">
                        <i class="flaticon-yoga-pose"></i>
                    </div>
                    <h3>Soft Fragrance</h3>
                    <p>
                        Memiliki aroma Ocean Fresh yang segar dan lembut
                    </p>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Class Start -->
<div class="class">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Discover Your Glow</p>
            <h2>Our Catalog</h2>
        </div>
        <div class="row">
            <div class="col-12">
                <ul id="class-filter">
                    <li data-filter="*" class="filter-active">All Catalog</li>
                    {{-- <li data-filter=".filter-1">Pilates Yoga</li>
                    <li data-filter=".filter-2">Hatha Yoga</li>
                    <li data-filter=".filter-3">Vinyasa yoga</li> --}}
                </ul>
            </div>
        </div>
        <div class="row class-container">
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.0s">
                <div class="class-wrap">
                    <div class="class-img">
                        
                        {{-- <img src="{{ Vite::asset('resources/images/class-1.jpg') }}" alt="img_class-1"> --}}
                        <img src="{{ Vite::asset('resources/images/production_image/yuka-product-60.jpg') }}" style="width:100%; opacity: 1" alt="img_about">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                         
                            <img src="{{ Vite::asset('resources/images/teacher-1.png') }}" alt="img_teacher-1">
                            <h3>Elise Moran</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Deodorant Spray 100ml</h2>
                        <div class="class-meta">
                            <p>Deodorant berbasis tawas yang diformulasikan khusus untuk mengatasi bau badan, </p>
                            <a href="" type="button" class="" data-toggle="modal" data-target="#catalog1" style="color: blue">Read More</a>
                            {{-- <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p> --}}
                            <div class="modal" id="catalog1">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Deodorant Spray 100ml</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <p>Deodorant berbasis tawas yang diformulasikan khusus untuk mengatasi bau badan, tanpa meninggalkan noda kuning pada pakaian. Diperkaya dengan Niacinamide, memberikan perawatan tambahan untuk kulit ketiak yang lebih cerah. Dilengkapi dengan aroma Ocean Fresh yang memberikan efek segar dan soft</p>
                                        </div>
                                
                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>                             
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.2s">
                <div class="class-wrap">
                    <div class="class-img">
                      
                        {{-- <img src="{{ Vite::asset('resources/images/class-2.jpg') }}" alt="class-2"> --}}
                        <img src="{{ Vite::asset('resources/images/production_image/yuka-product-28.jpg') }}" style="max-width: 500px; max-height: 350px; opacity: 1" alt="img_about">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                        
                            <img src="{{ Vite::asset('resources/images/teacher-2.png') }}" alt="teacher-2">
                            <h3>Kate Glover</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Deodorant Spray 60ml</h2>
                        <div class="class-meta">
                            {{-- <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p> --}}
                            <p>Deodorant berbasis tawas yang diformulasikan khusus untuk mengatasi bau badan, </p>
                            <a href="" type="button" class="" data-toggle="modal" data-target="#catalog2" style="color: blue">Read More</a>
                            <div class="modal" id="catalog2">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Deodorant Spray 60ml</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                
                                        <!-- Modal Body -->
                                        <div class="modal-body">
                                            <p>Deodorant berbasis tawas yang diformulasikan khusus untuk mengatasi bau badan, tanpa meninggalkan noda kuning pada pakaian. Diperkaya dengan Niacinamide, memberikan perawatan tambahan untuk kulit ketiak yang lebih cerah. Dilengkapi dengan aroma Ocean Fresh yang memberikan efek segar dan soft</p>
                                        </div>
                                
                                        <!-- Modal Footer -->
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="class-wrap">
                    <div class="class-img">
               
                        <img src="{{ Vite::asset('resources/images/class-3.jpg') }}" alt="class-3">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                          
                            <img src="{{ Vite::asset('resources/images/teacher-3.png') }}" alt="img_teacher-3">
                            <h3>Elina Ekman</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Ashtanga yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-1 wow fadeInUp" data-wow-delay="0.6s">
                <div class="class-wrap">
                    <div class="class-img">
             
                        <img src="{{ Vite::asset('resources/images/class-4.jpg') }}" alt="class-4">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                         
                            <img src="{{ Vite::asset('resources/images/teacher-4.png') }}" alt="teacher-4">
                            <h3>Lilly Fry</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Hatha Yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-2 wow fadeInUp" data-wow-delay="0.8s">
                <div class="class-wrap">
                    <div class="class-img">
                        
                        <img src="{{ Vite::asset('resources/images/class-5.jpg') }}" alt="class-5">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
          
                            <img src="{{ Vite::asset('resources/images/teacher-5.png') }}" alt="teacher-5">
                            <h3>Olivia Yates</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Kundalini Yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 class-item filter-3 wow fadeInUp" data-wow-delay="1s">
                <div class="class-wrap">
                    <div class="class-img">
     
                        <img src="{{ Vite::asset('resources/images/class-6.jpg') }}" alt="class-6">
                    </div>
                    <div class="class-text">
                        <div class="class-teacher">
                
                            <img src="{{ Vite::asset('resources/images/teacher-6.png') }}" alt="teacher-6">
                            <h3>Millie Harper</h3>
                            <a href="">+</a>
                        </div>
                        <h2>Vinyasa yoga</h2>
                        <div class="class-meta">
                            <p><i class="far fa-calendar-alt"></i>Sun, Tue, Thu</p>
                            <p><i class="far fa-clock"></i>9:00 - 10:00</p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>
<!-- Class End -->


<!-- Discount Start -->
<div class="discount wow zoomIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-header text-center">
            <p>Become Our Reseller</p>
            <h2>Dapatkan Harga Spesial untuk Reseller</h2>
        </div>
        <div class="container discount-text">
            <p>
                Hubungi Admin Reseller : (+62) 0813-3354-0423
            </p>
            <a class="btn">Click To Message</a>
        </div>
    </div>
</div>
<!-- Discount End -->


<!-- Price Start -->
<div class="price">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Hero Ingredients</p>
            <h2>Culinary Marvels: Unveiling the Hero Ingredients</h2>
        </div>
        <div class="row">
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.0s">
                <div class="price-item">
                    <div class="price-header">
                        <div class="price-title">
                            <h2>Rose Water</h2>
                        </div>
                        <div class="price-prices">
                            {{-- <h2><small>$</small>49<span>/ mo</span></h2> --}}
                            {{-- <h2><small>$</small>12</h2> --}}
                            <h6 style="color: #">Melembapkan dan menyegarkan kulit</h6>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-description">
                            <ul>
                                {{-- <li>Melembapkan dan menyegarkan kulit</li> --}}
                                <li>Formula khusus untuk melembapkan kulit secara intensif</li>
                                <li>Menyegarkan kulit dengan kelembapan alami</li>
                                <li>Menyegarkan kulit secara optimal dan menyeluruh</li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="price-footer">
                        <div class="price-action">
                            <a class="btn" href="">Buy Now</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="price-item featured-item">
                    <div class="price-header">
                        {{-- <div class="price-status">
                            <span>Popular</span>
                        </div> --}}
                        <div class="price-title">
                            <h2>Tea Tree Oil</h2>
                        </div>
                        <div class="price-prices">
                            {{-- <h2><small>$</small>99<span>/ mo</span></h2> --}}
                            {{-- <h2><small>$</small>14</h2> --}}
                            <h6 style="color: #eeeeee">Antibakteri alami yang melawan bau badan</h6>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-description">
                            <ul>
                                <li>Keamanan dan kebersihan dari bahan antibakteri alami</li>
                                <li>Menjaga kesegaran sepanjang hari dengan perlindungan antibakteri</li>
                                <li>Mengatasi bau badan dengan kebaikan antibakteri alami</li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="price-footer">
                        <div class="price-action">
                            <a class="btn" href="">Join Now</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="price-item">
                    <div class="price-header">
                        <div class="price-title">
                            <h2>Niacinamide</h2>
                        </div>
                        <div class="price-prices">
                            {{-- <h2><small>$</small>149<span>/ mo</span></h2> --}}
                            {{-- <h2><small>$</small>12</h2> --}}
                            <h6>Mencerahkan dan mengurangi dark spot di ketiak</h6>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-description">
                            <ul>
                                <li>Menyediakan solusi terbaik untuk mengatasi masalah dark spot pada ketiak</li>
                                <li>Mencerahkan dan menyamarkan area ketiak agar kulit tampak lebih bersinar</li>
                                <li>Mencerahkan kulit ketiak sambil mengurangi pigmentasi yang tidak diinginkan</li>
                                {{-- <li>Group Training</li> --}}
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="price-footer">
                        <div class="price-action">
                            <a class="btn" href="">Join Now</a>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
                <div class="price-item">
                    <div class="price-header">
                        <div class="price-title">
                            <h2>Decalact Deo</h2>
                        </div>
                        <div class="price-prices">
                            {{-- <h2><small>$</small>149<span>/ mo</span></h2> --}}
                            {{-- <h2><small>$</small>12</h2> --}}
                            <h6>Perlindungan jangka panjang tanpa keringat</h6>
                        </div>
                    </div>
                    <div class="price-body">
                        <div class="price-description">
                            <ul>
                                <li>Menyediakan perlindungan optimal tanpa membuat kulit terasa kering</li>
                                <li>Perlindungan jangka panjang yang tidak meninggalkan rasa lengket atau basah</li>
                                <li>Melindungi tanpa membuat kulit terasa kering atau kurang nyaman</li>
                                {{-- <li>Group Training</li> --}}
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="price-footer">
                        <div class="price-action">
                            <a class="btn" href="">Join Now</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Price End -->


<!-- Testimonial Start -->
{{-- <div class="testimonial wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="section-header text-center">
            <p>Testimonial</p>
            <h2>Our Client Say!</h2>
        </div>
        <div class="owl-carousel testimonials-carousel">
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ Vite::asset('resources/images/testimonial-1.jpg') }}" alt="testimonial-1">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ Vite::asset('resources/images/testimonial-2.jpg') }}" alt="testimonial-2">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ Vite::asset('resources/images/testimonial-3.jpg') }}" alt="testimonial-3">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
            <div class="testimonial-item">
                <div class="testimonial-img">
                    <img src="{{ Vite::asset('resources/images/testimonial-4.jpg') }}" alt="testimonial-4">
                </div>
                <div class="testimonial-text">
                    <p>
                        Lorem ipsum dolor sit amet consec adipis elit. Etiam accums lacus eget velit tincid, quis suscip justo dictum.
                    </p>
                    <h3>Customer Name</h3>
                    <h4>Profession</h4>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Testimonial End -->


<!-- Team Start -->
{{-- <div class="team">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Yoga Trainer</p>
            <h2>Expert Yoga Trainer</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="team-item">
                    <div class="team-img">
                     
                        <img src="{{ Vite::asset('resources/images/team-1.jpg') }}" alt="team-1">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Millie Harper</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                
                        <img src="{{ Vite::asset('resources/images/team-2.jpg') }}" alt="team-2">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Lilly Fry</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
              
                        <img src="{{ Vite::asset('resources/images/team-3.jpg') }}" alt="team-3">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Elise Moran</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                       
                        <img src="{{ Vite::asset('resources/images/team-4.jpg') }}" alt="team-4">
                        <div class="team-social">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Kate Glover</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<!-- Team End -->


<!-- Blog Start -->
<div class="blog">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>From Blog</p>
            <h2>Latest Yoga Articles</h2>
        </div>
        <div class="owl-carousel blog-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="blog-item">
                <div class="blog-img">
                    {{-- <img src="img/blog-1.jpg" alt="Blog"> --}}
                    <img src="{{ Vite::asset('resources/images/blog-1.jpg') }}" alt="blog-1">
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <div class="blog-meta">
                        <p><i class="far fa-list-alt"></i>Body Fitness</p>
                        <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        <p><i class="far fa-comments"></i>5</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    {{-- <img src="img/blog-2.jpg" alt="Blog"> --}}
                    <img src="{{ Vite::asset('resources/images/blog-2.jpg') }}" alt="blog-2">
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <div class="blog-meta">
                        <p><i class="far fa-list-alt"></i>Body Fitness</p>
                        <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        <p><i class="far fa-comments"></i>5</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    {{-- <img src="img/blog-3.jpg" alt="Blog"> --}}
                    <img src="{{ Vite::asset('resources/images/blog-3.jpg') }}" alt="blog-3">
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <div class="blog-meta">
                        <p><i class="far fa-list-alt"></i>Body Fitness</p>
                        <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        <p><i class="far fa-comments"></i>5</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    {{-- <img src="img/blog-4.jpg" alt="Blog"> --}}
                    <img src="{{ Vite::asset('resources/images/blog-4.jpg') }}" alt="blog-4">
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <div class="blog-meta">
                        <p><i class="far fa-list-alt"></i>Body Fitness</p>
                        <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        <p><i class="far fa-comments"></i>5</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    {{-- <img src="img/blog-5.jpg" alt="Blog"> --}}
                    <img src="{{ Vite::asset('resources/images/blog-5.jpg') }}" alt="blog-5">
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <div class="blog-meta">
                        <p><i class="far fa-list-alt"></i>Body Fitness</p>
                        <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        <p><i class="far fa-comments"></i>5</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-img">
                    <img src="img/blog-6.jpg" alt="Blog">
                    <img src="{{ Vite::asset('resources/images/blog-6.jpg') }}" alt="blog-6">
                </div>
                <div class="blog-text">
                    <h2>Lorem ipsum dolor</h2>
                    <div class="blog-meta">
                        <p><i class="far fa-list-alt"></i>Body Fitness</p>
                        <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                        <p><i class="far fa-comments"></i>5</p>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                    </p>
                    <a class="btn" href="">Read More <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->


{{-- script AOS digunakan pada setiap file untuk bisa bekerja --}}
{{-- AOS ANIMATION --}}
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>

<script>
  
    const dynamicCards = document.querySelectorAll('.dynamic-card');

// Add event listeners to each dynamic card
function showDescription(card, i) {
        const descriptionOverlay = card.querySelector('.description-overlay');
        const description = getDescription(i);
        descriptionOverlay.textContent = description || 'Hover me!';
    }

    function hideDescription(card) {
        const descriptionOverlay = card.querySelector('.description-overlay');
        descriptionOverlay.textContent = 'Hover me!';
    }

    function getDescription(i) {
        switch (parseInt(i)) {
            case 1:
                return 'Membunuh Kuman Penyebab Bau Badan';
            case 2:
                return 'Tidak Menyebabkan Noda Kuning Dan Noda Putih Di Pakaian';
            case 3:
                return 'Mencerahkan Kulit Ketiak';
            case 4:
                return 'Menghaluskan Kulit Ketiak Akibat Penggunaan Cukur Dan Waxing';
            case 5:
                return 'Tidak menimbulkan rasa lengket di kulit dan tidak menyebabkan jerawat';
            case 6:
                return 'Memiliki aroma Ocean Fresh yang segar dan lembut';
            default:
                return '';
        }
    }
</script>



@endsection