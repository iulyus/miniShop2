<?php
/**
 * Properties English Lexicon Entries for miniShop2
 *
 * @package minishop2
 * @subpackage lexicon
 */
$_lang['ms2_prop_limit'] = 'The number of results to limit.';
$_lang['ms2_prop_offset'] = 'An offset of resources returned by the criteria to skip';
$_lang['ms2_prop_depth'] = 'Integer value indicating depth to search for resources from each parent.';
$_lang['ms2_prop_sortby'] = 'The field to sort by. For sorting by product fields you need to add prefix "Data.", for example: "&sortby=`Data.price`"';
$_lang['ms2_prop_sortdir'] = 'The direction to sort by';
$_lang['ms2_prop_where'] = 'A JSON-style expression of criteria to build any additional where clauses from';
$_lang['ms2_prop_tpl'] = 'The chunk tpl to use for each row.';
$_lang['ms2_prop_toPlaceholder'] = 'If not empty, the snippet will save output to placeholder with that name, instead of return it to screen.';
$_lang['ms2_prop_showLog'] = 'Display additional information about snippet work. Only for authenticated in context "mgr".';
$_lang['ms2_prop_parents'] = 'Container list, separated by commas, to search results. By default, the query is limited to the current parent. If set to 0, query not limited.';
$_lang['ms2_prop_resources'] = 'Comma-delimited list of ids to include in the results. Prefix an id with a dash to exclude the resource from the result.';
$_lang['ms2_prop_fastMode'] = 'If enabled, then in chunk will be only received values ​​from the database. All raw tags of MODX, such as filters, snippets calls will be cut.';
$_lang['ms2_prop_includeContent'] = 'Retrieve field "content" from products.';
$_lang['ms2_prop_where'] = 'A JSON-style expression of criteria to build any additional where clauses from.';
$_lang['ms2_prop_includeTVs'] = 'An optional comma-delimited list of TemplateVar names to include in selection. For example "action,time" give you placeholders [[+action]] and [[+time]].';
$_lang['ms2_prop_includeThumbs'] = 'An optional comma-delimited list of Thumbnail sizes to include in selection. For example: "120x90,360x240" give you placeholders [[+120x90]] and [[+360x240]]. Thumbnails must be generted in gallery of product.';
$_lang['ms2_prop_link'] = 'Id of link of goods, which is automatically assigned when you create a new link in the settings.';
$_lang['ms2_prop_master'] = 'Id of the master product. If specified both "master" and "slave" - query will built for master.';
$_lang['ms2_prop_slave'] = 'Id of the slave product. If specified "master" this option will be ignored.';
$_lang['ms2_prop_class'] = 'Name of class for selection. By default, "msProduct".';
$_lang['ms2_prop_tvPrefix'] = 'The prefix for TemplateVar properties, "tv." for example. By default it is empty.';
$_lang['ms2_prop_outputSeparator'] = 'An optional string to separate each tpl instance.';
$_lang['ms2_prop_returnIds'] = 'If true, snippet will return comma separated string with ids of results instead of chunks.';

$_lang['ms2_prop_showUnpublished'] = 'Show unpublished goods.';
$_lang['ms2_prop_showDeleted'] = 'Show deleted goods.';
$_lang['ms2_prop_showHidden'] = 'Show goods, that hidden in menu.';
$_lang['ms2_prop_showZeroPrice'] = 'Show goods with zero price.';

$_lang['ms2_prop_tplRow'] = 'Chunk for template one row of query.';
$_lang['ms2_prop_tplOuter'] = 'Wrapper for template results of snippet work.';
$_lang['ms2_prop_tplEmpty'] = 'Chunk that returns when no results.';
$_lang['ms2_prop_tplSuccess'] = 'Chunk with successfull message about snippet work.';
$_lang['ms2_prop_tplPaymentsOuter'] = 'Chunk for templating of a block of possible payment methods.';
$_lang['ms2_prop_tplPaymentsRow'] = 'Chunk to process a payment method.';
$_lang['ms2_prop_tplDeliveriesOuter'] = 'Chunk for templating of a block of possible ways of deliveries.';
$_lang['ms2_prop_tplDeliveriesRow'] = 'Chunk to process a way of delivery.';

$_lang['ms2_prop_product'] = 'Id of the product. If empty, will used id of the current document.';
$_lang['ms2_prop_optionSelected'] = 'Name of the active option, for setting attribute "selected"';
$_lang['ms2_prop_optionName'] = 'Name of the option for displaying.';