<div class="content">
    <?php
    /* @var $this PurchasesController */
    ?>

    <?php
    $form = $this->beginWidget('DynamicTabularForm', array(
        'defaultRowView'=>'_rowForm',
    ));
    ?>
    <?php echo $form->rowForm($purchases, null, array('id' => ''), array('tag' => 'table'))?>
       <?php
    echo CHtml::submitButton('create');

    $this->endWidget();
    ?>
</div>