<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'PROPIETARIO DEL PRODUCTO') !!}
    <p>
    <a href="../users/{{ $qrcode->user['id'] }}" class='btn btn-outline-info'>{{ $qrcode->user['name'] }}</a>
    </p>
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

<H1>TRANSACCIONES DE ESTE PRODUCTO</H1>
<div class="col-sm-12 table table-striped">
    <table>
        <thead class="thead-dark">
            <tr>
                <th>transactions Id</th>
                <th>amount</th>
                <th>payment_method</th>
                <th>status</th>
                <th>usuario</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalAmount = 0; // Inicializamos el total en 0
            @endphp
            @foreach ($qrcode->transactions as $transaction)
                @php
                    $totalAmount += $transaction->amount; // Sumamos el monto de cada transacción al total
                @endphp
                <tr>
                    <td>
                        <a href="../transactions/{{ $transaction->id }}">{{ $transaction->id }}</a>
                    </td>
                    <td>${{ $transaction->amount }}</td>
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->status }}</td>
                    <td>
                        <a href="../users/{{ $transaction->user['id'] }}">{{ $transaction->user['name'] }}</a>
                    </td>


                </tr>
            @endforeach
            <tr>
                <td colspan="2"></td> <!-- Colspan para las tres primeras columnas vacías -->
                <td><h3>Total:</h3> 
                    <h4>${{ number_format($totalAmount, 2) }}</h4></td> <!-- Formateamos $totalAmount como dinero con 2 decimales -->
                <td></td> <!-- Dejamos la última columna vacía -->
            </tr>
        </tbody>
    </table>
</div>