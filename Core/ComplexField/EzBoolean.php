<?php

namespace Kaliop\eZMigrationBundle\Core\ComplexField;

use eZ\Publish\Core\FieldType\Checkbox\Value as CheckboxValue;
use Kaliop\eZMigrationBundle\API\ComplexFieldInterface;

class EzBoolean extends AbstractComplexField implements ComplexFieldInterface
{
    /**
     * Creates a value object to use as the field value when setting a boolean field type.
     *
     * @param $fieldValue int:string:bool should all work
     * @param array $context The context for execution of the current migrations. Contains f.e. the path to the migration
     * @return CheckboxValue
     */
    public function createValue($fieldValue, array $context = array())
    {
        new CheckboxValue(($fieldValue == 1) ? true : false);
    }
}