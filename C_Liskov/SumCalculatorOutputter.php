<?php

class SumCalculatorOutputter {
    protected $calculator;

    public function __constructor(AreaCalculator $calculator) {
        $this->calculator = $calculator;
    }

    public function JSON () {
        $data = array('sum' => $this->calculator->sum());
        return json_encode($data);
    }

    public function HTML() {
        return implode('', array(
            '',
                'Sum of the areas of provided shapes: ',
                $this->calculator->sum(),
            ''
        ));
    }
}