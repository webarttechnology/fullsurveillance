<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>
</head>
<body>
    <table style="width:100%; border: 1px solid black; border-collapse: collapse">
        <tr>
            <th style="border: 1px solid black; border-collapse: collapse">Name</th>
            <td style="border: 1px solid black; border-collapse: collapse">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid black; border-collapse: collapse">Email</th>
            <td style="border: 1px solid black; border-collapse: collapse">{{ $data['email'] }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid black; border-collapse: collapse">Subject</th>
            <td style="border: 1px solid black; border-collapse: collapse">{{ $data['subject'] }}</td>
        </tr>
        <tr>
            <th style="border: 1px solid black; border-collapse: collapse">Message</th>
            <td style="border: 1px solid black; border-collapse: collapse">{{ $data['message'] }}</td>
        </tr>
    </table>
</body>
</html>



