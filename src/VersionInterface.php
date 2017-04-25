<?php
/*
 * This file is part of the developer-recruitment-test.
 *
 * (c) Kokoroe <contact@kokoroe.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare( stric_types = 1 );

namespace Kokoroe\Recruitment;

interface VersionInterface {

    const PRE_RELEASE_ALPHA = 1;
    const PRE_RELEASE_BETA  = 2;
    const PRE_RELEASE_RC    = 3;
    const PRE_RELEASE_NONE  = 4;

    /**
     * Get the major of the version
     *
     * @return integer
     */
    public function getMajor( ) : int;

    /**
     * Get the minor of the version
     *
     * @return integer
     */
    public function getMinor( ) : int;

    /**
     * Get the patch of the version
     *
     * @return integer
     */
    public function getPatch( ) : int;

    /**
     * Get the build of the version
     *
     * @return string | NULL
     */
    public function getBuild( ) : ?string;

    /**
     * Get the release type of the version
     *
     * @return integer
     */
    public function getPreReleaseType( ) : int;

    /**
     * Get the release identifier of the version
     *
     * @return string | NULL
     */
    public function getPreReleaseId( ) : ?string;

    /**
     * Get the release of the version
     *
     * @return string | NULL
     */
    public function getPreRelease( ) : ?string;

    /**
     * Check if the version is valid
     *
     * @return boolean
     */
    public function isValid( ) : bool;

    /**
     * Check if the version is stable
     *
     * @return boolean
     */
    public function isStable( ) : bool;

    /**
     * Get full version
     *
     * @return string
     */
    public function __toString( ) : string;
}
