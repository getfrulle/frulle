<?php
return function () {
  $posts = [
    [
      'title' => 'Hello',
      'description' => 'Liquorice marzipan candy cheesecake candy toffee candy shortbread soufflé. Pie cupcake liquorice wafer bear claw croissant marshmallow. Sweet tart cotton candy tiramisu toffee oat cake wafer.'
    ],
    [
      'title' => 'World',
      'description' => 'Sweet roll topping liquorice cake marzipan jujubes. Tart sweet roll bear claw icing croissant cupcake. Marshmallow fruitcake jelly-o carrot cake jelly beans. Dragée carrot cake ice cream halvah dessert candy canes jelly-o gingerbread.'
    ],
    [
      'title' => 'Foo',
      'description' => 'Marzipan tart bonbon jelly cotton candy lollipop cake powder. Muffin bonbon jujubes jelly-o oat cake marshmallow caramels candy canes cake. Liquorice gummi bears candy bear claw pie halvah tart danish tart.'
    ]
  ];
  return [
    'title' => 'Hello world',
    'posts' => $posts
  ];
};
