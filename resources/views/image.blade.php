/**
 * Created by PhpStorm.
 * User: nikitha
 * Date: 12/10/2018
 * Time: 10:00 AM
 */

<div class="container">


    {!! Form::open(['action'=> 'ImageController@store', 'method'=>'POST']) !!}
    <div class="form-group" >
        {{Form::label('zipcode', 'Zipcode')}}
        {{Form::text('zipcode', '', ['class'=> 'form-control', 'placeholder' => 'Zipcode'])}}

    </div>

    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
</div>