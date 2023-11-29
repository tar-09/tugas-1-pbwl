<h2>Pelanggan</h2>

<a href="<?php echo URL; ?>/pelanggan/input" class="btn">Tambah Data Pelanggan</a>

<table id="dtb">
    <thead>
        <tr>
            <th>NO</th>
            <th>Golongan</th>
            <th>No Pelanggan</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>NO KTP</th>
            <th>Nomor Seri</th>
            <th>NO Meteran</th>
            <th>Status Aktif</th>
            <th>Level</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        foreach ($data['rows'] as $row) { ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $row['gol_nama']; ?></td>
                    <td><?php echo $row['pel_no']; ?></td>
                    <td><?php echo $row['pel_nama']; ?></td>
                    <td><?php echo $row['pel_alamat']; ?></td>
                    <td><?php echo $row['pel_HP']; ?></td>
                    <td><?php echo $row['pel_ktp']; ?></td>
                    <td><?php echo $row['pel_seri']; ?></td>
                    <td><?php echo $row['pel_meteran']; ?></td>
                    <td><?php echo $row['pel_aktif']; ?></td>
                    <td><?php echo $row['user_nama']; ?></td>
                    <td><a href="<?php echo URL; ?>/pelanggan/edit/<?php echo $row['pel_id']; ?>" class="btn">Edit</a></td>
                    <td><a href="<?php echo URL; ?>/pelanggan/delete/<?php echo $row['pel_id']; ?>" class="btn">Delete</a></td>
                </tr>
        <?php $no++;
        } ?>
    </tbody>
</table>