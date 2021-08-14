@extends('layouts.app')


@section('content')

    @include('katiger.carousel')

    <style type="text/css">
    </style>
    <style type="text/css">
        a:link {
            color: #FCFF00;
            text-decoration: none;
        }
        a:visited {
            text-decoration: none;
            color: #FCFF00;
        }
        a:hover {
            text-decoration: underline;
            color: #FFCC00;
        }
        a:active {
            text-decoration: none;
            color: #FCFF00;
        }
    </style>
    <br> <br> <br> <br>

    <div class="card-deck">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <div>
                    <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                        <img src="uploads/user_id/5.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                            <p><strong class="price"> </strong></p>
                            <a class="button" href=""> Buy </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <div>
                    <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                        <img src="uploads/user_id/2.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                            <p><strong class="price"> </strong></p>
                            <a class="button" href=""> Buy </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-success">
            <div class="card-body text-center">
                <div>
                    <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                        <img src="uploads/user_id/4.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                            <p><strong class="price"> </strong></p>
                            <a class="button" href=""> Buy </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-danger">
            <div class="card-body text-center">
                <div>
                    <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                        <img src="uploads/user_id/17.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                            <p><strong class="price"> </strong></p>
                            <a class="button" href=""> Buy </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br><br><br><br>

    <div class="card-deck">
        <div class="card bg-primary">
            <div class="card-body text-center">
                <div>
                    <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                        <img src="uploads/user_id/5.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                            <p><strong class="price"> </strong></p>
                            <a class="button" href=""> Buy </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-warning">
            <div class="card-body text-center">
                <div>
                    <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                        <img src="uploads/user_id/2.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                            <p><strong class="price"> </strong></p>
                            <a class="button" href=""> Buy </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-success">
            <div class="card-body text-center">
                <div>
                    <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                        <img src="uploads/user_id/4.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                            <p><strong class="price"> </strong></p>
                            <a class="button" href=""> Buy </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-danger">
            <div class="card-body text-center">
                <div>
                    <div class="card bg-dark text-white mb-2" style="text-align: center; margin: auto;">
                        <img src="uploads/user_id/17.png" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text">Sld on thd make up the bulk of the card's content.</p>
                            <p><strong class="price"> </strong></p>
                            <a class="button" href=""> Buy </a>
                        </div>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
{{--    @extends('product.index')--}}
    @include('footer.footer')
@endsection


