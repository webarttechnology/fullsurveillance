<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Order Invoice #{{ $order->order_generate_id }}</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0;  padding: 0;  background-color: #f4f4f4;">

<div class="container" style="width: 100%; max-width: 600px; margin: 0 auto; background-color: #ffffff;  padding: 20px; box-sizing: border-box;">
    <h1 style="color: #333333">Your Order Invoice #{{ $order->order_generate_id }}</h1>

    <p>Dear {{ $order->order_billing_address->f_name.' '.$order->order_billing_address->l_name }},</p>

    <p style="margin-top: 30px; margin-bottom: 30px;">Thank you for choosing Full Surveillance! We appreciate your business. Attached, you will find the invoice for your recent order #{{ $order->order_generate_id }}.</p>

    <!-- Order details, billing information, and other relevant information here -->

    <table style="width: 100%;  border-collapse: collapse; margin-top: 20px;">
        <!-- Order summary table here -->
        <thead>
            <tr>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #f2f2f2;">Item</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #f2f2f2;">Quantity</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #f2f2f2;">Unit Price</th>
                <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #f2f2f2;">Total</th>
            </tr>
        </thead>
        <tbody>
            <!-- Replace the following rows with actual order details -->
            @foreach ( $order->order_detail as $item)
            <tr>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $item->product_name }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">${{  number_format($item->amount, 2)  }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">{{ $item->quantity }}</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">${{  number_format($item->amount * $item->quantity, 2) }}</td>
          
            </tr>   
            @endforeach
           
            <!-- ... Add more rows as needed ... -->
            <tr>
                <td colspan="3" style="text-align: right; border: 1px solid #dddddd; padding: 8px;">Subtotal</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">${{ number_format($order->amount, 2)  }}</td>
            </tr>
            @if ($order->coupon_amount > 0)
            <tr>
                <td colspan="3" style="text-align: right; border: 1px solid #dddddd; padding: 8px;">Coupon</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">${{ number_format($order->coupon_amount, 2)  }}</td>
            </tr>
           @endif
            <tr>
                <td colspan="3" style="text-align: right; font-weight: bold; border: 1px solid #dddddd; padding: 8px;">Total</td>
                <td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">${{  number_format($order->payable_amount, 2) }}</td>
            </tr>
        </tbody>
    </table>


    <div class="footer" style="margin-top: 50px; text-align: center;  color: #888888;">
        <p>Thank you once again for choosing Full Surveillance. We look forward to serving you again in the future.</p>
        <p>Best Regards,<br>The Full Surveillance Team</p>
    </div>
</div>
</body>
</html>



