<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All contacts</title>
</head>
<body>
<h1>All contacts</h1>

<a href="{{ route('contacts.create') }}">Add contacts</a>
<a href="{{ route('contacts.show', 2) }}">Show cantact</a>
</body>
</html>
