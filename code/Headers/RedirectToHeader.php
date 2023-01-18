<?php
    namespace IoJaegers\Utilities\Headers;


    /**
     *
     */
    class RedirectToHeader
        extends CommandHeader
    {
        /**
         * @param $toLink
         */
        public function __construct( $toLink )
        {
            $this->setRedirectTo( $toLink );
        }

        // Variables
        private string|null $redirectTo = null;


        /**
         * @return never
         * @throws \Exception
         */
        public function execute(): never
        {
            if( $this->getRedirectTo() == null )
            {
                throw new \Exception('RedirectToHeader can not be null.');
            }

            header('Location: ' . $this->getRedirectTo() );
            exit();
        }


        /**
         * @return string|null
         */
        public final function getRedirectTo(): ?string
        {
            return $this->redirectTo;
        }

        /**
         * @param string|null $redirectTo
         */
        public final function setRedirectTo( ?string $redirectTo ): void
        {
            $this->redirectTo = $redirectTo;
        }
    }
?>