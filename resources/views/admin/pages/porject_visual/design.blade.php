<div class="wagon wagon-project">
    <div class="wagon-header">
        <h3 class="heading-title">Design</h3>
    </div>


    <div class="wagon-body">
        <div class="form-group">
            <div class="col-sm-4">
                <div class="label-grouped">
                    <label>SITEMAP</label>
                    <p>
                        (Morbi leo risus, porta ac consectetur ac, at eros Vivamus sagittis lacus vel augue laoreet.)
                    </p>
                </div>
            </div>                                
            <div class="col-sm-8">
               

                 <textarea class="form-control" name="sitemap">@if(old('sitemap')){{old('company_name')}}@elseif (isset($projectvisual)){{ $projectvisual->sitemap }}@endif</textarea>
                <span class="validator_output">{{ $errors->first('sitemap') }}</span>  
                
               

            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <div class="label-grouped">
                    <label>LOOK AND FEEL</label>
                    <p>
                       (Morbi leo risus, porta ac consectetur ac, at eros Vivamus sagittis lacus vel augue laoreet.) 
                    </p>
                    <button class="btn btn-red uppercase bold btn-md mt-10">VIEW FROM OUR PORTFOLIO</button>
                </div>
            </div>                                
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm-4 col-xs-6 col-xxs-12">
                        <div class="temp-screenshot text-center">
                            <div class="screenshot-thumb">
                                <div class="screenshot-thumb-img">
                                    <img class="img-responsive" src="{{ URL::asset('images/screenshots/1.png') }}" alt="img">
                                </div>
                            </div>
                            <div class="temp-details">
                                <h5 class="title">Template Name</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-xxs-12">
                        <div class="temp-screenshot text-center">
                            <div class="screenshot-thumb">
                                <div class="screenshot-thumb-img">
                                    <div class="no-thumb">NO TEMPLATE SELECTED</div>
                                </div>
                            </div>
                            <div class="temp-details">
                                <h5 class="title">Template Name</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6 col-xxs-12">
                        <div class="temp-screenshot text-center">
                            <div class="screenshot-thumb">
                                <div class="screenshot-thumb-img">
                                    <div class="no-thumb">NO TEMPLATE SELECTED</div>
                                </div>
                            </div>
                            <div class="temp-details">
                                <h5 class="title">Template Name</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <div class="label-grouped">
                    <label>REFERENCE WEBSITES</label>
                    <p>
                       (Morbi leo risus, porta ac consectetur ac, at eros Vivamus sagittis lacus vel augue laoreet.) 
                    </p>
                </div>
            </div>                                
            <div class="col-sm-8">
                <textarea class="form-control" name="referance_websites">@if(old('referance_websites')){{old('referance_websites')}}@elseif (isset($projectvisual)){{ $projectvisual->referance_websites }}@endif</textarea>
                <span class="validator_output">{{ $errors->first('referance_websites') }}</span>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <div class="label-grouped">
                    <label>what do you about  like these references?</label>
                    <p>
                       (Morbi leo risus, porta ac consectetur ac, at eros Vivamus sagittis lacus vel augue laoreet.) 
                    </p>
                </div>
            </div>                                
            <div class="col-sm-8">
                <textarea class="form-control" name="referance_similarities">@if(old('referance_similarities')){{old('referance_similarities')}}@elseif (isset($projectvisual)){{ $projectvisual->referance_similarities }}@endif</textarea>
                <span class="validator_output">{{ $errors->first('referance_similarities') }}</span>
            </div>
        </div>

    </div>
</div>