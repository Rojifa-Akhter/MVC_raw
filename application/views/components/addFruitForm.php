<h2>Add Fruit Form</h2>
<form action="<?php echo BASE_URL;?>/profileController/fruitStore" method="post">
    <div class="form-group">
        <input type="text" name="name" class="form-control" 
        placeholder="Fruit Name..." value="<?php if($data['name']): echo $data['name']; endif; ?>">
        <div class="error">
            <?php if($data['nameError']): echo $data['nameError']; endif; ?>
        </div>
    </div>
    <div class="form-group">
        <input type="text" name="price" class="form-control" 
        placeholder="Fruit Price..." value="<?php if($data['price']): echo $data['price']; endif; ?>">
        <div class="error">
            <?php if($data['priceError']): echo $data['priceError']; endif; ?>
        </div>
    </div>
    <div class="form-group">
        <select name="quality" class="form-control">
            <option value="">Select Quality</option>
            <option value="A" <?php if (!empty($data['quality']) && $data['quality'] === 'A') echo 'selected'; ?>>A</option>
            <option value="B" <?php if (!empty($data['quality']) && $data['quality'] === 'B') echo 'selected'; ?>>B</option>
            <option value="C" <?php if (!empty($data['quality']) && $data['quality'] === 'C') echo 'selected'; ?>>C</option>
        </select>

        <div class="error">
            <?php if($data['qualityError']): echo $data['qualityError']; endif; ?>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Add Fruit" class="btn btn-primary">
    </div>
</form>