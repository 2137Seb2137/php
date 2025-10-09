<?php
class car {
    public $moc;
    private $model;
    private $marka;
        function __construct($model) {
        $this->model = $model;
    }
    Function __destruct() {
        echo "The car is {$this ->model}.";
    }
}


$model = new car();
$model-> = 'Punto'; //OK
$model->$moc = '30 koni'; //ERROR
$model->$marka = 'Fiat'; //ERROR
?>
