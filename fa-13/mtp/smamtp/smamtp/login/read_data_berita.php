<?php require '../koneksi.php'; ?>
<table id="myTable" class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No. </th>
                                                <th>Judul</th>
                                                <th>Kategori</th>
                                                <th>Tanggal Publish</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $query = mysql_query("SELECT `id`, `judul`, `kategori`, `content`, `gambar`, DATE_FORMAT(tanggal, '%d %M %Y') FROM `konten` ORDER BY id DESC");
                                                $i = 1;
                                                while ($data = mysql_fetch_array($query)) {
                                                    $tgl = $data["DATE_FORMAT(tanggal, '%d %M %Y')"];
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?>.</td>
                                                <td><?php echo $data['judul']; ?><br>
                                                    <a href=""><small>Lihat</small></a> |
                                                    <a href=""><small>Edit</small></a> |
                                                    <a href="#javascript:void(0)" id="delete_product" data-id="<?php echo $data['id']; ?>"><small>Hapus</small></a>
                                                </td>
                                                <td><?php echo $data['kategori']; ?></td>
                                                <td><?php echo $tgl; ?></td>
                                            </tr>
                                            <?php 
                                                $i++;
                                                }
                                            ?>
                                        </tbody>
                                    </table>