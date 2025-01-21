<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_SANDBOX_CLIENT_ID') }}"></script>
    <title>Paypal Integration</title>
</head>
<body>
    <h2>Product: Oppo A20x</h2>
    <h3>Price: $ 50</h3>
    <form action="{{route('processTransaction')}}" method="POST">
        @csrf
        <input name="price" type="hidden" value="50">
        <button type="submit" class="btn btn-primary m-3">Pay with PayPal</button>
    </form>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        {{session()->forget('success')}}
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        {{session()->forget('error')}}
    @endif
</body>
</html>