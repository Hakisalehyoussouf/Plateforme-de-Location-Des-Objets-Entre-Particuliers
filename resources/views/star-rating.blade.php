<fieldset class="rating">

    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="5"  @if ($annonce['note'] == 5) checked @endif disable/><label class = "full" for="star5" title="Awesome - 5 stars"    ></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="4 and a half"  @if ($annonce['note'] == 4.5) checked @endif disable /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" @if ($annonce['note'] == 4) checked @endif/><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="3 and a half"  @if ($annonce['note'] == 3.5) checked @endif disable/><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="3"  @if ($annonce['note'] == 3) checked @endif disable /><label class = "full" for="star3" title="Meh - 3 stars"></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="2 and a half"  @if ($annonce['note'] == 2.5) checked @endif disable /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="2"  @if ($annonce['note'] == 2) checked @endif disable /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="1 and a half"  @if ($annonce['note'] == 1.5) checked @endif disable/><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="1"  @if ($annonce['note'] == 1) checked @endif disable/><label class = "full" for="star1" title="Sucks big time - 1 star" ></label>
    <input type="radio" id="star{{ $annonce['id_annonce']}}" name="rating{{ $annonce['id_annonce']}}" value="half"  /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
</fieldset>
                   
<style>
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);



/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 
  </style>