

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Live Search</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center mt-5">
            <h1 class="fw-bold">Live Search</h1>
                <form action="" method="post">
                    <input class="form-control" id="live_search" type="text" name="input" placeholder="Search">
                </form>

                <div id="search_result"></div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#live_search").keyup(function() {
                let input = $(this).val();
                if(input != '') {
                    $.ajax({
                        url: 'livesearch.php',
                        method: 'post',
                        data: {input: input},
                        success:function(data) {
                            $('#search_result').html(data);
                        }
                    })
                } else {
                    $('#search_result').css('display', 'none');
                }
            })
        })
    </script>
</body>
</html>