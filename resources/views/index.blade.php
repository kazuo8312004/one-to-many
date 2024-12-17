<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admins and Players</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <main class="container">
        <header class="my-5">
            <h1>Admins and Their Players</h1>
        </header>
        <section>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Admin Name</th>
                        <th>Player Names</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                            <td>
                                @if($admin->players->isEmpty())
                                    <p>No players assigned.</p>
                                @else
                                    <ul class="list-unstyled">
                                        @foreach($admin->players as $player)
                                            <li>{{ $player->name }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>
