<div class="wagon mb-70 mt-50">
    <div class="wagon-body">
        <div class="other-note-holder">
            <label>Other Notes:</label>
            <textarea class="form-control" name="other_notes">@if(old('other_notes')){{old('other_notes')}}@elseif (isset($projectvisual)){{ $projectvisual->other_notes }}@endif</textarea>
            <span class="validator_output">{{ $errors->first('other_notes') }}</span>
        </div>
    </div>
</div>