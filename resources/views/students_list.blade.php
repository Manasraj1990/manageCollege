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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
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
        <h1 class="text-center">Students List<h1>

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mobile</th>
                            <th scope="col">Department</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $stu)
                            <tr>
                                <td>{{ $stu->id }}</td>
                                <td>{{ $stu->vName }}</td>
                                <td>{{ $stu->vEmail }}</td>
                                <td>{{ $stu->vMobile }}</td>
                                <td>{{ $stu->vDepartmentName }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>
