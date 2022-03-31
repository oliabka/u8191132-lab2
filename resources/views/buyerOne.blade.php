<!DOCTYPE HTML>
<html>
<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Akaya+Telivigala&display=swap">
    <style>
        * {
            font-family: 'Akaya Telivigala', cursive;
            font-size: 25px;
        }
    </style>
    <meta charset="UTF-8">
    <title>Oliabka's tables | Customer #{{$buyer->id}}</title>
</head>
<body>
<div>
    <h1>Info for customer #{{$buyer->id}}:<br></h1>
    Name:{{ $buyer->name}} | Surname:{{ $buyer->surname}} |
    Blocked:{{ intval($buyer->blocked)}} | Phone:{{ $buyer->phone}} | Email:{{$buyer->email}} |
    Registered: {{ $buyer->registration_date}}
</div>
<div>
    @if(count($addresses)===0)
        <h2>This customer has no addresses</h2>
    @else
        <h2>Addresses:</h2>
        <ul>
            @foreach($addresses as $address)
                <li>Id:{{ sprintf("%03d", $address->id)}} |
                    Name:{{$address->name}} | City:{{$address->city}} |
                    Strict/district:{{$address->street_or_district}} | House:{{$address->house}} |
                    Floor:{{$address->floor}} | Apartment:{{$address->apartment}} | Code:{{$address->code}} |
                    Added: {{ $address->addition_date}}</li>
            @endforeach
        </ul>
    @endif
</div>
</body>
</html>
