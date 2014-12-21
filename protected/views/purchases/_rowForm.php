<?php $row_id = "purchase-" . $key ?>
<tr class='row-fluid' id="<?php echo $row_id ?>">
    <td>
        <?php
        echo $form->textField($model, "[$key]name");
        echo $form->error($model, "[$key]name");
        ?>
    </td>
    <td>
        <?php
        echo $form->textField($model, "[$key]price");
        echo $form->error($model, "[$key]price");
        ?>
    </td>

    <td>
        <?php echo $form->deleteRowButton($row_id, $key); ?>
    </td>
    <?php
    echo $form->hiddenField($model, "[$key]id");
    echo $form->updateTypeField($model, $key, "updateType", array('key' => $key));
    ?>
</tr>