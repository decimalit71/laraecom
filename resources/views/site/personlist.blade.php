<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person List</title>
</head>
<body>

    <table border="1" cellspacing="0" width="40%" cellpadding="10">
        <tr align="center">
            <td>Id</td>
            <td>Name</td>
            <td>Adress</td>
            <td>Email</td>
        </tr>

        @foreach ($person_list as $person)

        <tr>
            <td>{{$person->id}}</td>
            <td>{{$person->name}}</td>
            <td>{{$person->address}}</td>
            <td>{{$person->email}}</td>
        </tr>

        @endforeach


    </table>

</body>
</html>
