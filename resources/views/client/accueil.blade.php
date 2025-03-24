@extends('client.layouts.app')

@section('title')
    Home
@endsection

@section('content')
 <!-- Hero Section Begin -->
 <section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="hero-text">
                    <h2 style="color: white;">Bienvenue sur EVENTS</h2>
                    <p>plateforme dédiée à simplifier le processus d'envoi d'invitations.</p>
                  
                </div>
            </div>
           
        </div>
    </div>
    <div class="hero-slider owl-carousel">
        <div class="hs-item set-bg" data-setbg="{{asset('frontend/img/mariage2.jpg')}}"></div>
        <div class="hs-item set-bg" data-setbg="{{asset('frontend/img/conf1.jpg')}}"></div>
        
    </div>
</section>
<!-- Hero Section End -->

<!-- About Us Section Begin -->
<section class="aboutus-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-text">
                    <div class="section-title">
                        <span>A propos de nous</span>
                        <h2>Gérer vos invitations<br />n'a jamais été aussi facile!</h2>
                    </div>
                    <p class="f-para">Dans le monde d'aujourd'hui, organiser un événement peut rapidement devenir une 
                        tache complexe. Que ce soit pour une fête d'anniversaire, un mariage, une conférence ou tout autre 
                    type d'événement.</p>
                    <p class="s-para">La gestion des invitations est crucial pour assurer le succès de votre occasion, C'est pourquoi nous avons créé EVENTS une plateforme dédiée à simplifier le processus d'envoi d'invitations.</p>
                    
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-pic">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="{{asset('frontend/img/conf2.jpg')}}" alt="" height="400px">
                        </div>
                        <div class="col-sm-6">
                            <img src="{{asset('frontend/img/mariage1.jpg')}}" alt="" height="400px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->

<!-- Services Section End -->
<section class="services-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Services</span>
                    <h2>Découvrez nos Services</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <img src="{{asset('frontend/img/invitation.PNG')}}" height="250px" alt="">
                    <h4>Envoi d'invitations numériques</h4>
                    <p>Envoyez vos invitations par e-mail et suivez les confirmations de présence en temps réél.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <img src="{{asset('frontend/img/liste.jpg')}}" height="250px" alt="">
                    <h4>Gestion des listes d'invités</h4>
                    <p> organiser vos invités par catégories (amis, famille, collègues, etc...)</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="service-item">
                    <img src="{{asset('frontend/img/calendrier.jpg')}}" height="250px" alt="">
                    <h4>Rappels automatiques</h4>
                    <p>Programmez des rappels automatiques pour vos invités afin de garantir leur présence</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->



<!-- Search model Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch"><i class="icon_close"></i></div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search model end -->


@endsection
    