<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations;

    use IoJaegers\Mjoelner\Objects\Text\Operations\Templates\OperationString;



    /**
     *
     */
    class DeleteString
        extends OperationString
    {
        // Object
        /**
         *
         */
        public function __construct( int|null $begin,
                                     int|null $end )
        {
            $this->setBegin( $begin );
            $this->setEnd( $end );
        }

        /**
         *
         */
        function __destruct()
        {
            unset( $this->begin );
            unset( $this->end );
        }

        // Variables
        private ?int $begin = null;
        private ?int $end = null;


        /**
         * @param string $in
         * @return string
         */
        public function applyOperation( string $in ): string
        {
            $length = $this->calculateLength( $this->getBegin(),
                                              $this->getEnd() );

            return substr_replace( $in,
                                   " ",
                                   $this->begin,
                                   $length );
        }

        /**
         * @return int|null
         */
        public final function getBegin(): ?int
        {
            return $this->begin;
        }

        /**
         * @param int|null $begin
         */
        public final function setBegin( ?int $begin ): void
        {
            $this->begin = $begin;
        }

        /**
         * @return bool
         */
        public final function isBeginNull(): bool
        {
            return $this->begin == null;
        }

        /**
         * @return int|null
         */
        public final function getEnd(): ?int
        {
            return $this->end;
        }

        /**
         * @param int|null $end
         */
        public final function setEnd( ?int $end ): void
        {
            $this->end = $end;
        }

        /**
         * @return bool
         */
        public final function isEndNull(): bool
        {
            return $this->end == null;
        }
    }
?>