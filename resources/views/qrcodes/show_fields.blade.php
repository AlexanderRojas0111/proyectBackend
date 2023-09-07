<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $qrcode->user_id }}</p>
</div>

<!-- Website Field -->
<div class="col-sm-12">
    {!! Form::label('website', 'Website:') !!}
    <p><a href="{{ $qrcode->website }}" target="_blank">{{ $qrcode->website }}</a></p>
</div>

<!-- Company Name Field -->
<div class="col-sm-12">
    {!! Form::label('company_name', 'Company Name:') !!}
    <p>{{ $qrcode->company_name }}</p>
</div>

<!-- Product Name Field -->
<div class="col-sm-12">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $qrcode->product_name }}</p>
</div>

<!-- Product Url Field -->
<div class="col-sm-12">
    {!! Form::label('product_url', 'Product Url:') !!}
    <p><a href="{{ $qrcode->product_url }}" target="_blank">{{ $qrcode->product_url }}</a></p>
</div>

<!-- Product Url Image Path Field -->
<div class="col-sm-12">
    {!! Form::label('product_url_image_path', 'Product Url Image Path:') !!}
    {{--<p>{{ $qrcode->product_url_image_path }}</p>--}}
    <p>
    <img src="{{asset($qrcode->product_url_image_path)}}" style="width: 10%;" >
    </p>

</div>

<!-- Callback Url Field -->
<div class="col-sm-12">
    {!! Form::label('callback_url', 'Callback Url:') !!}
    <p><a href="{{ $qrcode->callback_url }}" target="_blank">{{ $qrcode->callback_url }}</a></p>
</div>

<!-- Qrcode Path Field -->
<div class="col-sm-12">
    {!! Form::label('qrcode_path', 'Qrcode Path:') !!}
    {{--<p>{{ $qrcode->qrcode_path }}</p>--}}

    <p>
    <img src="{{asset($qrcode->qrcode_path)}}" style="width: 10%;" >
    </p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $qrcode->amount }}</p>
</div>

