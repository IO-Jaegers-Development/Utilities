<?php
    namespace IoJaegers\Utilities\Objects;


    class IPv4AddressObject
    {
        public function __construct( int $r1, int $r2, int $r3, int $r4 )
        {
            $this->setS1( $r1 );
            $this->setS2( $r2 );
            $this->setS3( $r3 );
            $this->setS4( $r4 );
        }

        /**
         *
         */
        function __destruct()
        {

        }

        // Variables
        const seperator = '.';

        private ?int $s1 = null;
        private ?int $s2 = null;
        private ?int $s3 = null;
        private ?int $s4 = null;

		
        // Accessors
        /**
         * @return int|null
         */
        public final function getS1(): ?int
        {
            return $this->s1;
        }

        /**
         * @param int|null $s1
         */
        public final function setS1(?int $s1 ): void
        {
            $this->s1 = $s1;
        }

        /**
         * @return int|null
         */
        public final function getS2(): ?int
        {
            return $this->s2;
        }

        /**
         * @param int|null $s2
         */
        public final function setS2(?int $s2 ): void
        {
            $this->s2 = $s2;
        }

        /**
         * @return int|null
         */
        public final function getS3(): ?int
        {
            return $this->s3;
        }

        /**
         * @param int|null $s3
         */
        public final function setS3(?int $s3 ): void
        {
            $this->s3 = $s3;
        }

        /**
         * @return int|null
         */
        public final function getS4(): ?int
        {
            return $this->s4;
        }

        /**
         * @param int|null $s4
         */
        public final function setS4(?int $s4 ): void
        {
            $this->s4 = $s4;
        }

        public function toString(): string
        {
            return '';
        }
    }
?>