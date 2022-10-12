<?php
    namespace IoJaegers\Mjoelner\Objects\Text\Operations;

    use IoJaegers\Mjoelner\Objects\Text\Operations\Templates\OperationString;


    /**
     *
     */
    class ReplaceString
        extends OperationString
    {
        /**
         *
         */
        public function __construct( $startPosition = 0,
                                     $endPosition = null,
                                     $text = "" )
        {
            $this->setStartPosition( $startPosition );
            $this->setEndPosition( $endPosition );

            $this->setText( $text );
        }


        /**
         * @return void
         */
        public function __deconstruct()
        {
            unset( $this->startPosition );
            unset( $this->endPosition );

            unset( $this->text );
        }


        // Variables
        private ?int $startPosition;
        private ?int $endPosition;

        private ?string $text;


        /**
         * @param string $in
         * @return string
         */
        public function applyOperation( string $in ): string
        {
            $new = substr_replace( $in,
                                   $this->getText(),
                                   $this->getStartPosition(),
                                   $this->getEndPosition() );

            return strtolower( $new );
        }


        /**
         * @return int
         */
        public function getStartPosition(): int
        {
            return $this->startPosition;
        }

        /**
         * @return int|null
         */
        public function getEndPosition(): null|int
        {
            return $this->endPosition;
        }

        /**
         * @return string
         */
        public function getText(): string
        {
            return $this->text;
        }


        /**
         * @param int|null $endPosition
         * @return void
         *
         */
        public function setEndPosition( null|int $endPosition ): void
        {
            $this->endPosition = $endPosition;
        }

        /**
         * @param int $startPosition
         */
        public function setStartPosition( int $startPosition ): void
        {
            $this->startPosition = $startPosition;
        }

        /**
         * @param string $text
         */
        public function setText( string $text ): void
        {
            $this->text = $text;
        }

    }
?>