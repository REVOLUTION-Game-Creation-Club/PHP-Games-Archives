<?php

/**
 *
 * Enter description here ...
 *
 * @uses Wootook_Object
 * @uses Legacies_Empire
 */
class Wootook_Empire_Helper_Config_Types
    extends Wootook_Core_Helper_Config_ConfigHandler
    implements Wootook_Core_Singleton
{
    private static $_singleton = null;

    public static function getSingleton()
    {
        if (self::$_singleton === null) {
            self::$_singleton = new self();
        }
        return self::$_singleton;
    }

    protected function _init()
    {
        $this->_initData('types');
        return $this;
    }

    protected function _load()
    {
        // NOP
        return $this;
    }

    protected function _save()
    {
        // NOP
        return $this;
    }

    protected function _delete()
    {
        // NOP
        return $this;
    }

    public function is($element, $type)
    {
        if (!is_array($this->getData($type))) {
            return false;
        }
        return in_array($element, $this->getData($type));
    }
}