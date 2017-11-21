<?php
/**
 * Collmex Customer Get Type
 *
 * @author    Sebastian Gunreben
 * @author    Marcus Jaschen <mail@marcusjaschen.de>
 * @license   http://www.opensource.org/licenses/mit-license MIT License
 * @link      https://github.com/mjaschen/collmex
 */

namespace MarcusJaschen\Collmex\Type;

/**
 * Collmex Customer Get Type
 *
 * @author    Sebastian Gunreben
 * @author    Marcus Jaschen <mail@marcusjaschen.de>
 * @license   http://www.opensource.org/licenses/mit-license MIT License
 * @link      https://github.com/mjaschen/collmex
 */
class MemberGet extends AbstractType implements TypeInterface
{
    /**
     * @var array
     */
    protected $template = [
        'type_identifier'  => 'MEMBER_GET',
        'customer_id'      => null,
        'client_id'        => null,
        'query'            => null,
        'zipcode'          => null,
        'address_group_id' => null,
        'exited_too'       => null,
        'only_changed'     => null,
        'system_name'      => null,
    ];

    /**
     * Formally validates the type data in $data attribute.
     *
     * @return bool Validation success
     */
    public function validate()
    {
        return true;
    }
}
