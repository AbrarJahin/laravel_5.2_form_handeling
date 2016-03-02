<div class="wagon wagon-project mt-50">
    <div class="wagon-body">
        <div class="form-group">
            <div class="col-sm-4">
                <div class="label-grouped">
                    <label>UPLOAD RELATED documents</label>
                </div>
            </div>                                
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-xs-6">
                        <div class="upload-file no-btn">
                            <div class="up-field"></div>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <a href="" class="add-more-file">
                            <i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Add more Files
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <div class="label-grouped">
                    <label>Preferred font</label>
                    <p>
                        (Morbi leo risus, porta ac consectetur ac, at eros Vivamus sagittis lacus vel augue laoreet.)
                    </p>
                </div>
            </div>                                
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-xs-6">
                        <ul class="list-unstyled fonts-list">
                            <li>https://www.google.com/fonts</li>
                        </ul>    
                    </div>
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="upload-file no-btn">
                                    <div class="up-field"></div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <a href="" class="add-more-file">
                                    <i class="fa fa-plus-circle"></i> &nbsp;&nbsp;Add more Files
                                </a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <div class="label-grouped">
                    <label>PREFERRED COLORS</label>
                </div>
            </div>                                
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-xs-6 col-xxs-12">
                        <input class="form-control color-field color-pic" name="preferred_color_1" value="@if(old('preferred_color_1')){{old('preferred_color_1')}}@elseif (isset($projectvisual)){{ $projectvisual->preferred_color_1 }}@endif">
                        <span class="validator_output">{{ $errors->first('preferred_color_1') }}</span>
                    </div>
                    <div class="col-xs-6 col-xxs-12">
                        <input class="form-control color-field color-pic" name="preferred_color_2" value="@if(old('preferred_color_2')){{old('preferred_color_2')}}@elseif (isset($projectvisual)){{ $projectvisual->preferred_color_2 }}@endif">
                        <span class="validator_output">{{ $errors->first('preferred_color_2') }}</span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>