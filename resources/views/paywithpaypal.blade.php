<html>

<head>
    <meta charset="utf-8">
    <title>How to integrate paypal payment in Laravel - websolutionstuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <div class="row">
        <div class="col-4 offset-md-4"><br><br>
            <h4 style="text-align: center;justify-content:center">Paypal payment integrate With laravel 8 </h4><br>
            <div>
                <form action="{{ url('charge') }}" method="post">
                    <input type="text" name="amount" class="form-control " placeholder="Enter The payment amount" /><br />
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" name="submit" value="Pay With Paypal">
                </form>
            </div><br/>
            <p>Created by Nasim</p>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>

</html>