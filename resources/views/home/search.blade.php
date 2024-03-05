<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <style type="text/css">
        .div_center {
            margin: 0 auto;
            /* Center horizontally */
            align-items: center;
            /* Vertical centering */
            text-align: center;
            /* Optional: Center text content */
        }

        .search {
            width: 100px;
            height: 40px;
            background: rgb(218, 84, 84);
            border: none;
            margin-left: 10px;
        }

        i.fa {
            font-size: 44px;
            margin-left: 10px;
            color: rgb(218, 84, 84);
        }
    </style>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="div_center">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="search" type="submit">Search</button>
                <a href=""><i class="fa fa-barcode" aria-hidden="true"></i></a>

            </form>

        </div>
    </nav>
</body>

</html>