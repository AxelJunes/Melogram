<select class="selectpicker genre">
        <option disabled selected value>Música preferida</option>
  <?php foreach ($genres as $genre) { ?>
        <option value="<?php echo $genre->getId(); ?>"><?php echo $genre->getId(); ?></option>
  <?php } ?>
</select>
