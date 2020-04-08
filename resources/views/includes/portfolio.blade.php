
    <!--Portfolio Area Starts-->

    <div id="portfolio" class="portfolio-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
                        <p class="line-one"></p>
                        <h2>My Works</h2>
                        <p class="line-one"></p>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="portfolio-items">

                        @foreach($projects['projects'] as $key  =>$project)

                   <div class="col-md-4 col-sm-6 col-xs-12 no-pad">

                        <div @if($key == 1)id="inline-popups" @else id="inline-popups-{{@$key}}" @endif  @if($key == 1) class="port-box" @endif >
                            <a href="#test-popup-{{(int) $key}}" data-effect="mfp-zoom-out">
                                <div class="hovereffect">

                                    <img src="{{$project['image']}}" alt="portfolio image" class="img-responsive" style="width: 500PX ; height: 300PX"> <!--edit image-->
                                    <div class="overlay">
                                        <h2>{{  $project['name'] }}</h2> <!--your project name-->
                                        <p>{{ $project['description'] }}</p>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div id="test-popup-{{(int) $key}}" class="white-popup mfp-with-anim mfp-hide">
                            <div class="row">

                                <div class="col-md-7">
                                    <div class="por-img">
                                        <img src="{{asset($project['image'])}}" alt="portfolio image" class="img-responsive"> <!--edit image-->
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="por-text">
                                        <h2>{{  $project['name'] }}</h2> <!--your project title-->
                                        <p>{{$project['description']}}</p>
                                        <div class="por-text-details">
                                            <div class="row">
                                                <div class="col-xs-4">
                                                    <p>Client: </p>
                                                    <p>Status:</p>
                                                    <p>Type:</p>
                                                    <p>link:</p>
                                                </div>
                                                <div class="col-xs-offset-1 col-xs-7">
                                                    <p>{{ $project['client'] }}</p> <!--edit here-->
                                                    <p>{{ $project['status'] }}</p> <!--edit here-->
                                                    <p>{{ $project['type'] }}</p> <!--edit here-->
                                                    <p><a href="{{ $project['link'] }}"> click here</a></p> <!--edit here-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                        @endforeach

                   

                </div> <!--end portfolio grid -->

            </div>


        </div>
    </div>

    <!--Portfolio Area Ends-->