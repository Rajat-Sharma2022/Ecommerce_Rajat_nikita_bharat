<?php

/**
 * Pimcore
 *
 * This source file is available under two different licenses:
 * - GNU General Public License version 3 (GPLv3)
 * - Pimcore Commercial License (PCL)
 * Full copyright and license information is available in
 * LICENSE.md which is distributed with this source code.
 *
 *  @copyright  Copyright (c) Pimcore GmbH (http://www.pimcore.org)
 *  @license    http://www.pimcore.org/license     GPLv3 and PCL
 */

namespace CustomerManagementFrameworkBundle\Model\OAuth;

/**
 * OAuth2 token response model. The response returns a expires_in, but this expects an absolute expires_at.
 *
 * @see https://tools.ietf.org/html/rfc6749#section-5.1
 */
interface OAuth2TokenInterface extends OAuthTokenInterface
{
    /**
     * Get access token
     *
     * @return string|null
     */
    public function getAccessToken(): ?string;

    /**
     * Set access token
     *
     * @param string|null $accessToken
     *
     * @return $this
     */
    public function setAccessToken(?string $accessToken);

    /**
     * Get refresh token
     *
     * @return string|null
     */
    public function getRefreshToken(): ?string;

    /**
     * Set refresh token
     *
     * @param string|null $refreshToken
     *
     * @return $this
     */
    public function setRefreshToken(?string $refreshToken);

    /**
     * Get token type
     *
     * @return string|null
     */
    public function getTokenType(): ?string;

    /**
     * Set token type
     *
     * @param string|null $tokenType
     *
     * @return $this
     */
    public function setTokenType(?string $tokenType);

    /**
     * Get scope
     *
     * @return string|null
     */
    public function getScope(): ?string;

    /**
     * Set scope
     *
     * @param string|null $scope
     *
     * @return $this
     */
    public function setScope(?string $scope);

    /**
     * Get expires at
     *
     * @return string|null
     */
    public function getExpiresAt(): ?string;

    /**
     * Set expires at
     *
     * @param string|null $expiresAt
     *
     * @return $this
     */
    public function setExpiresAt(?string $expiresAt);
}
