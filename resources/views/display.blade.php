
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2 class="title">Hunchha Stock</h2>
        <a href="/form"><button>Add New Item</button></a>
        <a href="{{Route('add.category')}}"><button>Add New Category</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Item</th>
                    <th>Category</th>
                    <th>Qty</th>
                    <th>Rate</th>
                    <th>Add</th>
                    <th>Deduct</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                <tr>
                    <td>{{ $item['id'] }}</td>
                    <td>{{ $item['item'] }}</td>
                    <td>{{ $item['category'] }}</td>
                    <td>{{ $item['qty'] }}</td>
                    <td>{{ $item['rate'] }}</td>
                    <td><a href="{{Route('add.qty',$item->id)}}"><button>Add</button></a></td>
                    <td><a href="{{Route('sub.qty',$item->id)}}"><button>Deduct</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
<style>
    *{
        font-size: 18px;
    }
    .title{
        text-align: center;
    }
</style>
</html>