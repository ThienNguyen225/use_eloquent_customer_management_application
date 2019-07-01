<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hiển thị danh sách khách hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<h2 style="margin-left: 35%">Danh sách quản lí khách hàng</h2>
<a href="{{route('customer.create')}}" class="btn btn-primary">ADD</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">STT</th>
        <th scope="col">Name</th>
        <th scope="col">Age</th>
        <th scope="col">Phone</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Image</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    @forelse($customers as $key => $customer)
    <tbody>
    <tr>
        <th scope="row">{{++$key}}</th>
        <td>{{$customer->name}}</td>
        <td>{{$customer->age}}</td>
        <td>{{$customer->phone}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->address}}</td>
        <td>
            <img src="{{ asset('storage/' . $customer->image) }}" alt="" style="width: 60px">
        </td>
        <td>
            <a href="{{route('customer.show', ['id' => $customer->id])}}" class="btn btn-danger">Show</a>
            <a href="{{route('customer.edit', ['id' => $customer->id])}}" class="btn badge-info">Edit</a>
            <a href="{{route('customer.delete', ['id' => $customer->id])}}" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    @empty
        <p>Bang nay chua co thong tin</p>
    @endforelse
    </tbody>
</table>
{{$customers->links()}}
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