<?php

/**
 * @file
 * Utility functions.
 */

/**
 * Get populators.
 *
 * @param string|array $id
 *   An optional string or array of IDs to restrict the list of populators
 *   returned.
 *
 * @return array
 *   An associative array mapping the numerical populator ID to an associative
 *   mapping out the fields from the islandora_xslt_populator database table.
 */
function islandora_xslt_populator_get_populators($id = NULL) {
  $query = db_select('islandora_xslt_populator', 'p')
    ->fields('p', array());
  if ($id !== NULL) {
    $query->condition('id', $id);
  }

  $result = $query->execute();
  return $result->fetchAllAssoc('id', PDO::FETCH_ASSOC);
}
