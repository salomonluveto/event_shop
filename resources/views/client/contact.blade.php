@extends('client.layouts.app')

@section('title')
    Contact
@endsection

@section('content')


    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                     
                    </div>
                </div>
               
            </div>
        </div>
        <div class="hero-slider owl-carousel y-3">
          <img src="{{asset('frontend/img/conf1.jpg')}}" height="500px" alt="">
          
            
        </div>
    </section>
    <!-- Hero Section End -->
     <!-- Contact Section Begin -->
     <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        
                        <table>
                            <tbody>
                              
                                <tr>
                                    <td class="c-o">Phone:</td>
                                    <td>(+243) 815995094</td>
                                </tr>
                                <tr>
                                    <td class="c-o">Email:</td>
                                    <td>salomonluveto2023@gmail.com</td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <form action="#" class="contact-form">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Nom">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Votre Message"></textarea>
                                <button type="submit">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
        </div>
    </section>
    <!-- Contact Section End -->

@endsection

   