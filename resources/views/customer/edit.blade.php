<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bạn muốn thêm khách hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h2 style="margin-left: 35%">Bạn có muốn sữa</h2>
<form method="post" action="{{route('customer.update', ['id' => $customer->id])}}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter name" value="{{$customer->name}}">
    </div>
    <div class="form-group">
        <label>Age</label>
        <input type="number" class="form-control" name="age" placeholder="Age" value="{{$customer->age}}">
    </div>
    <div class="form-group">
        <label>Phone</label>
        <input type="number" class="form-control" name="phone" placeholder="Phone" value="{{$customer->phone}}">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" name="email" placeholder="Email" value="{{$customer->email}}">
    </div>
    <div class="form-group">
        <label>Address</label>
        <input type="text" class="form-control" name="address" placeholder="Address" value="{{$customer->address}}">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control-file" name="image" placeholder="Image" value="{{$customer->image}}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{route('customer.index')}}" class="btn btn-dark">Back</a>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>