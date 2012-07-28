<!--Please note, this code has to be placed in the order confirmation page, er, invoice page </header> -->
<!-- START Trusted Stores Order -->
<div id="gts-order" style="display:none;">
    <!-- start order and merchant information -->
    <span id="gts-o-id">Order ID</span>
    <span id="gts-o-domain">your_website_address</span>
    <span id="gts-o-email">email_of_buyer</span>
    <span id="gts-o-country">US</span>
    <span id="gts-o-currency">USD</span>
    <span id="gts-o-total">total_order_amount</span>
    <span id="gts-o-discounts"></span>
    <span id="gts-o-shipping-total">shipping_amount</span>
    <span id="gts-o-tax-total"></span>
    <span id="gts-o-est-ship-date">estimated_shipment_date</span>
    <span id="gts-o-has-preorder">N</span>
    <span id="gts-o-has-digital">N</span>
    <!-- end order and merchant information -->

    <!-- start repeated item specific information -->
    <!-- item example: this area repeated for each item in the order -->
    <!-- assuming we have $data array with list of items !-->
    <?php foreach ($data['products'] as $product) { ?>
    <span class="gts-item">
    <span class="gts-i-name"><?=$product['title'];?></span>
    <span class="gts-i-price"><?=$product['amount'];?></span>
    <span class="gts-i-quantity"><?=$product['quantity'];?></span>
    <span class="gts-i-prodsearch-id"><?=$product['code'];?></span>
    <span class="gts-i-prodsearch-store-id">xxxxxx</span> <!--Your store ID !-->
    <span class="gts-i-prodsearch-country">US</span>
    <span class="gts-i-prodsearch-language">EN</span>
  </span>
    <? } ?>
    <!-- end item 1 example -->
    <!-- end repeated item specific information -->
</div>
<!-- END Trusted Stores -->