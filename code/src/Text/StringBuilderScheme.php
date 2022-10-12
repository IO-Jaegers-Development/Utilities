<?php
    namespace IoJaegers\Mjoelner\Objects\Text;

    use IoJaegers\Mjoelner\Objects\Text\Operations\DeleteString;
    use IoJaegers\Mjoelner\Objects\Text\Operations\InsertString;

    use IoJaegers\Mjoelner\Objects\Text\Operations\LowerString;
    use IoJaegers\Mjoelner\Objects\Text\Operations\UpperString;


    /**
     *
     */
    class StringBuilderScheme
    {
        //
        /**
         *
         */
        public function __construct()
        {
            $this->setLastIndex( self::zero );
            $this->extend();
        }

        /**
         *
         */
        function __destruct()
        {
            unset( $this->buffer );
            unset( $this->lastIndex );
        }

        /**
         * @return void
         */
        public final function extend(): void
        {
            $this->extend_by_size(
                self::defaultStringLength
            );
        }

        public final function extend_by_size( int $n ): void
        {
            if( $this->isBufferNull() )
            {
                $this->clear();
            }

            $b = $this->getBuffer();
            $b = $b . str_repeat(' ', $n );

            $this->setBuffer( $b );
        }


        /**
         * @param string $values
         * @return void
         */
        public final function append( string $values ): void
        {
            $sizeOfValues = strlen( $values );

            if( $sizeOfValues == self::zero )
                return;

            $insertObject = new InsertString( $this->getLastIndex(), $values );

            $this->moveIndex( $sizeOfValues );
            $this->insert( $insertObject );
        }


        /**
         * @param DeleteString $deletion
         * @return void
         */
        public final function delete( DeleteString $deletion ): void
        {
            $newBuffer = $deletion->applyOperation( $this->getBuffer() );
            $this->setBuffer( $newBuffer );
        }

        /**
         * @param InsertString $insert
         * @return void
         */
        public final function insert( InsertString $insert ): void
        {
            $sizeOfBuffer = $this->sizeOfBuffer();
            $sizeOfInsert = $insert->sizeOfStr();

            $expectation = $insert->getAt() + $sizeOfInsert;

            if( $sizeOfBuffer < $expectation )
            {
                $delta = $expectation - $sizeOfBuffer;
                $this->extend_by_size( $delta );
            }

            $endValue = $insert->applyOperation( $this->getBuffer() );
            $this->setBuffer( $endValue );
        }

        /**
         * @param UpperString $upper
         * @return void
         */
        public final function toUpper( UpperString $upper ): void
        {
            $new = $upper->applyOperation( $this->buffer );
            $this->setBuffer( $new );
        }

        /**
         * @param LowerString $lower
         * @return void
         */
        public final function toLower( LowerString $lower ): void
        {
            $new = $lower->applyOperation( $this->buffer );
            $this->setBuffer( $new );
        }



        /**
         * @return void
         */
        public function clear(): void
        {
            $this->setBuffer( '' );
        }


        /**
         * @return string|null
         */
        public function toString(): ?string
        {
            return substr( $this->getBuffer(),
                        0,
                           $this->getLastIndex() );
        }

        // Variables
        private ?string $buffer = null;

            // End of line
        private ?int $lastIndex = null;

        private const defaultStringLength = 25;
        private const zero = 0;



        // Accessors
        /**
         * @return string|null
         */
        public final function getBuffer(): ?string
        {
            return $this->buffer;
        }

        /**
         * @param string|null $buffer
         */
        public final function setBuffer( ?string $buffer ): void
        {
            $this->buffer = $buffer;
        }

        /**
         * @return int
         */
        public final function sizeOfBuffer(): int
        {
            return strlen( $this->getBuffer() );
        }

        /**
         * @return bool
         */
        public final function isBufferNull(): bool
        {
            return $this->buffer == null;
        }

        /**
         * @return int|null
         */
        public final function getLastIndex(): ?int
        {
            return $this->lastIndex;
        }

        /**
         * @param int|null $lastIndex
         */
        public final function setLastIndex( ?int $lastIndex ): void
        {
            $this->lastIndex = $lastIndex;
        }

        /**
         * @param int $increaseWith
         * @return void
         */
        public final function moveIndex( int $increaseWith ): void
        {
            $i = $this->getLastIndex();
            $i = $i + $increaseWith;

            $this->setLastIndex( $i );
        }

        /**
         * @return bool
         */
        public final function isLastIndexNull(): bool
        {
            return $this->lastIndex == null;
        }
    }
?>