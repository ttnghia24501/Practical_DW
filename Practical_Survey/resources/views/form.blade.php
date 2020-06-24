<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Feedback Form Using HTML, CSS And PHP - reusable form</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body >
<div class="container">
    <div class="imagebg"></div>
    <div class="row " style="margin-top: 50px">
        <div class="col-md-6 col-md-offset-3 form-container">
            <h2>Feedback Dynamic Websites</h2>
            <p> Please provide your feedback below: </p>
            <form role="form" action="{{url("/save")}}" method="post">
                @method("POST")
                @csrf
                <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="feedback">Feedback</label><br>
                        <textarea class="form-control @error("feedback")is-invalid @enderror"type="text" name="feedback" placeholder="Enter Name">
                        </textarea>
                        @error("feedback")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="feedback">Your Name</label><br>
                        <input class="form-control @error("name")is-invalid @enderror"type="text" name="name" placeholder="Enter Name">
                        @error("name")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="feedback">Email</label><br>
                        <input class="form-control @error("email")is-invalid @enderror"type="text" name="email" placeholder="Enter Name">
                        @error("email")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 form-group">
                        <label for="feedback">Telephone</label><br>
                        <input class="form-control @error("telephone")is-invalid @enderror"type="text" name="telephone" placeholder="Enter Name">
                        @error("telephone")
                        <span class="error invalid-feedback">{{$message}}</span>
                        @enderror
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
            <div id="success_message" style="width:100%; height:100%; display:none; "> <h3>Posted your feedback successfully!</h3> </div>
            <div id="error_message" style="width:100%; height:100%; display:none; "> <h3>Error</h3> Sorry there was an error sending your form. </div>
        </div>

    </div>

</div>
</div>
</body>
<style>

    body {
        background-color: #000;
    }
    html,
    body {
        height: 100%;
    }
    .imagebg {
        background-image: url("images/mixing-desk-351478_1920.jpg");
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        background-attachment: fixed;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        -webkit-filter: blur(3px);
        filter: blur(3px);
        opacity: 0.6;
        filter: alpha(opacity=60);
    }
    .form-container
    {
        background-color: #fff;
        box-shadow: 0 16px 24px 2px rgba(0,0,0,0.14), 0 20px 30px 5px rgba(0,0,0,0.12), 0 8px 10px -5px rgba(0,0,0,0.3);
        border-radius: 8px;
        font-family: 'Montserrat', Arial, Helvetica, sans-serif;
    }
</style>
{{--<script>--}}
{{--    $(function()--}}
{{--    {--}}
{{--        function after_form_submitted(data)--}}
{{--        {--}}
{{--            if(data.result == 'success')--}}
{{--            {--}}
{{--                $('form#reused_form').hide();--}}
{{--                $('#success_message').show();--}}
{{--                $('#error_message').hide();--}}
{{--            }--}}
{{--            else--}}
{{--            {--}}
{{--                $('#error_message').append('<ul></ul>');--}}

{{--                jQuery.each(data.errors,function(key,val)--}}
{{--                {--}}
{{--                    $('#error_message ul').append('<li>'+key+':'+val+'</li>');--}}
{{--                });--}}
{{--                $('#success_message').hide();--}}
{{--                $('#error_message').show();--}}

{{--                //reverse the response on the button--}}
{{--                $('button[type="button"]', $form).each(function()--}}
{{--                {--}}
{{--                    $btn = $(this);--}}
{{--                    label = $btn.prop('orig_label');--}}
{{--                    if(label)--}}
{{--                    {--}}
{{--                        $btn.prop('type','submit' );--}}
{{--                        $btn.text(label);--}}
{{--                        $btn.prop('orig_label','');--}}
{{--                    }--}}
{{--                });--}}

{{--            }//else--}}
{{--        }--}}

{{--        $('#reused_form').submit(function(e)--}}
{{--        {--}}
{{--            e.preventDefault();--}}

{{--            $form = $(this);--}}
{{--            //show some response on the button--}}
{{--            $('button[type="submit"]', $form).each(function()--}}
{{--            {--}}
{{--                $btn = $(this);--}}
{{--                $btn.prop('type','button' );--}}
{{--                $btn.prop('orig_label',$btn.text());--}}
{{--                $btn.text('Sending ...');--}}
{{--            });--}}
{{--            $.ajax({--}}
{{--                type: "POST",--}}
{{--                url: 'handler.php',--}}
{{--                data: $form.serialize(),--}}
{{--                success: after_form_submitted,--}}
{{--                dataType: 'json'--}}
{{--            });--}}

{{--        });--}}
{{--    });--}}

{{--</script>--}}
</html>
