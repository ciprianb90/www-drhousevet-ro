 <!-- Start Banner 
    ============================================= -->
    <div class="banner-area" style="z-index:10">
        <div id="bootcarousel" class="carousel responsive-top-pad-110p text-large slide carousel-fade animate_text" data-ride="carousel">

            <!-- Wrapper for slides -->
            <div class="carousel-inner carousel-zoom">
                @foreach(F1::getSortedDataOfModel('slide', 'display_order') as $row)
                    <div class="carousel-item {{$loop->first ? 'active': ''}}">
                    
                        <div class="slider-thumb bg-cover" style="background-image: url({{ Voyager::image($row->image) }});">
   
                        </div>
                        
                        <div class="box-table semi-transp">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="content">
                                                <h2 data-animation="animated slideInDown" style="color:#f2f2f2;">{{$row->title}}<strong>{{$row->title_bold}}</strong></h2>
                                                <p  data-animation="animated slideInLeft" style="text-align: justify; color: #f2f2f2;">{{$row->description}}</p>
                                                <a data-animation="animated fadeInUp" class="btn btn-md btn-gradient" href="{{$row->primary_button_link}}">{{$row->primary_button_text}}</a>
                                                <a data-animation="animated fadeInDown" class="btn btn-md btn-light effect" href="{{$row->secondary_button_link}}">{{$row->secondary_button_text}}<i class="fas fa-angle-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div> 
                        
                         
                    </div>
                @endforeach

            </div>
            <!-- End Wrapper for slides -->

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                <i class="fa fa-angle-left" style="color:#55c0ac3e;"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                <i class="fa fa-angle-right" style="color:#55c0ac3e;"></i>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
    <!-- End Banner -->