@extends('layouts/default')

{{-- Page title --}}
@section('title')
    RuOption | FEES
@stop

{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
@stop

{{-- slider --}}
@section('top')
<div id="overlay" class="viewdetail-overlay"></div>
<section style="padding:0px;">
    <div class="container-fluid main-container-header">
        <div class="row no-gutters faqs-title">
            <div class="col-md-12">
                <h1>Qestions and answers</h1>
            </div>
            <div class="col-md-12">
                <p class="text-center">We responds to our users</p>
            </div>
        </div>
    </div>
</section><!-- End About Us Section -->

<section style="padding:0px;">
    <div class="container-fluid main-container-header1">
      <div class="container">
        <div class="row mt-2 faqs-text" data-aos="fade-up" data-aos-delay="100">
            <div class="col-md-12">
                <h2 style="color: #1c5c93;">FAQ's</h2>
                <p>These are some of the most frequent doubts that our users have</p>
            </div>
        </div>
        <div class="accordion" id="accordionExample" data-aos="fade-up" data-aos-delay="100">
            <div class="card">
                <div class="card-header">
                    <h2 class="mb-0" style="font-size:20px;">
                        GENERAL					
                    </h2>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link p-0" style="width:100%;" data-toggle="collapse" data-target="#collapseOne"><p style="float: left;margin-bottom: 0px; font-size:18px;">What is HTML?</p><i class="fa fa-chevron-down" style="float:right;"></i></button>									
                    </h2>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link p-0" style="width:100%;" data-toggle="collapse" data-target="#collapseTwo"><p style="float: left;margin-bottom: 0px; font-size:18px;">What is HTML?</p><i class="fa fa-chevron-down" style="float:right;"></i></button>									
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link p-0" style="width:100%;" data-toggle="collapse" data-target="#collapseThree"><p style="float: left;margin-bottom: 0px; font-size:18px;">What is HTML?</p><i class="fa fa-chevron-down" style="float:right;"></i></button>									
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link p-0" style="width:100%;" data-toggle="collapse" data-target="#collapseFour"><p style="float: left;margin-bottom: 0px; font-size:18px;">What is HTML?</p><i class="fa fa-chevron-down" style="float:right;"></i></button>									
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button type="button" class="btn btn-link p-0" style="width:100%;" data-toggle="collapse" data-target="#collapseFive"><p style="float: left;margin-bottom: 0px; font-size:18px;">What is HTML?</p><i class="fa fa-chevron-down" style="float:right;"></i></button>									
                    </h2>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                        <p>HTML stands for HyperText Markup Language. HTML is the standard markup language for describing the structure of web pages. <a href="https://www.tutorialrepublic.com/html-tutorial/" target="_blank">Learn more.</a></p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero -->
@stop

{{-- content --}}
@section('content')
    <main id="main">    
        <div class="modal fade show" id="myModal" role="dialog" style="padding:0px;top:10vh;display:none;">
            <div class="modal-dialog" style="min-width:40%;">
                <div class="modal-content" style="z-index:1052;display:inline-table;background: beige;">
                    <div class="modal-body">
                        <h2 class="welcome-header">Obrigado!</h2>
                        <p class="welcome-view-dialog">Em breve, você irá receber um e-mail nosso com uma proposta formalizada para o destino escolhido.<br> <br>
                                Vamos formatar a melhor proposta disponível de acordo com as informações que você nos forneceu. O tempo médio para envio da proposta gira em torno de 10 minutos. <br> <br>
                                Em caso de dúvidas, você pode nos chamar pelo número.
                        </p>
                        <button id="welcome_btn" class="btn btn-primary" style="position:relative;width:30%;left:35%;">OK</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade show" id="contactModal" role="dialog" style="padding:0px;top:10vh;display:none;">
            <div class="modal-dialog" style="min-width:40%;">
                <div class="modal-content" style="z-index:1052;display:inline-table;background: beige;">
                    <div class="modal-body">
                        <h2 class="welcome-header">Obrigado!</h2>
                        <p class="welcome-view-dialog text-center">Recebemos sua mensagem, e em breve, entraremos em contato!</p>
                        <button id="welcome_btn_contact" class="btn btn-primary" style="position:relative;width:30%;left:35%;">OK</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade show" id="subscribeModal" role="dialog" style="padding:0px;top:10vh;display:none;">
            <div class="modal-dialog" style="min-width:40%;">
                <div class="modal-content" style="z-index:1052;display:inline-table;background: beige;">
                    <div class="modal-body">
                        <h2 class="welcome-header">Obrigado!</h2>
                        <p class="welcome-view-dialog text-center">Cadastro realizado com sucesso!</p>
                        <button id="welcome_btn_subscribe" class="btn btn-primary" style="position:relative;width:30%;left:35%;">OK</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@stop
{{-- footer scripts --}}
@section('footer_scripts')
<script>
    AOS.init({
        once: true
    })
    $(document).ready(function(){
        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-chevron-up").removeClass("fa-chevron-down");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-chevron-down").addClass("fa-chevron-up");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-chevron-up").addClass("fa-chevron-down");
        });
    });
</script>
@stop
