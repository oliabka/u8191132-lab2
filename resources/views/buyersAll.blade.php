<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&display=swap">
    <style>
        *{
            font-family: 'Akaya Telivigala', cursive;
            font-size: 25px;
        }
        .flexed {
            display:flex;
            flex-direction: row;
            align-items: start;
        }
        .flexed *{
            padding: 0;
        }
        .filter{
            padding:10px;
        }
        .pages *{
            font-size: 30px;
        }
        .pages li{
            padding-left:10px;
        }
    </style>
    <meta charset ="UTF-8">
    <title>Oliabka's tables | Customers</title>

</head>

<body>
<h2>Filtering:</h2>
<div class="flexed" >
    <div class="filter">
        <form action="/customers" method="POST">
            @csrf
            <div>Blocked
                <select name="blocked">
                    <option>no filter</option>
                    <option>blocked</option>
                    <option>not blocked</option>
                </select>
            </div>
            <div>Email <input name="email" type="email"></div>
            <div>Phone <input name="phone" type="text" ></div>
            <div>Name (optional: surname) <input name="name" type="text" ></div>
{{--            <div>Surname: <input name="surname" type="text" placeholder="Surname"></div>--}}
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
    <div><ul class="pages">
        <li style="display:inline"><a href="/customers?page=1">1</a></li>
        <li style="display:inline"><a href="/customers?page=2">2</a></li>
        <li style="display:inline"><a href="/customers?page=3">3</a></li>
        <li style="display:inline"><a href="/customers?page=4">4</a></li>
        <li style="display:inline"><a href="/customers?page=5">5</a></li>
        <li style="display:inline"><a href="/customers?page=6">6</a></li>
        <li style="display:inline"><a href="/customers?page=7">7</a></li>
        <li style="display:inline"><a href="/customers?page=8">8</a></li>
        <li style="display:inline"><a href="/customers?page=9">9</a></li>
        <li style="display:inline"><a href="/customers?page=10">10</a></li>
    </ul></div>
</div>
</body>
</html>
