<?php

/**
 *
 *
 * All rights reserved.
 *
 * @author Okulov Anton
 * @email qantus@mail.ru
 * @version 1.0
 * @company Studio107
 * @site http://studio107.ru
 * @date 17/02/15 17:19
 */
namespace Modules\Tour\Forms;

use Mindy\Form\Fields\HiddenField;
use Mindy\Form\ModelForm;
use Modules\Tour\Models\Order;

class OrderForm extends ModelForm
{
    public function getFields()
    {
        return [
            'event' => HiddenField::className()
        ];
    }

    public function getModel()
    {
        return new Order;
    }
}