<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <a href="{{route('user.pdf')}}">
        <button class='btn btn-primary'>  Generate PDF </button>
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">name</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $row)
                    <tr>
                        <td> {{$row->id}}</td>
                        <td> {{$row->name}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>