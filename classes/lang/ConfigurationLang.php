<?php
/**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 */

class ConfigurationLangCore extends DataLangCore
{
    // Don't replace domain in init() with $this->domain for translation parsing
    protected $domain = 'Admin.OrdersCustomers.Feature';

    protected $keys = array('id_configuration');

    protected $fieldsToUpdate = array('value');

    protected function init()
    {
        $this->fieldNames = array(
            'value' => array(
                md5("Dear Customer,\n\nRegards,\nCustomer service") // PS_CUSTOMER_SERVICE_SIGNATURE
                    => $this->translator->trans("Dear Customer,\n\nRegards,\nCustomer service", array(), 'Admin.OrdersCustomers.Feature', $this->locale),

                md5('We are currently updating our shop and will be back really soon.Thanks for your patience.') // PS_MAINTENANCE_TEXT
                    => $this->translator->trans('We are currently updating our shop and will be back really soon.&lt;br&gt;Thanks for your patience.', array(), 'Admin.OrdersCustomers.Feature', $this->locale),

                md5('#IN') => $this->translator->trans('#IN', array(), 'Admin.OrdersCustomers.Feature', $this->locale), // PS_INVOICE_PREFIX
                md5('#DE') => $this->translator->trans('#DE', array(), 'Admin.OrdersCustomers.Feature', $this->locale), // PS_DELIVERY_PREFIX
                md5('#RE') => $this->translator->trans('#RE', array(), 'Admin.OrdersCustomers.Feature', $this->locale), // PS_RETURN_PREFIX

                // PS_RETURN_PREFIX - No translate word per word but adapting for your language
                md5('a|about|above|after|again|against|all|am|an|and|any|are|aren|as|at|be|because|been|before|being|below|between|both|but|by|can|cannot|could|couldn|did|didn|do|does|doesn|doing|don|down|during|each|few|for|from|further|had|hadn|has|hasn|have|haven|having|he|ll|her|here|hers|herself|him|himself|his|how|ve|if|in|into|is|isn|it|its|itself|let|me|more|most|mustn|my|myself|no|nor|not|of|off|on|once|only|or|other|ought|our|ours|ourselves|out|over|own|same|shan|she|should|shouldn|so|some|such|than|that|the|their|theirs|them|themselves|then|there|these|they|re|this|those|through|to|too|under|until|up|very|was|wasn|we|were|weren|what|when|where|which|while|who|whom|why|with|won|would|wouldn|you|your|yours|yourself|yourselves')
                    => $this->translator->trans('a|about|above|after|again|against|all|am|an|and|any|are|aren|as|at|be|because|been|before|being|below|between|both|but|by|can|cannot|could|couldn|did|didn|do|does|doesn|doing|don|down|during|each|few|for|from|further|had|hadn|has|hasn|have|haven|having|he|ll|her|here|hers|herself|him|himself|his|how|ve|if|in|into|is|isn|it|its|itself|let|me|more|most|mustn|my|myself|no|nor|not|of|off|on|once|only|or|other|ought|our|ours|ourselves|out|over|own|same|shan|she|should|shouldn|so|some|such|than|that|the|their|theirs|them|themselves|then|there|these|they|re|this|those|through|to|too|under|until|up|very|was|wasn|we|were|weren|what|when|where|which|while|who|whom|why|with|won|would|wouldn|you|your|yours|yourself|yourselves', array(), 'Admin.OrdersCustomers.Feature', $this->locale),
            ),
        );
    }
}
