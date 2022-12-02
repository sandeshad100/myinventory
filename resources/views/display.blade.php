
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
     <x-header/>
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
                @foreach ($data as $row)
                <tr>
                    <td>{{ $row['id'] }}</td>
                    <td>{{ $row['item'] }}</td>
                    <td>{{ $row->category['category_name'] }}</td>
                    <td>{{ $row['qty'] }}</td>
                    <td>{{ $row['rate'] }}</td>
                    <td><a href="{{Route('add.qty',$row->id)}}"><button>Add</button></a></td>
                    <td><a href="{{Route('sub.qty',$row->id)}}"><button>Deduct</button></a></td>
                
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