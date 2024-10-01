<!DOCTYPE html>
<html>
    <head>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <style>
            table {
                width: 50%;
                margin: 20px auto;
            }

            table, th, td {
                border: 1px solid;
            }

            th, td {
                padding: 5px;
                text-align: left;
            }
        </style>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'];
        ?>    
        <table>
            <tr>
                <th>Atribut</th>
                <th>Nilai</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $Dosen['nama']; ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $Dosen['domisili']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $Dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>

    </body>
</html>