<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Buy</title>
  <meta name="description" content="Description Goes Here">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<x-header/>
    <h1>Category Item</h1>
    <form action="{{route('addCategoryView')}}" method="post">
        @csrf
        <label>Category Name</label>
        <input type="text" name="category">
        <span><a><button type="submit" class="btn-add">Add Category</button></a></span>
    </form>
</div>
</body>
<style>
.container{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}
    h1{
        font-size: 30px;
    }
    *{
        font-size: 18px;
        font-family: Arial, Helvetica, sans-serif;
    }
label{
    display: block;
}

input{
    height: 30px;
    margin: 10px 10px 10px 0;
}
button{
    display: block;
    padding: 10px 20px;
    margin: 15px 15px 15px 0;
}
</style>
</html>