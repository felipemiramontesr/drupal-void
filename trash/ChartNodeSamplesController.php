<?php

/* namespace Drupal\chart_content_type\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

class ChartNodeSamplesController extends ControllerBase {

   public function createTestContent() {
    $chart = [
      'title' => 'Hello, World!',
      'body' => 'This is a node created in code.',
    ];
    $newChartNode = $this->createChartNode($chart);
    $element = [
       '#markup' => '<p>' . t('Created new chart node.') . '</p>',
    ];
    return $element;
  }

  protected function createChartNode($chart) {
    $new_chart = Node::create(['type' => 'chart']);
    $new_chart->set('title', $chart['title']);
    $new_chart->set('body', [
      'value' => $chart['body'],
      'format' => 'basic_html',
    ]);
    $new_chart->enforceIsNew();

    $new_chart->status = 0;
    $new_chart->save();
    return true;
  }

} */