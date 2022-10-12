<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations;

    use IoJaegers\Mjoelner\Objects\Text\Operations\Templates\TextTransformationString;


    /**
     *
     */
    class UpperString
        extends TextTransformationString
    {
        /**
         *
         */
        public function __construct()
        {

        }

        /**
         * @return void
         */
        public function __deconstruct()
        {

        }

        /**
         * @param string $in
         * @param int $begin
         * @param int $end
         * @return string
         */
        protected function section( string $in,
                                    int $begin,
                                    int $end ):
            string
        {

            return "";
        }

        /**
         * @param string $in
         * @return string
         *
         */
        protected function whole( string $in ):
            string
        {
            return strtoupper( $in );
        }
    }
?>