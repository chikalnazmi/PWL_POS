<!DOCTYPE html>
<html> 
    <head>
        <title>Data user Pengguna</title>
    </head>
    <body>
    <h1>Data user Pengguna</h1>
        <a href="/user/tambah">+ Tambah User</a>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <td>ID</td>
                <td>Username</td>
                <td>Nama user</td>
                <td>ID Level user</td>
                <td>Aksi</td>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{ $d->user_id }}</td> <!-- Pastikan kolom ini ada di tabel -->
                <td>{{ $d->username }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->level_id }}</td>
                <td>{{ $d->level_id->level_kode}}</td>
                <td>{{ $d->level_id->level_nama}}</td>
                <td><a href="/user/ubah/{{ $d->user_id }}">Ubah</a> | <a href="/user/hapus/{{ $d->user_id }}">Hapus</a></td>
            </tr>
            @endforeach
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