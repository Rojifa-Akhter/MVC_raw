<table id="example" class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Quality</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php if (! empty($data)): ?>

            <?php foreach ($data as $fruit): ?>
            <tr>
                <td><?php echo $fruit->name; ?></td>
                <td><?php echo $fruit->price . "Tk"; ?></td>
                <td><?php echo $fruit->quality; ?></td>
                <td><a href="<?php echo BASE_URL; ?>/profileController/edit_fruit/<?php echo $fruit->id; ?>" class="btn btn-warning">Edit</a></td>
                <td><a href="<?php echo BASE_URL; ?>/profileController/delete/<?php echo $fruit->id; ?>" class="btn btn-danger">Delete</a></td>

            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
            


    </table>