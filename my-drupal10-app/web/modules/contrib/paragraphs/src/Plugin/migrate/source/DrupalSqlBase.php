<?php

namespace Drupal\paragraphs\Plugin\migrate\source;

use Drupal\Component\Plugin\ConfigurableInterface;
use Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase as MigrateDrupalSqlBase;
use Drupal\Component\Utility\NestedArray;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Drupal\Core\State\StateInterface;
use Drupal\migrate\Plugin\MigrationInterface;

/**
 * Base Class for Paragraphs DrupalSqlBase migrate source plugins.
 *
 * Add and implement Configurable Plugin interface to
 * Drupal\migrate_drupal\Plugin\migrate\source\DrupalSqlBase.
 */
abstract class DrupalSqlBase extends MigrateDrupalSqlBase implements ConfigurableInterface {

  /**
   * {@inheritdoc}
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, MigrationInterface $migration, StateInterface $state, EntityTypeManagerInterface $entity_type_manager) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $migration, $state, $entity_type_manager);
    $this->setConfiguration($configuration);
  }

  /**
   * {@inheritdoc}
   */
  public function getConfiguration() {
    return $this->configuration;
  }

  /**
   * {@inheritdoc}
   */
  public function setConfiguration(array $configuration) {
    $this->configuration = NestedArray::mergeDeep($this->defaultConfiguration(), $configuration);
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [];
  }

}
