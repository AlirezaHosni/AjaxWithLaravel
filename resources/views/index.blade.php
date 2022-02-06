<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>ajax practice</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script >
        function functionClick(){
            var element = $("#" + "text")
            var url = element.attr('data-url')

            $.ajax({
                url : url,
                type : "GET",
                success : function(response){
                    element.val(response.number)
                }
            })
        }
    </script>
</head>
<body>
    <section class="text-center  offset-3  w-100% col-6 " >
        <section class="border" style="margin-top: 10rem; padding:20px 40px"  >
            <div >
                <label for=""class="mb-4">Ajax Practice</label>
                <input type="text" class="form-control" id="text" data-url="{{ route('ajax') }}">
            </div>
                <button onclick="functionClick()" class="btn btn-info" style="margin-top: 30px; "  >Generate</button>
        </section>
    </section>  
</body>
</html>