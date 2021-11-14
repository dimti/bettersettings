<?php namespace Dimti\BetterSettings\Behaviours;

use System\Behaviors\SettingsModel;

class BetterSettings extends SettingsModel
{
    public function get($key, $default = null)
    {
        if ((!$value = parent::get($key)) && array_key_exists($key, $this->model->defaults)) {
            $value = $this->model->defaults[$key];
        }

        return $value;
    }
}
