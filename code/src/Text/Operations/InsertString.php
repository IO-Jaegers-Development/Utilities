<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations;

    use IoJaegers\Mjoelner\Objects\Text\Operations\Templates\OperationString;


    /**
     *
     */
    class InsertString
        extends OperationString
    {
        // Object
        /**
         *
         */
        public function __construct( int|null $at,
                                     string|null $str )
        {
            $this->setAt( $at );
            $this->setStr( $str );
        }

        /**
         *
         */
        function __destruct()
        {
            unset( $this->at );
            unset( $this->str );
        }

        /**
         * @param string $in
         * @return string
         */
        public function applyOperation( string $in ): string
        {
            $new = substr_replace( $in,
                                   $this->getStr(),
                                   $this->getAt() );
            return $new;
        }

        // Variables
        private ?int $at = null;
        private ?string $str = null;


        // Accessors
        /**
         * @return int|null
         */
        public function getAt(): ?int
        {
            return $this->at;
        }

        /**
         * @param int|null $at
         */
        public function setAt( ?int $at ): void
        {
            $this->at = $at;
        }

        /**
         * @return bool
         */
        public function isAtNull(): bool
        {
            return $this->at == null;
        }

        /**
         * @return string|null
         */
        public function getStr(): ?string
        {
            return $this->str;
        }

        /**
         * @param string|null $str
         */
        public function setStr( ?string $str ): void
        {
            $this->str = $str;
        }

        /**
         * @return bool
         */
        public function isStrNull(): bool
        {
            return $this->str == null;
        }

        /**
         * @return int
         */
        public function sizeOfStr(): int
        {
            return strlen( $this->str );
        }
    }
?>