<!DOCTYPE html>
<html lang="en">

<head>
    <title>Decrease Item</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
   
    <div class="container">
        <h2>Decrease Qty</h2>
        <form action="{{route('decItemView',$item->id)}}" method="post">
            @csrf
           
            <div class="form-group">
                <input type="text" class="form-control" name="qty" placeholder="Enter increase quantity">
            </div>
            <button type="submit" class="btn btn-default">Increase Quantity</button>
        </form>
    </div>

</body>
<style>
    * {
        font-size: 18px;
    }
</style>

</html>