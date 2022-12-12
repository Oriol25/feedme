<?php

namespace App\Actions\Parser;

use GuzzleHttp\Promise\PromiseInterface;
use Symfony\Component\HttpFoundation\Response;

class Parser
{
    private PromiseInterface|\Illuminate\Http\Client\Response|Response $data;
    private string $language_tag;

    // PRODUCT
    private const PRODUCT_ROOT = 'product';

    // REGULAR SIZE IMAGE
    private const REGULAR_FRONT_IMAGE = 'image_front_url';
    private const REGULAR_INGREDIENTS_IMAGE = 'image_ingredients_url';
    private const REGULAR_NUTRITION_IMAGE = 'image_nutrition_url';

    // THUMB SIZE IMAGE
    private const THUMB_FRONT_IMAGE = 'image_front_thumb_url';
    private const THUMB_INGREDIENTS_IMAGE = 'image_ingredients_thumb_url';
    private const THUMB_NUTRITION_IMAGE = 'image_nutrition_thumb_url';

    // SMALL SIZE IMAGE
    private const SMALL_FRONT_IMAGE = 'image_front_small_url';
    private const SMALL_INGREDIENTS_IMAGE = 'image_ingredients_small_url';
    private const SMALL_NUTRITION_IMAGE = 'image_nutrition_small_url';

    // PRODUCT DATA
    private const PRODUCT_TITLE = 'product_name';
    private const PRODUCT_QUANTITY = 'quantity';
    private const PRODUCT_EAN = 'code';
    private const PRODUCT_BRANDS = 'brands';
    private const PRODUCT_CATEGORIES = 'categories';
    private const PRODUCT_ALLERGENS = 'allergens_tags';
    private const PRODUCT_INGREDIENTS_ID = 'ingredients_hierarchy';
    private const PRODUCT_INGREDIENTS_TEXT = 'ingredients_text';
    private const PRODUCT_NUTRISCORE_GRADE = 'nutriscore_grade';
    private const PRODUCT_NOVA_GROUP = 'nova_group';

    /**
     * @param PromiseInterface|\Illuminate\Http\Client\Response|Response $data
     * @param string $language_tag
     */
    public function __construct(PromiseInterface|\Illuminate\Http\Client\Response|Response $data, string $language_tag)
    {
        $this->data = $data;
        $this->language_tag = $language_tag;
    }

    /**
     * @return array
     */
    public function getAllData(): array
    {
        $data_parsed = [];

        $data_parsed['REGULAR_FRONT_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::REGULAR_FRONT_IMAGE] ?? '';
        $data_parsed['REGULAR_INGREDIENTS_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::REGULAR_INGREDIENTS_IMAGE] ?? '';
        $data_parsed['REGULAR_NUTRITION_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::REGULAR_NUTRITION_IMAGE] ?? '';
        $data_parsed['THUMB_FRONT_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::THUMB_FRONT_IMAGE] ?? '';
        $data_parsed['THUMB_INGREDIENTS_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::THUMB_INGREDIENTS_IMAGE] ?? '';
        $data_parsed['THUMB_NUTRITION_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::THUMB_NUTRITION_IMAGE] ?? '';
        $data_parsed['SMALL_FRONT_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::SMALL_FRONT_IMAGE] ?? '';
        $data_parsed['SMALL_INGREDIENTS_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::SMALL_INGREDIENTS_IMAGE] ?? '';
        $data_parsed['SMALL_NUTRITION_IMAGE'] = $this->data[self::PRODUCT_ROOT][self::SMALL_NUTRITION_IMAGE] ?? '';
        $data_parsed['PRODUCT_TITLE'] = $this->data[self::PRODUCT_ROOT][self::PRODUCT_TITLE] ?? '';
        $data_parsed['PRODUCT_QUANTITY'] = $this->data[self::PRODUCT_ROOT][self::PRODUCT_QUANTITY] ?? '';
        $data_parsed['PRODUCT_EAN'] = $this->data[self::PRODUCT_ROOT][self::PRODUCT_EAN] ?? '';
        $data_parsed['PRODUCT_BRANDS'] = $this->data[self::PRODUCT_ROOT][self::PRODUCT_BRANDS] ?? '';
        $data_parsed['PRODUCT_CATEGORIES'] = $this->data[self::PRODUCT_ROOT][self::PRODUCT_CATEGORIES] ?? '';
        $data_parsed['PRODUCT_ALLERGENS'] = self::extractOnlySelectedLanguageTag($this->data[self::PRODUCT_ROOT][self::PRODUCT_ALLERGENS], $this->language_tag) ?? [];
        $data_parsed['PRODUCT_INGREDIENTS_ID'] = self::extractOnlySelectedLanguageTag($this->data[self::PRODUCT_ROOT][self::PRODUCT_INGREDIENTS_ID], $this->language_tag) ?? '';
        $data_parsed['PRODUCT_INGREDIENTS_TEXT'] = $this->data[self::PRODUCT_ROOT][self::PRODUCT_INGREDIENTS_TEXT] ?? '';
        $data_parsed['PRODUCT_NUTRISCORE_GRADE'] = $this->data[self::PRODUCT_ROOT][self::PRODUCT_NUTRISCORE_GRADE] ?? '';
        $data_parsed['PRODUCT_NOVA_GROUP'] = $this->data[self::PRODUCT_ROOT][self::PRODUCT_NOVA_GROUP] ?? '';

        return $data_parsed;
    }

    /**
     * @param array $data
     * @param string $tag
     * @return array
     */
    public static function extractOnlySelectedLanguageTag(array $data, string $tag): array
    {
        $data_parsed = [];

        foreach ($data as $item) {
            if (str_contains($item, $tag)) {
                $data_parsed[] = str_replace("$tag:", "", $item);;
            }
        }

        return $data_parsed;
    }

}
