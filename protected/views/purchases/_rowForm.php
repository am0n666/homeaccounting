<?php $row_id = "purchase-" . $key ?>
<div class='row-fluid table-row' id="<?php echo $row_id ?>">
    <?php
    echo $form->hiddenField($model, "[$key]id");
    echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
    ?>

    <div class="table-cell">
        <?php
        echo $form->textField($model, "[$key]name");
        echo $form->error($model, "[$key]name");
        ?>

    </div>
    <div class="table-cell">
        <?php
        echo $form->textField($model, "[$key]price");
        echo $form->error($model, "[$key]price");
        ?>

    </div>

    <div class="table-cell">
        <?php echo $form->deleteRowButton($row_id, $key); ?>
    </div>
</div>