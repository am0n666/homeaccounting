<?php
class PurchasesController extends Controller
{
    public function actions() {
        return array(
            'getRowForm' => array(
                'class' => 'ext.dynamictabularform.actions.GetRowForm',
                'view' => '_rowForm',
                'modelClass' => 'Purchases'
            ),
        );
    }

    public function actionIndex()
    {
        $purchases = array(new Purchases());

        if (isset($_POST['Purchases'])) {

            //Array to save state
            $purchases = array();

            foreach ($_POST['Purchases'] as $key => $value) {
                $purchase = new Purchases();
                $purchase->attributes = $value;
                $purchases[] = $purchase;
            }
            //TODO: add ajax
            foreach ($purchases as $purchase) {
                $purchase->date = date('Y-m-d H:i:s');
                $purchase->save();
            }
        }

        $this->render('create', array(
            'purchases' => $purchases,
        ));
    }
}