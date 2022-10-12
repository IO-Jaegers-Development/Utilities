<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations\Templates;


    /**
     *
     */
    abstract class TextTransformationString
        extends OperationString
    {

        private ?int $begin = null;
        private ?int $end = null;


        /**
         * @param string $in
         * @param int $begin
         * @param int $end
         * @return mixed
         */
        protected abstract function section( string $in,
                                             int $begin,
                                             int $end );

        /**
         * @param string $in
         * @return mixed
         */
        protected abstract function whole( string $in );


        /**
         * @param string $in
         * @return string
         */
        public function applyOperation( string $in ): string
        {
            $newString = $in;

            if( $this->isBeginNull() && $this->isEndNull() )
            {
                $newString = $this->whole( $newString );
                return $newString;
            }

            $newString = $this->section( $newString,
                                         $this->getBegin(),
                                         $this->getEnd() );
            return $newString;
        }


        /**
         * @return int|null
         */
        public final function getBegin(): ?int
        {
            return $this->begin;
        }

        /**
         * @return bool
         */
        public function isBeginNull(): bool
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
         * @param int|null $begin
         * @return void
         */
        public final function setBegin( int|null $begin ): void
        {
            $this->begin = $begin;
        }

        /**
         * @param int|null $end
         * @return void
         */
        public final function setEnd( int|null $end ): void
        {
            $this->end = $end;
        }

        /**
         * @return bool
         */
        public function isEndNull(): bool
        {
            return $this->end == null;
        }

    }
?>