<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&display=swap">
    <style>
        * {
            font-family: 'Akaya Telivigala', cursive;
            font-size: 25px;
        }

        .flexed {
            display: flex;
            flex-direction: row;
            align-items: start;
        }

        .flexed * {
            padding: 0;
        }

        .filter {
            padding: 10px;
        }

        .pages * {
            font-size: 30px;
        }

        .pages li {
            padding-left: 10px;
            display: inline;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", (e) => {
            const formObj = document.getElementById('myForm');
            for (let i = 0; i < 3; i++) {
                if (formObj.blocked[i].value === "{{$request->blocked}}") {
                    formObj.blocked[i].selected = true;
                }
            }
        });
    </script>
    <meta charset="UTF-8">
    <title>Oliabka's tables | Customers</title>
</head>

<body>
<h2>Filtering:</h2>
<div class="flexed">
    <div class="filter">
        <form action="/customers" method="GET" id="myForm">
            <div>Blocked
                <select id="blocked" name="blocked">
                    <option value="no filter">no filter</option>
                    <option value="blocked">blocked</option>
                    <option value="not blocked">not blocked</option>
                </select>
            </div>
            <div>Email <input name="email" type="email" value="{{$request->email}}"></div>
            <div>Phone <input name="phone" type="text" value="{{$request->phone}}"></div>
            <div>Name (optional: surname) <input name="name" type="text" value="{{$request->name}}"></div>
            <button>Filter</button>
        </form>
    </div>
</div>

<div>
    @if(count($buyers)===0)
        <h2>No customers fit the requirements</h2>
    @else
        <h2>Filtered customers:</h2>
        <ul>
            @foreach($buyers as $buyer)
                <li>Id:{{ sprintf("%03d", $buyer->id)}} |
                    Name:{{ $buyer->name}} | Surname:{{ $buyer->surname}} |
                    Blocked:{{ intval($buyer->blocked)}} | Phone:{{ $buyer->phone}} | Email:{{$buyer->email}} |
                    Registered: {{ $buyer->registration_date}}</li>
            @endforeach
        </ul>
    @endif
</div>

<div class="flexed">
    <div><h2>Pages:</h2></div>
    <div>
        <ul class="pages">
            <li><a href="/customers?page=1{{$shortRequest}}">1</a></li>
            <li><a href="/customers?page=2{{$shortRequest}}">2</a></li>
            <li><a href="/customers?page=3{{$shortRequest}}">3</a></li>
            <li><a href="/customers?page=4{{$shortRequest}}">4</a></li>
            <li><a href="/customers?page=5{{$shortRequest}}">5</a></li>
            <li><a href="/customers?page=6{{$shortRequest}}">6</a></li>
            <li><a href="/customers?page=7{{$shortRequest}}">7</a></li>
            <li><a href="/customers?page=8{{$shortRequest}}">8</a></li>
            <li><a href="/customers?page=9{{$shortRequest}}">9</a></li>
            <li><a href="/customers?page=10{{$shortRequest}}">10</a></li>
        </ul>
    </div>
</div>
</body>
</html>
