<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations\Templates;

    /**
     *
     */
    abstract class OperationString
    {
        /**
         * @param string $in input String
         * @return string output
         */
        public abstract function applyOperation( string $in ): string;


        /**
         * @param int $begin
         * @param int $end
         * @return int
         */
        protected function calculateLength( int $begin, int $end ): int
        {
            return $end - $begin;
        }
    }
?>