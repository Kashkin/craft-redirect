<?php
/**
 *
 * @author    dolphiq
 * @copyright Copyright (c) 2017 dolphiq
 * @link      https://dolphiq.nl/
 */

namespace venveo\redirect\records;

use craft\db\ActiveRecord;

/**
 * @property string uri
 * @property int hitCount
 * @property int|null siteId
 * @property boolean ignored
 */
class CatchAllUrl extends ActiveRecord
{

    // Public Methods
    // =========================================================================

    public static function tableName(): string
    {
        return '{{%dolphiq_redirects_catch_all_urls}}';
    }

}
