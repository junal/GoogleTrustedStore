<!--Please note, this page has to be placed in every page of your website. And it has to be added befofe </header> -->
<!-- BEGIN: Google Trusted Store -->
<script type="text/javascript">
//<![CDATA[
    var itemID = 2323; //Your order id.
    var gts = gts || [];
    gts.push(["id", "xxxxx"]); //you can get this id from here https://www.google.com/trustedstores/sell/setupcode
    gts.push(["google_base_offer_id", itemID]);
    gts.push(["google_base_subaccount_id", "xxxxxxxx"]); // You can account id. you can collect it from the merchant account
    gts.push(["google_base_country", "US"]);
    gts.push(["google_base_language", "EN"]);

    (function() {
        var scheme = (("https:" == document.location.protocol) ? "https://" : "http://");
        var gts = document.createElement("script");
        gts.type = "text/javascript";
        gts.async = true;
        gts.src = scheme + "www.googlecommerce.com/trustedstores/gtmp_compiled.js";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(gts, s);
    })();
//]]>
</script><!-- END: Google Trusted Store -->