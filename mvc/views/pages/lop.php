<h3>hákjhdkasjhi</h3>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name class</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data['lop'] as $l) : ?>
            <tr>
                <td scope="row"><?= $l['id'] ?></td>
                <td scope="row"><?= $l['tenLop'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>