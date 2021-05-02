<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <style>
        .student-form form label {
            padding: 8px;
            font-size: 22px;
            font-family: fantasy;
        }

        .student-form h1 {
            margin-top: 25px;
            font-family: fantasy;
        }

        .save-btn {
            width: 100px;
            background: #002BFF;
            color: white;
        }

        .save-btn:hover {
            background-color: black;
            color: white;

        }

        .alert {
            font-size: 15px;
        }

    </style>

</head>

<body>

    <div class="container student-form">
        <h1 class="text-center">Students Registration<h1>

                @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('error') }}
                    </div>
                @endif

                <a href="{{route('show')}}" class="btn btn-warning" title="Students list"><i class="fas fa-eye"></i> Students List</a>
                <div class="mt-4">
                    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="">Student Name</label>
                            <input type="text" placeholder="Enter Student Name" class="form-control" name="vName"
                                value="">
                            <label>Email</label>
                            <input type="text" placeholder="Enter Email" class="form-control" name="vEmail" value="">
                            <label>Mobile Number</label>
                            <input type="text" placeholder="Enter Mobile Number" class="form-control" name="vMobile"
                                value="">
                            <label>Department Name</label>
                            <input type="text" placeholder="Department Name" class="form-control" name="vDepartmentName"
                                value="">

                            <button type="submit" class="btn form-control save-btn float-right p-2 mt-4">SAVE</button>
                        </div>
                    </form>
                </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
