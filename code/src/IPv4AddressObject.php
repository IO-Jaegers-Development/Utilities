<?php
    namespace IoJaegers\Mjoelner\Objects;


    class IPv4AddressObject
    {
        public function __construct( int $r1, int $r2, int $r3, int $r4 )
        {
            $this->setR1( $r1 );
            $this->setR2( $r2 );
            $this->setR3( $r3 );
            $this->setR4( $r4 );
        }

        /**
         *
         */
        function __destruct()
        {

        }

        // Variables
        private static string $seperator = '.';

        private ?int $r1 = null;
        private ?int $r2 = null;
        private ?int $r3 = null;
        private ?int $r4 = null;

        // Accessors
        /**
         * @return string
         */
        public static function getSeperator(): string
        {
            return self::$seperator;
        }

        /**
         * @param string $seperator
         */
        public static function setSeperator( string $seperator ): void
        {
            self::$seperator = $seperator;
        }

        /**
         * @return int|null
         */
        public final function getR1(): ?int
        {
            return $this->r1;
        }

        /**
         * @param int|null $r1
         */
        public final function setR1( ?int $r1 ): void
        {
            $this->r1 = $r1;
        }

        /**
         * @return int|null
         */
        public final function getR2(): ?int
        {
            return $this->r2;
        }

        /**
         * @param int|null $r2
         */
        public final function setR2( ?int $r2 ): void
        {
            $this->r2 = $r2;
        }

        /**
         * @return int|null
         */
        public final function getR3(): ?int
        {
            return $this->r3;
        }

        /**
         * @param int|null $r3
         */
        public final function setR3( ?int $r3 ): void
        {
            $this->r3 = $r3;
        }

        /**
         * @return int|null
         */
        public final function getR4(): ?int
        {
            return $this->r4;
        }

        /**
         * @param int|null $r4
         */
        public final function setR4( ?int $r4 ): void
        {
            $this->r4 = $r4;
        }

        public function toString(): string
        {
            return '';
        }
    }
?>