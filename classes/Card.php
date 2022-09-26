<?php

  /*

    The Card class currently contains a single render_card method that generates HTML structure for a product

    The render_card method accepts an array as an argument, with additional parameters. Example:

    array(
      "image" => array(
        "url" => "imageurl.png",
        "alt" => "Your alt attribute for the image"
      ),
      "title" => "The product name rendered inside an <h2> element",
      "cta" => array(
        "link" => "https://calltoactionlink.com",
        "text" => "Order"
      )
    )

  */

  class Card {

    public function render_card($args) {
      $template = <<< CARD
      <div class="category_card d-flex flex-column align-items-center">
          <img src="{$args['image']['url']}" alt="{$args['image']['alt']}"/>
          <h3>{$args['title']}</h3>
          <a class="btn btn-default btn--arrow" href="{$args['cta']['link']}">{$args['cta']['text']}</a>
      </div>
      CARD;

      echo $template;
    }

  }

?>