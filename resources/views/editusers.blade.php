<!doctype html>
<html lang="en">

<head>
    <title>Users update {{$user->name}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="section my-2 mx-5">
        <div class="row">
            <div class="col-lg-6">
                <form action="/api/users/{{$user->id}}" method="POST">
                    @csrf
                    <h3>Form Update User</h3>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{$user->name}}" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <textarea name="address" cols="30" rows="10" class="form-control">{{$user->address}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Phone number</label>
                        <input type="number" name="phone_number" value="{{$user->phone_number}}" required
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{$user->email}}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control custom-select">
                            <option value="">Select gender: </option>
                            <option value="M" @if($user->gender=='M') selected @endif>Male</option>
                            <option value="F" @if($user->gender=='F') selected @endif>Female</option>
                        </select>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="checked" class="form-check-input" id="exampleCheck1" value="1"
                            @if(in_array(1, explode(',', $user->check))) checked @endif>
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="checked" class="form-check-input" id="exampleCheck1" value="2"
                            @if(in_array(2, explode(',', $user->check))) checked @endif>
                        <label class="form-check-label" for="exampleCheck1">Check me out 2</label>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" name="checked" class="form-check-input" id="exampleCheck1" value="3"
                            @if(in_array(3, explode(',', $user->check))) checked @endif>
                        <label class="form-check-label" for="exampleCheck1">Check me out 3</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
