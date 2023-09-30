<!-- Roles Id Field -->
<div class="col-sm-12">
    {!! Form::label('roles_id', 'Rol de este Usuario:') !!}
    <p>

    <a href="{{ route('roles.show', $user->roles['id']) }}"
                               class='btn btn-outline-info'>
                               {{$user->roles['name']}}
                            </a>
    </p>

    
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $user->name }}</p>
</div>

<!-- Email Field -->
<div class="col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    <p>{{ $user->email }}</p>
</div>

<!-- Email Verified At Field 
<div class="col-sm-12">
    {!! Form::label('email_verified_at', 'Email Verified At:') !!}
    <p>{{ $user->email_verified_at }}</p>
</div>-->

<!-- Password Field 
<div class="col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <p>{{ $user->password }}</p>
</div>-->

<!-- Remember Token Field 
<div class="col-sm-12">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    <p>{{ $user->remember_token }}</p>
</div>-->


<H1>TRANSACCIONES DE ESTE USUARIO</H1>
<div class="col-sm-12 table table-striped">
    <table>
        <thead class="thead-dark">
            <tr>
                <th>transactions Id</th>
                <th>Producto</th>
                <th>amount</th>
                <th>payment_method</th>
                <th>status</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalAmount = 0; // Inicializamos el total en 0
            @endphp
            @foreach ($user->transactions as $transaction)
                @php
                    $totalAmount += $transaction->amount; // Sumamos el monto de cada transacción al total
                @endphp
                <tr>
                    <td>{{ $transaction->id }}</td>
                    <td>
                        <strong>{{ $transaction->qrcode['product_name'] }}</strong>
                        <img src="../{{ $transaction->qrcode['product_url_image_path'] }}" alt="{{ $transaction->qrcode['product_name'] }}" width="100">
                    </td>
                    <td>${{ $transaction->amount }}</td>
                    <td>{{ $transaction->payment_method }}</td>
                    <td>{{ $transaction->status }}</td>
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


<H1>PRODUCTOS DE ESTE USUARIO</H1>
<div class="col-sm-12 table table-striped">
    <table>
        <thead class="thead-dark">
            <tr>
                <th>Producto Id</th>
                <th>Producto</th>
                <th>amount</th>
            </tr>
        </thead>
        <tbody>
            @php
                $totalAmount = 0; // Inicializamos el total en 0
            @endphp
            @foreach ($user->qrcodes as $qrcode)
                
                <tr>
                    <td>
                    <a href="../qrcodes/{{$qrcode->id}}">{{ $qrcode->id }}</a>    
                    </td>
                    <td>
                    <strong><a href="../qrcodes/{{$qrcode->id}}">{{$qrcode->product_name }}</a></strong>                 

                    <img src="../{{$qrcode->product_url_image_path}}" alt="{{ $qrcode->product_name }}">

                    

                       
                    </td>
                    <td>{{ $qrcode->amount }}</td>
                   
            @endforeach
            
        </tbody>
    </table>
</div>