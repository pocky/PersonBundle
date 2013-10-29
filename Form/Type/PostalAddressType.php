<?php

/*
 * This file is part of the Black package.
 *
 * (c) Alexandre Balmes <albalmes@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Black\Bundle\PersonBundle\Form\Type;

use Black\Bundle\CommonBundle\Form\Type\PostalAddressType as AbstractPostalAddressType;

/**
 * Class PostalAddressType
 *
 * @package Black\Bundle\PersonBundle\Form\Type
 * @author  Alexandre Balmes <albalmes@gmail.com>
 * @license http://opensource.org/licenses/mit-license.php MIT
 */
class PostalAddressType extends AbstractPostalAddressType
{
    /**
     * @return string
     */
    public function getName()
    {
        return 'black_person_postaladdress';
    }
}
