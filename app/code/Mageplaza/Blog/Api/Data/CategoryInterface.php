<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_Blog
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\Blog\Api\Data;

/**
 * Interface CategoryInterface
 * @package Mageplaza\Blog\Api\Data
 */
interface CategoryInterface
{
    /**
     * Constants used as data array keys
     */
    const CATEGORY_ID      = 'category_id';
    const NAME             = 'name';
    const URL_KEY          = 'url_key';
    const DESCRIPTION      = 'description';
    const STORE_IDS        = 'store_ids';
    const ENABLED          = 'enabled';
    const UPDATED_AT       = 'updated_at';
    const CREATED_AT       = 'created_at';
    const META_TITLE       = 'meta_title';
    const META_DESCRIPTION = 'meta_description';
    const META_KEYWORDS    = 'meta_keywords';
    const META_ROBOTS      = 'meta_robots';
    const IMPORT_SOURCE    = 'import_source';
    const PARENT_ID        = 'parent_id';
    const PATH             = 'path';
    const POSITION         = 'position';
    const LEVEL            = 'level';
    const CHILDREN_COUNT   = 'children_count';

    const ATTRIBUTES = [
        self::CATEGORY_ID,
        self::NAME,
        self::DESCRIPTION,
        self::STORE_IDS,
        self::ENABLED,
        self::URL_KEY,
        self::META_TITLE,
        self::META_DESCRIPTION,
        self::META_KEYWORDS,
        self::META_ROBOTS,
        self::PARENT_ID,
        self::PATH,
        self::POSITION,
        self::LEVEL,
        self::CHILDREN_COUNT
    ];

    /**
     * @return int|null
     */
    public function getId();

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setId($id);

    /**
     * @return string/null
     */
    public function getName();

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName($name);

    /**
     * Get Post Description
     *
     * @return string/null
     */
    public function getDescription();

    /**
     * Set Post Short Description
     *
     * @param string $content
     *
     * @return $this
     */
    public function setDescription($content);

    /**
     * Get Post Store Id
     *
     * @return int/null
     */
    public function getStoreIds();

    /**
     * Set Post Store Id
     *
     * @param int $storeId
     *
     * @return $this
     */
    public function setStoreIds($storeId);

    /**
     * Get Post Image
     *
     * @return string/null
     */
    public function getImage();

    /**
     * Set Post Image
     *
     * @param string $content
     *
     * @return $this
     */
    public function setImage($content);

    /**
     * Get Post Enabled
     *
     * @return int/null
     */
    public function getEnabled();

    /**
     * Set Post Enabled
     *
     * @param int $enabled
     *
     * @return $this
     */
    public function setEnabled($enabled);

    /**
     * Get Post Url Key
     *
     * @return string/null
     */
    public function getUrlKey();

    /**
     * Set Post Url Key
     *
     * @param string $url
     *
     * @return $this
     */
    public function setUrlKey($url);

    /**
     * Get Post Meta Title
     *
     * @return string/null
     */
    public function getMetaTitle();

    /**
     * Set Post Meta Title
     *
     * @param string $meta
     *
     * @return $this
     */
    public function setMetaTitle($meta);

    /**
     * Get Post Meta Description
     *
     * @return string/null
     */
    public function getMetaDescription();

    /**
     * Set Post Meta Description
     *
     * @param string $meta
     *
     * @return $this
     */
    public function setMetaDescription($meta);

    /**
     * Get Post Meta Keywords
     *
     * @return string/null
     */
    public function getMetaKeywords();

    /**
     * Set Post Meta Keywords
     *
     * @param string $meta
     *
     * @return $this
     */
    public function setMetaKeywords($meta);

    /**
     * Get Post Meta Robots
     *
     * @return string/null
     */
    public function getMetaRobots();

    /**
     * Set Post Meta Robots
     *
     * @param string $meta
     *
     * @return $this
     */
    public function setMetaRobots($meta);

    /**
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * @param string $createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt);

    /**
     * Get Post updated date
     *
     * @return string|null
     */
    public function getUpdatedAt();

    /**
     * Set Post updated date
     *
     * @param string $updatedAt
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt);

    /**
     * @return string|null
     */
    public function getImportSource();

    /**
     * @param string $importSource
     *
     * @return $this
     */
    public function setImportSource($importSource);

    /**
     * @return int|null
     */
    public function getParentId();

    /**
     * @param int $id
     *
     * @return $this
     */
    public function setParentId($id);

    /**
     * @return string|null
     */
    public function getPath();

    /**
     * @param string $path
     *
     * @return $this
     */
    public function setPath($path);

    /**
     * @return int|null
     */
    public function getPosition();

    /**
     * @param int $position
     *
     * @return $this
     */
    public function setPosition($position);

    /**
     * @return int|null
     */
    public function getLevel();

    /**
     * @param int $level
     *
     * @return $this
     */
    public function setLevel($level);

    /**
     * @return int|null
     */
    public function getChildrenCount();

    /**
     * @param int $count
     *
     * @return $this
     */
    public function setChildrenCount($count);
}