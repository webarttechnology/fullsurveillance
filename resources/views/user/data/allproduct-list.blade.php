@if ($orderdetail ?? null)
    <table class="myaccount-table table-responsive text-center table table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Product Name</th>
                <th>Amount</th>
                <th>Quantity</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orderdetail as $prod_data)
                <tr>
                    <td>{{ $prod_data->product_name }}</td>
                    <td>${{number_format($prod_data->amount, 2)}}</td>
                    <td>{{ $prod_data->quantity }}</td>
                    <td><a href="{{ url('/add-ratings/' . $prod_data->product_id) }}">Ratings</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
