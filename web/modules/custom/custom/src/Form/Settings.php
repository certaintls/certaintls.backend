<?php

namespace Drupal\custom\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configure settings for this site.
 */
class Settings extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'custom_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['custom.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('custom.settings');

    $form['score_threshold'] = [
      '#type' => 'number',
      '#min' => 1,
      '#max' => 100,
      '#title' => $this->t('Freedom of Scores Threshold'),
      '#description' => $this->t('Companies based in a country with a Freedom in the World score less than this threshold will be marked as untrustworthy.'),
      '#default_value' => $config->get('score_threshold') ?? 40,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the configuration.
    $this->configFactory->getEditable('custom.settings')
    // Set the submitted configuration setting.
      ->set('score_threshold', $form_state->getValue('score_threshold'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
