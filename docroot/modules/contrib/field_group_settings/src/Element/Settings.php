<?php

namespace Drupal\field_group_settings\Element;

use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Render\Element\RenderElement;

/**
 * Provides a settings render element for Field Groups.
 *
 * @RenderElement("field_group_settings")
 */
class Settings extends RenderElement {

  /**
   * {@inheritdoc}
   */
  public function getInfo() {
    $class = get_class($this);

    return [
      // '#process' => [
      //   [$class, 'processHtmlElement'],
      // ],
      '#theme_wrappers' => ['field_group_settings'],
    ];
  }

  /**
   * Process a settings element
   *
   * @param array $element
   *   An associative array containing the properties and children of the
   *   details element.
   * @param FormStateInterface $form_state
   *   The current state of the form.
   *
   * @return array
   *   The processed element.
   */
  public static function processHtmlElement(&$element, FormStateInterface $form_state) {
    return $element;
  }

}
