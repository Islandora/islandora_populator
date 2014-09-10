<?php

/**
 * @file
 * New hook definitions.
 */

/**
 * Allow the definition of XML populators.
 *
 * @return array
 *   An associative array mapping unique (module-prefixed?) keys to arrays
 *   containing:
 *   - title
 *   - description
 *   - type
 *     - inline
 *     - form
 *   - form: If type is inline, an array containing a form definition. If type
 *     is "form", the name of a form to use.
 *   - output: An associative array mapping datastream IDs to:
 *     - callback: The function used in the submit handler to process into the
 *       desired XML format. Should accept the $form and $form_state as parameters.
 *     - mimetype: The mimetype to apply to the output (defaults to
 *       "text/xml").
 */
function hook_islandora_populator() {
  return array(
    'my_awesome_module_transmogrifier' => array(
      'title' => t('Transmogrifier'),
      'description' => t('Does things.'),
      'type' => 'inline',
      'form' => array(
        'file' => array(
          '#type' => 'managed_file',
        ),
      ),
      'output' => array(
        'STUFF' => array(
          'callback' => 'my_awesome_module_transmogrify',
          'mimetype' => 'application/json',
        ),
      ),
    ),
  );
}
