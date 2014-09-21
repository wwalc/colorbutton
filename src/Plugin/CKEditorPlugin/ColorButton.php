<?php

/**
 * @file
 * Contains \Drupal\colorbutton\Plugin\CKEditorPlugin\ColorButton.
 */

namespace Drupal\colorbutton\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\Component\Plugin\PluginBase;
use Drupal\ckeditor\Annotation\CKEditorPlugin;
// Do not remove the line below because of:
// [Semantical Error] The annotation "@Translation" in class
// Drupal\ckeditor_smiley\Plugin\CKEditorPlugin\Smiley was never imported.
// Did you maybe forget to add a "use" statement for this annotation?
use Drupal\Core\Annotation\Translation;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "ColorButton" plugin.
 * @see MetaContextual
 * @see MetaButton
 * @see MetaContextualAndButton
 *
 * @CKEditorPlugin(
 *   id = "colorbutton",
 *   label = @Translation("ColorButton")
 * )
 */
class ColorButton extends PluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface {

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getDependencies().
   */
  function getDependencies(Editor $editor) {
    return array('panelbutton');
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getLibraries().
   */
  function getLibraries(Editor $editor) {
    return array();
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::isInternal().
   */
  function isInternal() {
    return FALSE;
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getFile().
   */
  function getFile() {
    return drupal_get_path('module', 'colorbutton') . '/js/plugins/colorbutton/plugin.js';
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginButtonsInterface::getButtons().
   */
  function getButtons() {
    return array(
      'TextColor' => array(
        'label' => t('Text Color'),
        'image' => drupal_get_path('module', 'colorbutton') . '/js/plugins/colorbutton/icons/textcolor.png',
      ),
      'BGColor' => array(
        'label' => t('Background Color'),
        'image' => drupal_get_path('module', 'colorbutton') . '/js/plugins/colorbutton/icons/bgcolor.png',
      )
    );
  }

  /**
   * Implements \Drupal\ckeditor\Plugin\CKEditorPluginInterface::getConfig().
   */
  public function getConfig(Editor $editor) {
    return array();
  }
}
