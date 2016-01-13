<?php

/**
 * @file
 * This file contains no working PHP code; it exists to provide additional
 * documentation for Doxygen as well as to document hooks in the standard
 * Drupal manner.
 */

/**
 * Allows modules to alter index configuration during creation.
 *
 * @param array $options
 *   An array of index options.
 */
function hook_search_api_elasticsearch_elastica_add_index_alter(array $options) {

}

/**
 * Allows modules to react after index creation.
 *
 * @param SearchApiIndex $index
 * @param array $options
 * @param \Elastica\Index $elastica_index
 */
function hook_search_api_elasticsearch_elastica_create_index(SearchApiIndex $index, array $options, \Elastica\Index $elastica_index) {

}

/**
 * Allows modules to alter Elastica query.
 *
 * @param \Elastica\Query $elastica_query
 *   The Elastica query object to be altered.
 * @param SearchApiQueryInterface $query
 *   The original Search API query.
 */
function hook_search_api_elasticsearch_elastica_query_alter(\Elastica\Query &$elastica_query, SearchApiQueryInterface $search_api_query) {

}
