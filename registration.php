<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <style>
        body {
            margin: 20px 0;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }
        label.error {
            margin-top: 5px;
            color: red;
            font-weight: bold;
            font-size: 14px;
        }
        input.error {
            border: 1px dashed red;
        }
        input.valid {
            border: 2px solid green;
        }
    </style>
    <script>
        $(document).ready(function(){
            $("#myForm").validate({
                rules: {
                    fname: {
                        required: true,
                        minlength: 3
                    },
                    femail: {
                        required: true
                    },
                    fpass: {
                        required: true,
                        minlength: 5
                    },
                    fcpass: {
                        required: true,
                        minlength: 5,
                        equalTo: "#fpass"
                    }
                },
                messages: {
                    fname: {
                        required: "Please enter your name",
                        minlength: "Your name must be at least 3 characters long"
                    },
                    femail: {
                        required: "Please enter a valid email address"
                    },
                    fpass: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				    },
                    fcpass: {
                        required: "Please provide a password",
                        minlength: "Your password must be at least 5 characters long",
                        equalTo: "Please enter the same password as above"
                    },
                }
            });
        });
    </script>
</head>
<body>
    <!-- radio,checkbox,select,textarea,file,input,multiple select, radio, checkbox -->
    <div class="container">
        <form action="" method="post" id="myForm">
            <div class="form-group">
                <label for="fname">Name</label>
                <input type="text" name="fname" id="fname" class="form-control">
            </div>
            <div class="form-group">
                <label for="femail">Email</label>
                <input type="email" name="femail" id="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="fpass">Password</label>
                <input type="password" name="fpass" id="fpass" class="form-control">
            </div>
            <div class="form-group">
                <label for="fcpass">Confirm Password</label>
                <input type="password" name="fcpass" id="fcpass" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="save" class="btn btn-primary btn-sm">
            </div>
        </form>
    </div>
</body>
</html>