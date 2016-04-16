<?php

/**
 * @file
 * Contains \Drupal\entity_test\EntityTestDeleteForm.
 */

namespace Drupal\entity_test;

use Drupal\Core\Entity\ContentEntityDeleteForm;
use Drupal\Core\Url;

/**
 * Provides the entity_test delete form.
 */
class EntityTestDeleteForm extends ContentEntityDeleteForm {

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
    return new Url('<front>');
  }

}
