<?php

namespace EasySwoole\Validate\Functions;

use EasySwoole\Validate\Validate;

class Max extends AbstractValidateFunction
{
    public function name(): string
    {
        return 'Max';
    }

    public function validate($itemData, $arg, $column, Validate $validate): bool
    {
        if (!(new Numeric())->validate($itemData, null, $column, $validate)) {
            return false;
        }

        $data = $itemData * 1;
        if ($data > $arg) {
            return false;
        }

        return true;
    }
}
