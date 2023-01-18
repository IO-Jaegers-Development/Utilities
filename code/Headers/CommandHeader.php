<?php
    namespace IoJaegers\Utilities\Headers;


    abstract class CommandHeader
    {
        public abstract function execute(): never;
    }
?>