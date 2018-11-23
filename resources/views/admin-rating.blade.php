<style>
    .rating_{{$feedback_id}} {
        border: none;
        margin: auto;
        display: inline-block;
    }

    .rating_{{$feedback_id}} > input { display: none; }
    .rating_{{$feedback_id}} > label:before {
        margin: 5px;
        font-size: 1.3em;
        font-family: FontAwesome;
        display: inline-block;
        content: "\f005";
    }

    .rating_{{$feedback_id}} > .half:before {
        content: "\f089";
        position: absolute;
    }

    .rating_{{$feedback_id}} > label {
        color: #ddd;
        float: right;
    }

    .rating_{{$feedback_id}} label {
        margin-bottom: 0;
    }

    .rating_{{$feedback_id}} > input:checked ~ label{ color: #FFD700; }
</style>
<fieldset class="rating_{{$feedback_id}}">


    <input id="star5_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="5" @if($rating == '5')checked="true" @else disabled="true" @endif>
    <label class="full" for="star5" title="Awesome - 5 stars"></label>


    <input id="star4half_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="4.5" @if($rating == '4.5')checked="true" @else disabled="true" @endif>
    <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>


    <input id="star4_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="4" @if($rating == '4')checked="true" @else disabled="true" @endif>
    <label class="full" for="star4" title="Pretty good - 4 stars"></label>


    <input id="star3half_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="3.5" @if($rating == '3.5')checked="true" @else disabled="true" @endif>
    <label class="half" for="star3half" title="Meh - 3.5 stars"></label>


    <input id="star3_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="3" @if($rating == '3')checked="true" @else disabled="true" @endif>
    <label class="full" for="star3" title="Meh - 3 stars"></label>


    <input id="star2half_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="2.5" @if($rating == '2.5')checked="true" @else disabled="true" @endif>
    <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>


    <input id="star2_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="2" @if($rating == '2')checked="true" @else disabled="true" @endif>
    <label class="full" for="star2" title="Kinda bad - 2 stars"></label>


    <input id="star1half_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="1.5" @if($rating == '1.5')checked="true" @else disabled="true" @endif>
    <label class="half" for="star1half" title="Sucks big time - 1 star"></label>


    <input id="star1_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value="1" @if($rating == '1')checked="true" @else disabled="true" @endif>
    <label class="full" for="star1" title="Sucks big time - 1 star"></label>


    <input id="starhalf_{{$feedback_id}}" name="rating_{{$feedback_id}}" type="radio" value=".5" disabled="true" @if($rating == '0.5')checked="true" @else disabled="true" @endif>
    <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>

</fieldset>
