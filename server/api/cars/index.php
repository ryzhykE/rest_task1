<?php
include '../../app/lib/function.php';
class Cars extends RestServer
{
    private $model;

    /**
     * create obj - model
     * parent run method
     * Cars constructor.
     */
    public function __construct()
    {
        $this->model = new ModelCars();
        $this->run();
    }

    public function getCars($data)
    {
        $result = $this->model->getCars($data);
        $result = $this->encodedData($result);
        return $result;
    }

    public function postCars($data)
    {
//        //TODO: add data to db
//        return ' The Post method postCars '.var_dump($data);
    }

    public function putCars($data)
    {
//        return var_dump($data).'PUTeprst ';
    }

    public function deleteCars($data)
    {
//        //todo: if empty data - return msg - input data
//        return 'Deleted ..'.var_dump($data);
    }
}
$cars = new Cars();
