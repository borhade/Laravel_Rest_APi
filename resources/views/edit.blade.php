<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <a href="{{route('getAllMemberDetails')}}">Back To List</a>
  <form action="/update" method="post">
     @csrf
    <div class="form-group">
      <input type="hidden" class="form-control"  name ="id" value={{$memberResult['id']}}>
    </div>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="name" name="name" value={{$memberResult['name'] ?? $memberResult['name']}}>
      @error("name")
      <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" name="email" value={{$memberResult['email'] ?? $memberResult['email']}}>
      @error("email")
        <span class="text-danger">{{$message}}</span>
      @enderror
    </div>
    <div class="form-group">
    <label for="address">Address:</label>
    <input type="text" class="form-control" id="address" name="address" value={{$memberResult['address'] ?? $memberResult['address']}}>
      @error("address")
      <span class="text-danger">{{$message}}</span>
      @enderror
  </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
</body>
</html>
