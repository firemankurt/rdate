<?php namespace Kurt\Test\Components;

use Cms\Classes\ComponentBase;
use Lang;

class Rrdate extends ComponentBase
{
    public $rdate = '';
    public $myevent = [];

    public function componentDetails()
    {
        return [
            'name' => 'Rrdate Component',
            'description' => 'No description provided yet...',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        if (post('Repeat')) {
            $this->processPost();
        }
    }

    public function onRender()
    {

        $this->addJs('/modules/backend/formwidgets/datepicker/assets/js/build-min.js');
        $this->addCss('/modules/backend/formwidgets/datepicker/assets/css/datepicker.css');
        $this->addCss('/modules/backend/formwidgets/datepicker/assets/vendor/pikaday/css/pikaday.css');
        $this->addCss('/modules/backend/formwidgets/datepicker/assets/vendor/clockpicker/css/jquery-clockpicker.css');

        $this->addJs('/plugins/kurt/test/assets/js/scheduler.js');
        //$this->addCss('//www.fuelcdn.com/fuelux/3.13.0/css/fuelux.min.css');
        //$this->addCss('/plugins/kurt/test/assets/css/fuelux.css');
        //$this->addJs('//www.fuelcdn.com/fuelux/3.13.0/js/fuelux.min.js');
        //$this->addJs('/plugins/kurt/test/assets/js/fuelux.js');
    }

    public function onProcess()
    {
        $this->processPost();
        return ['#answer' => $this->rdate];
    }

    public function processPost()
    {
        foreach (post() as $key => $value) {
            $fields[] = $key . '=' . (is_array($value) ? implode(',', $value) : strtoupper($value));

        }
        return $this->rdate = implode('<br/>', $fields);
        $rdate = '';
    }

    public function trans($string)
    {
        //return Lang::get('kurtjensen.mycalendar::lang.' . $string);
        return Lang::get($string);
    }

}
