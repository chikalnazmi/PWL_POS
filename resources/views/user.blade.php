<!DOCTYPE html>
<html> 
    <head>
        <title>Data user Pengguna</title>
    </head>
    <body>
        <h1>Data user Pengguna</h1>
         <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama user</th>
                <th>ID Level user</th>
            </tr>
            <tr>
                <td>{{ $data->user_id}}</td>
                <td>{{ $data->username}}</td>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->level_id}}</td>
            </tr>
        </table>
       
        <!-- <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>Jumlah Pengguna</th>
                
            </tr>
            <tr>
                <td>{{ $data}}</td>
            </tr>
           
        </table> -->
    </body>
</html>