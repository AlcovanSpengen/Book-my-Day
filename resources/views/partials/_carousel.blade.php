<div class="container" id="carousel">
    <div class="row">
            <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="6000">
                <div class="carousel-inner col-sm w-100 mx-auto" role="listbox" id="img-saveurs">
                    <div class="carousel-item active">
                        <div class="row" style="width: 1194px">
<<<<<<< HEAD
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/7zussen.jpg">
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/aardbevingen.jpg" >
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/geluk.jpg" >
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/heterdaad.jpg" >
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/reuzenperzik.jpg" >
=======
                            @if (count($images) > 0)
                                @foreach($images as $image)
                                    <div class="col-md-2">
                                        <img class="img-fluid mx-auto d-block" src="images/{{ $image->image }}">
                                        <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/7zussen.jpg">
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/aardbevingen.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/geluk.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/heterdaad.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/reuzenperzik.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
<<<<<<< HEAD
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row" style="width: 1194px !important;">
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/obama.jpg" >
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/gorgels.jpg" >
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/taal.jpg"  >
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/building.jpg" >
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/nieuwe.jpg" >
=======
                                </div>                                
                            @endif
                            </div>
                        </div>

                    

                        <div class="carousel-item">
                            <div class="row" style="width: 1194px !important;">
                                
                            @if (count($images2) > 0)
                                @foreach($images2 as $image2)
                                    <div class="col-md-2">
                                        <img class="img-fluid mx-auto d-block" src="images/{{ $image->image }}">
                                        <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                                
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/obama.jpg" >
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/gorgels.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/taal.jpg"  >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/building.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <img class="img-fluid mx-auto d-block" src="images/nieuwe.jpg" >
                                    <div class="card-body">
                                            <a class="btn btn-primary">Button</a>
                                    </div>
                                </div>
<<<<<<< HEAD
=======
                            @endif
>>>>>>> afecbce755f6465d9da36ccad7c0fb2850fc6c3b
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
