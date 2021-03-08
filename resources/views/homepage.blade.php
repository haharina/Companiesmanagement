<!DOCTYPE html>
<html lang="en">
    @include('layouts.partials.head')

    <body id="top" >
        <div class="wrapper row1">
            <header id="header" class="hoc clear">
            @include('layouts.partials.nav')
            </header>
        </div>
        <div class="wrapper row1">

            <div class="wrapper row1">
                <div id="pageintro" class="wrapper row1 bgded" style="background-image:url('main/assets/img/a.png');">
                    <figure class="hoc clear">
                        <figcaption class="heading">COMPANY MANAGEMENT SYSTEM</figcaption>
                        <img src="main/assets/img/B.png" alt="">
                    </figure>
                </div>
            </div>
        </div>


        <section class="page-section bg-light" id="portfolio">
        
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">COMPANIES</h2>
                    <h3 class="section-subheading text-muted">List of company</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="main/assets/img/portfolio/web2.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Company 1</div>
                                <div class="portfolio-caption-subheading text-muted">Retail</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="main/assets/img/portfolio/recycle2.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Me & You Sdn Bhd</div>
                                <div class="portfolio-caption-subheading text-muted">E-commerce</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="main/assets/img/pp.jpg" alt="" />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Transport Cargo</div>
                                <div class="portfolio-caption-subheading text-muted">Transportation</div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="pagination justify-content-center" >
                    <span class="page-numbers current">1</span>
                    <a class="page-numbers" href="#">2</a>
                    <a class="next page-numbers" href="#">Next »</a>
                </nav>
                <br/>
        </section

        @include('layouts.partials.footer')
        @include('layouts.partials.modal')
        @include('layouts.partials.footer-scripts')
        
    </body>
</html>
