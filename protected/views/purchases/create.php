<div class="content">
    <?php
    /* @var $this PurchasesController */
        Yii::app()->clientScript->registerCss('tableScript', '
            .table {
                display: table;
            }
            .table-row {
                display: table-row;
            }
            .table-cell {
                display: table-cell;
            }
        ');

    ?>

    <?php
    $form = $this->beginWidget('DynamicTabularForm', array(
        'defaultRowView'=>'_rowForm',
    ));
    ?>
    <table class="test">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Mobile</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <div class='table'>
        <div class="table-row">
            <div class="table-cell">Name</div>
            <div class="table-cell">Price</div>
            <div class="table-cell">Action</div>
        </div>

        <?php
        echo $form->rowForm($purchases);
        ?>
    </div>
    <?php
    echo CHtml::submitButton('create');

    $this->endWidget();
    ?>
</div>