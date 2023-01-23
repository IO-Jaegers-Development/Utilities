<?php
	/**
	 *
	 */
    namespace IoJaegers\Utilities\Headers;


	/**
	 *
	 */
    abstract class CommandHeader
    {
		/**
		 * @return never
		 */
        public abstract function execute(): never;
    }
?>