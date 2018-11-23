<div class="form-group">

    <div class="row">
        <div class="col-md-12">
            {{ Form::label($title,null,['class' => 'control-label']) }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <fieldset class="rating">


                {{ Form::radio($name, '5',false,['id' => 'star5'])}}
                {{ Form::star_label('full','star5','Awesome - 5 stars') }}

                {{ Form::radio($name, '4.5',false,['id' => 'star4half'])}}
                {{ Form::star_label('half','star4half','Pretty good - 4.5 stars') }}

                {{ Form::radio($name, '4',false,['id' => 'star4'])}}
                {{ Form::star_label('full','star4','Pretty good - 4 stars') }}

                {{ Form::radio($name, '3.5',false,['id' => 'star3half'])}}
                {{ Form::star_label('half','star3half','Meh - 3.5 stars') }}

                {{ Form::radio($name, '3',false,['id' => 'star3'])}}
                {{ Form::star_label('full','star3','Meh - 3 stars') }}

                {{ Form::radio($name, '2.5',false,['id' => 'star2half'])}}
                {{ Form::star_label('half','star2half','Kinda bad - 2.5 stars') }}

                {{ Form::radio($name, '2',false,['id' => 'star2'])}}
                {{ Form::star_label('full','star2','Kinda bad - 2.5 stars') }}

                {{ Form::radio($name, '1.5',false,['id' => 'star1half'])}}
                {{ Form::star_label('half','star1half','Sucks big time - 1 star') }}

                {{ Form::radio($name, '1',false,['id' => 'star1'])}}
                {{ Form::star_label('full','star1','Sucks big time - 1 star') }}

                {{ Form::radio($name, '.5',false,['id' => 'starhalf'])}}
                {{ Form::star_label('half','starhalf','Sucks big time - 0.5 stars') }}


            </fieldset>
        </div>
    </div>

</div>
